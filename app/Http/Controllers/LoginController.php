<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        if ($email == 'jhon.orellana@gmail.com' && $password == '12345678') {
            $result = [
                'data' => [
                    'name' => 'Jhon',
                    'email' => $email,
                    'password' => $password,
                    'avatar' => 'https://prueba.prueba.png',
                ],
                'tokenSession' => 'esteesmitokenjajajeje',
            ];
            
            return response()->json($result);
        } else {
            return response()->json(['error' => 'Error con las credenciales'], 409);
        }
    }

    /**@
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
