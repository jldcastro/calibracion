<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;
use App\Http\Requests\LoginRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if(Auth::attempt(['rut_usuario' => $request['rut_usuario'], 'password' => $request['password']])){
            if(Auth::user()->tipo_usuario=='administrador'){
                if(Auth::user()->estado=='Activo'){
                    return Redirect::to('administrador');
                }
                else{
                    return Redirect::to('/login')->with('mensaje2','Usted esta suspendido del sistema');
                }
            }

            else if(Auth::user()->tipo_usuario=='empleado'){
                    if(Auth::user()->estado=='Activo'){
                        return Redirect::to('empleado');
                    }
                    else{
                        return Redirect::to('/login')->with('mensaje2','Usted esta suspendido del sistema');
                    }
            }

            else if(Auth::user()->tipo_usuario=='administrativo'){
                if(Auth::user()->estado=='Activo'){
                    return Redirect::to('administrativo');
                }
                else{
                    return Redirect::to('/login')->with('mensaje2','Usted esta suspendido del sistema');
                }
            }

            else if(Auth::user()->tipo_usuario=='secretaria'){
                if(Auth::user()->estado=='Activo'){
                    return Redirect::to('secretaria');
                }
                else{
                    return Redirect::to('/login')->with('mensaje2','Usted esta suspendido del sistema');
                }
            }
        }
        return Redirect::to('/login')->with('mensaje2','Rut y/o contraseña inválidos');

    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
