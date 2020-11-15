<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PDOexception\ConnectController;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\Alumno;
class LoginController extends Controller

{
    public function index(){
        return view::make('index');
    
       
    
    }

    public function create(){
        return view('paginainicial');
    }

    public function crearalumno(Request $request){
        
        $alumnoNuevo = new Alumno;
        $alumnoNuevo->num_lista = $request->numlista;
        $alumnoNuevo->nombres = $request->nombres;
        $alumnoNuevo->apellidos = $request->apellidos;
        $alumnoNuevo->genero = $request->genero;

        $alumnoNuevo->save();
        
        return back()->with('mensaje', 'Alumno agregado');
    
    }
    public function alumno(){
         return view('alumnos');
    }
    
    public function showalumnos(){
        //
        $alumnos = Alumno::all();

        return view('listadoalumnos', compact('alumnos'));
   }

    public function logout(){
        Auth::logout();
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }


    public function authenticate(Request $request){
        
        $credentials = $request->only('username', 'password');
        
            if (Auth::attempt($credentials))
            
            {
                return view('paginainicial');
            }
            else
            {
                return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
                
            }
        }




        //**************************************************** */
    }
