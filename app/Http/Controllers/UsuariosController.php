<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Municipios;
use Illuminate\Support\Facades\Hash;
use Session;

class UsuariosController extends Controller
{
    public function alta_usuarios(){
        $consulta = Usuarios::orderBy('idusuario','DESC')
            ->take(1)->get();

        $cuantos = count($consulta);
        if ($cuantos==0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->idusuario + 1;
        }

        $municipios = Municipios::orderBy('nombre')->get();

        // return $idesigue;
        return view('Login/registro')
            ->with('idesigue',$idesigue)
            ->with('municipios',$municipios);

    }
    public function guarda_usuarios(Request $request){

      $this->validate($request,[
            'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
            'apellidop'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü,ñ]+$/',
            'apellidom'=> 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú,ü,ñ]+$/',
            'email'=> 'required|email',
            'password'=>'required',
            'idmun'=>'required'
        ]);
        $passwordEncriptado = Hash::make($request->password);

        $usuarios = new Usuarios;
        $usuarios->idusuario = $request->idusuario;
        $usuarios->nombre = $request->nombre;
        $usuarios->apellidop = $request->apellidop;
        $usuarios->apellidom = $request->apellidom;
        $usuarios->email = $request->email;
        $usuarios->password= Hash::make($request->password);
        $usuarios->idmun = $request->idmun;
        $usuarios->tipou = ('usuario');

        $usuarios->save();

        Session::flash('mensaje','Usuario creado');

        return view('Login/vistalogin');

    }
}
