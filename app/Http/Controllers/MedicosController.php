<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\medicos;
use App\Models\municipios;
use App\Models\Especialidades;
use App\Models\consultas;
use Session;
use Maatwebsite\Excel\Excel;
use App\Exports\MedicosExport;
use PDF;

class MedicosController extends Controller
{
  private $excel;
  public function __construct(Excel $excel){
    $this->excel = $excel;
  }


    public function alta_medicos(){
      $sessionidusuario = session('sessionidusuario');
      if($sessionidusuario<>"")
      {
            $consulta = medicos::orderBy('idmedico','DESC')
                ->take(1)->get();

            $cuantos = count($consulta);
            if ($cuantos==0) {
                $idesigue = 1;
            } else {
                $idesigue = $consulta[0]->idmedico + 1;
            }

            $municipios = municipios::orderBy('nombre')->get();
            $especialidades = especialidades::orderBy('especialidad')->get();

            return view('Sistema/Medicos/altamedicos')
                ->with('idesigue',$idesigue)
                ->with('municipios',$municipios)
                ->with('especialidades',$especialidades);
          }
          else{
            return redirect('vistalogin')->with('status', 'Necesitas iniciar sesion');
          }
    }

    public function guardar_medicos(Request $request){

        $this->validate($request,[
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'appaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'apmaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'edad'=> 'required|regex:/^[0-9]{2}$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'password'=> 'required|alpha_num',
            'calle'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numint'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numext'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'colonia'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü,]+$/',
            'hora_entrada'=> 'required',
            'hora_salida'=> 'required',
            'img'=>'image|mimes:gif,jpeg,png'
        ]);

            $file = $request->file('img');
              if($file<>""){
                $img = $file->getClientOriginalName();
                $img2 = $request->idodo . $img;
                \Storage::disk('local')->put($img2, \File::get($file));
              }
              else{
                $img2 = "sinfoto.jpg";
              }

        $medicos = new medicos;
        $medicos->idmedico = $request->idmedico;
        $medicos->nombre = $request->nombre;
        $medicos->appaterno = $request->appaterno;
        $medicos->apmaterno = $request->apmaterno;
        $medicos->sexo = $request->sexo;
        $medicos->edad = $request->edad;
        $medicos->telefono = $request->telefono;
        $medicos->correo = $request->correo;
        $medicos->password = $request->password;
        $medicos->calle = $request->calle;
        $medicos->numint = $request->numint;
        $medicos->numext = $request->numext;
        $medicos->idmun = $request->idmun;
        $medicos->colonia = $request->colonia;
        $medicos->idesp = $request->idesp;
        $medicos->hora_entrada = $request->hora_entrada;
        $medicos->hora_salida = $request->hora_salida;
        $medicos->img = $img2;
        $medicos->save();

