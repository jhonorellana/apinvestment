<?php

namespace App\Http\Controllers;

use App\Models\Othervalue;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class OthervalueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(DB::select("CALL SP_OTHERVALUE()"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $rules = [
            'Descripcion' => 'required',
            'Valor' => 'required|numeric',
            'Activo' => 'required|numeric',
        ];
        
        $validator = validator($request->all(),$rules);
        $msj ="Exito";
        
        if($validator->fails()){
            $msj = $validator->errors();
            return response()->json(["Respuesta" => $msj]);
        }
        else
        {
            $Othervalue = new Othervalue();
            $Othervalue->ov_description = $request->Descripcion;
            $Othervalue->ov_value = $request->Valor;
            $Othervalue->is_active = $request->Activo;
            $Othervalue->save();
            return response()->json(["Respuesta" => "Grabado"]);
        }
        
        
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, int $id)
    {
        
        
        //return response()->json(["Respuesta" => $request->Descripcion;]);
        
        $Othervalue = Othervalue::find($id);
        
        $rules = [
            'Descripcion' => 'required',
            'Valor' => 'required|numeric',
            'Activo' => 'required|numeric',
            
        ];
        
        $validator = validator($request->all(),$rules);
        $msj ="Exito";
        
        if($validator->fails()){
            $msj = $validator->errors();
            return response()->json(["Respuesta" => $msj]);
        }
        else
        {
            $Othervalue->ov_description = $request->Descripcion;
            $Othervalue->ov_value = $request->Valor;
            $Othervalue->is_active = $request->Activo;
            $Othervalue->save();
            return response()->json(["Respuesta" => "Actualizado"]);
        }
        
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Othervalue = Othervalue::find($id);
        $Othervalue->delete();
        return response()->json(["Respuesta" => "Eliminado"]);
    }
}
