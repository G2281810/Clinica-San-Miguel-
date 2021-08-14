<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cupones;
use App\Models\Pacientes;
use PDF;
use Maatwebsite\Excel\Excel;
use App\Exports\CuponesExport;
class CuponesController extends Controller
{
    private $excel;
  public function __construct(Excel $excel){
    $this->excel = $excel;
  }
    public function altacupon()
    {
        $sessionidusuario = session('sessionidusuario');
      if($sessionidusuario<>"")
      {
            $consulta = Cupones::withTrashed()->orderBy('idcupon', 'DESC')
                ->take(1)->get();
            $cuantos = count($consulta);
            if($cuantos==0)
            {
                $idesigue = 1;
            } else {
                $idesigue = $consulta[0]->idcupon + 1;
            }
            $pacientes = Pacientes::orderBy('nombre')->get();
            return view('Sistema/Cupones/altacupones')
                ->with('pacientes',$pacientes)
                ->with('idesigue', $idesigue);
      }
      else{
        return redirect('vistalogin')->with('status', 'Necesitas iniciar sesion');
      }
    }

    public function guardarcupon(Request $request)
    {
        $this->validate($request,[
            'idpaciente' => 'required',
            'tipocupon' => 'required',
            'descuento' => 'required',
            'fecha' => 'required|date',
            'fechaven' => 'required|date',
            'descripcion' =>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ñ,ü]+$/',

        ]);
        $cupones = new Cupones;
        $cupones ->idcupon = $request->idcupon;
        $cupones ->idpaciente = $request->idpaciente;
        $cupones ->tipocupon = $request->tipocupon;
        $cupones ->porcentaje = $request->descuento;
        $cupones ->fecha = $request->fecha;
        $cupones ->fechavencimiento = $request->fechaven;
        $cupones ->descripcion = $request->descripcion;
        $cupones ->save();
        return redirect()->route('reportecupon');
    }
    public function reportecupon()
    {
        $sessionidusuario = session('sessionidusuario');
        if($sessionidusuario<>"")
        {
            $consulta = Cupones::withTrashed()->join('pacientes', 'cupones.idpaciente','=','pacientes.idpaciente')
                        ->select('cupones.idcupon', 'pacientes.nombre as paciente','pacientes.apellidop','pacientes.apellidom',
                        'cupones.tipocupon','cupones.porcentaje','cupones.fecha','cupones.fechavencimiento','cupones.descripcion','cupones.deleted_at')
                        ->get();
                        return view('Sistema/Cupones/reportecupones')->with('consulta',$consulta);
        }
        else{
            return redirect('vistalogin')->with('status', 'Necesitas iniciar sesion');
        }
    }
    public function desactivarcupon($idcupon)
    {
        $cupones=Cupones::find($idcupon);
        $cupones->delete();
        return redirect()->route('reportecupon');
    }
    public function activarcupon($idcupon)
    {
        $cupones=Cupones::withTrashed()->where('idcupon',$idcupon)->restore();
        return redirect()->route('reportecupon');
    }
    public function eliminarcupon($idcupon)
    {
        $cupones=Cupones::withTrashed()->find($idcupon)->forceDelete();

            return redirect()->route('reportecupon');
    }
    public function modificarcupon($idcupon)
    {
        $sessionidusuario = session('sessionidusuario');
        if($sessionidusuario<>"")
        {
            $consulta = Cupones::withTrashed()->join('pacientes', 'cupones.idpaciente','=','pacientes.idpaciente')
            ->select('cupones.idcupon', 'pacientes.nombre as paciente','pacientes.apellidop','pacientes.apellidom',
            'cupones.tipocupon','cupones.idpaciente','cupones.porcentaje','cupones.fecha','cupones.fechavencimiento','cupones.descripcion','cupones.deleted_at')
            ->where('idcupon',$idcupon)
            ->get();
            $pacientes = Pacientes::all();
            return view('Sistema/Cupones/modificarcupon')
            ->with('consulta',$consulta[0])
            ->with('pacientes', $pacientes);
        }
        else{
            return redirect('vistalogin')->with('status', 'Necesitas iniciar sesion');
        }

    }
    public function cambiocupon(Request $request)
    {
     $this->validate($request,[
            'idpaciente' => 'required',
            'tipocupon' => 'required',
            'descuento' => 'required',
            'fecha' => 'required|date',
            'fechaven' => 'required|date',
            'descripcion' =>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ñ,ü]+$/',

        ]);
    
    $cupones = Cupones::withTrashed()->find($request->idcupon);
        $cupones ->idcupon = $request->idcupon;
        $cupones ->idpaciente = $request->idpaciente;
        $cupones ->tipocupon = $request->tipocupon;
        $cupones ->porcentaje = $request->descuento;
        $cupones ->fecha = $request->fecha;
        $cupones ->fechavencimiento = $request->fechaven;
        $cupones ->descripcion = $request->descripcion;
        $cupones ->save();
        return redirect()->route('reportecupon');
    }
    public function getPdfCupones(){
        set_time_limit(300);
        $pdfcupones = Cupones::withTrashed()->join('pacientes', 'cupones.idpaciente','=','pacientes.idpaciente')
                        ->select('cupones.idcupon', 'pacientes.nombre as paciente','pacientes.apellidop','pacientes.apellidom',
                        'cupones.tipocupon','cupones.porcentaje','cupones.fecha','cupones.fechavencimiento','cupones.descripcion','cupones.deleted_at')
                        ->get();
                        $pdf = PDF::loadView('Sistema/Cupones/pdfcupones', compact('pdfcupones'));
                        return $pdf->download('pdf_Cupones.pdf');
        
}
public function exportcupones(){
    return $this->excel->download(new CuponesExport, 'Cupones.xlsx');
  }
}