        // return $request;
        Session::flash('mensaje',"El medico $request->nombre $request->appaterno ha sido creado");
            return redirect()->route('consulta_medicos');
    }

    public function reportes_medicos(){
      $sessionidusuario = session('sessionidusuario');
      if($sessionidusuario<>"")
      {
            $consulta = medicos::withTrashed()->join('municipios','medicos.idmun','=','municipios.idmun')
            ->join('especialidades','medicos.idesp','=','especialidades.idesp')
            ->select('medicos.idmedico','medicos.nombre','medicos.appaterno','medicos.apmaterno',
            'medicos.sexo','medicos.edad','medicos.telefono','medicos.correo',
            'medicos.password','medicos.calle','medicos.numint','medicos.numext','medicos.colonia',
            'medicos.hora_entrada','medicos.hora_salida',
            'municipios.nombre as municipio','especialidades.especialidad as esp', 'medicos.deleted_at','medicos.img')
            ->orderBy('medicos.appaterno','desc')
            ->get();

            // return $consulta;
            return view('Sistema/Medicos/reportemedicos')
                -> with('consulta',$consulta)
                ->with('crit',$crit);
      }
      else{
        return redirect('vistalogin')->with('status', 'Necesitas iniciar sesion');
      }
    }

    public function consulta_medicos(Request $req){
      $sessionidusuario = session('sessionidusuario');
      if($sessionidusuario<>"")
      {
        $crit = $req['criterio'];
        $res = DB::SELECT("SELECT medicos.idmedico, medicos.nombre, medicos.appaterno, medicos.apmaterno, especialidades.especialidad, medicos.sexo, medicos.img, medicos.telefono,
        medicos.correo,medicos.hora_entrada,medicos.hora_salida, medicos.deleted_at FROM medicos, especialidades WHERE medicos.idesp = especialidades.idesp AND (nombre LIKE '%$crit%' OR appaterno LIKE '%$crit%' OR apmaterno LIKE '%$crit%')
        ORDER BY appaterno
        ");
        // return $res;
        return view ("Sistema/Medicos/reportemedicos",['res'=>$res, 'crit'=>$crit]);
      }else{
        return redirect('vistalogin')->with('status', 'Necesitas iniciar sesion');
      }
    }


    public function desactivar_medicos($idmedico){
        $medicos=medicos::find($idmedico);
        $medicos->delete();
        Session::flash('mensajedesactiva',"El medico ha sido desactivado");
        return redirect()->route('consulta_medicos');
    }

    public function activar_medicos($idmedico){
        $medicos=medicos::withTrashed()->where('idmedico',$idmedico)->restore();
        Session::flash('mensaje',"El medico ha sido activado");
        return redirect()->route('consulta_medicos');
    }

    public function eliminar_medicos($idmedico){
        $buscaconsultas = consultas::where('idmedico',$idmedico)->get();
        $cuantos = count($buscaconsultas);
        if($cuantos==0)
        {
            $medicos=medicos::withTrashed()->find($idmedico)->forceDelete();
            Session::flash('mensajeerror',"El medico ha sido eliminado correctamente");
            return redirect()->route('consulta_medicos');
        }
        else{
          Session::flash('mensajeerror',"El medico no se puede eliminar por que tiene
                                        registros en otras tablas");
            return redirect()->route('consulta_medicos');

        }
    }


    public function modifica_medicos($idmedico){
      $sessionidusuario = session('sessionidusuario');
      if($sessionidusuario<>"")
      {

        $consulta = medicos::withTrashed()->join('municipios','medicos.idmun','=','municipios.idmun')
                                              ->join('especialidades','medicos.idesp','=','especialidades.idesp')
                    ->select('medicos.idmedico','medicos.nombre','medicos.appaterno','medicos.apmaterno',
                             'medicos.sexo','medicos.edad','medicos.telefono','medicos.correo',
                             'medicos.password','medicos.calle','medicos.numint','medicos.numext','municipios.nombre as m',
                             'medicos.colonia','especialidades.especialidad as especi','medicos.hora_entrada','medicos.hora_salida',
                             'medicos.idmun','medicos.idesp','medicos.img')
                    ->where('idmedico',$idmedico)
                    ->get();

                    $municipios = municipios::all();
                    $especialidades = especialidades::all();


        // $consulta = medicamentos::withTrashed()->join('tipo_medicamentos','medicamentos.idtipomed','=','tipo_medicamentos.idtipomed')
        // ->select('medicamentos.idmed','medicamentos.nombre','tipo_medicamentos.tipo as tm','medicamentos.presentacion',
        //         'medicamentos.susta_activa','medicamentos.idtipomed')
        // ->where('idmed',$idmed)
        // ->get();

        //  $tipo_medicamentos = tipo_medicamentos::all();
         return view('Sistema/Medicos/modificarmedicos')
        ->with('consulta',$consulta[0])
        ->with('municipios',$municipios)
        ->with('especialidades',$especialidades);
      }
      else{
        return redirect('vistalogin')->with('status', 'Necesitas iniciar sesion');
      }
    }

    public function cambio_medicos(Request $request){
        $this->validate($request,[
            'nombre'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'appaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'apmaterno'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'edad'=> 'required|regex:/^[0-9]{2}$/',
            'telefono'=> 'required|regex:/^[0-9]{10}$/',
            'correo'=> 'required|email',
            'password'=> 'required|alpha_num',
            'calle'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numint'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'numext'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü]+$/',
            'colonia'=> 'required|regex:/^[A-Z]*[A-Z,a-z,0-9, ,á,é,í,ó,ú,ü,]+$/',
            'hora_entrada'=> 'required',
            'hora_salida'=> 'required',
            'img'=>'image|mimes:gif,jpeg,png'
        ]);

        $file = $request->file('img');
        if($file<>""){
        $img = $file->getClientOriginalName();
        $img2 = $request->ide . $img;
        \Storage::disk('local')->put($img2, \File::get($file));
        }

        $medicos = medicos::withTrashed()->find($request->idmedico);
        $medicos->idmedico = $request->idmedico;
        $medicos->nombre = $request->nombre;
        $medicos->appaterno = $request->appaterno;
        $medicos->apmaterno = $request->apmaterno;
        $medicos->sexo = $request->sexo;
        $medicos->edad = $request->edad;
        $medicos->telefono = $request->telefono;
        $medicos->correo = $request->correo;
        $medicos->password = $request->password;
        $medicos->calle = $request->calle;
        $medicos->numint = $request->numint;
        $medicos->numext = $request->numext;
        $medicos->idmun = $request->idmun;
        $medicos->colonia = $request->colonia;
        $medicos->idesp = $request->idesp;
        $medicos->hora_entrada = $request->hora_entrada;
        $medicos->hora_salida = $request->hora_salida;
        if($file<>""){
        $medicos->img = $img2;
        }
        $medicos->save();


        // dd($request);

        Session::flash('mensaje',"El odontologo $request->nombre $request->appaterno ha sido modificado");

        return redirect()->route('consulta_medicos');
      }

    public function descarga_imagen($img){
      $pathtoFile = public_path().'//archivos/'. $img;
      return response()->download($pathtoFile);
    }

    public function exportmedicos(){
      return $this->excel->download(new MedicosExport, 'medicos.xlsx');
    }

    public function getPdfMedicos(){
      set_time_limit(300);
    $pdfmedicos = medicos::withTrashed()
    ->join('especialidades','medicos.idesp','=','especialidades.idesp')
    ->select('medicos.idmedico','medicos.telefono','medicos.correo',
    'medicos.hora_entrada','medicos.hora_salida','especialidades.especialidad as esp',
    'medicos.nombre','medicos.appaterno','medicos.apmaterno','medicos.idesp','medicos.img')
    ->get();

    $pdf = PDF::loadView('Sistema/Medicos/pdfm', compact('pdfmedicos'));
    return $pdf->download('pdf_Medicos.pdf');
  }
}
