<?php

namespace App\Http\Controllers;

use App\Models\Inversion;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class InversionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(DB::select("CALL SP_INVERSION()"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         Inversion::create($request->all());
         return response()->json(["Respuesta" => "Grabado"]);
         //return response()->json(["Respuesta" => $request->input('inv_type')]);
         */
        
        
        $rules = [
            'Tipo' => 'required',
            'FechaCompra' => 'required|date',
            'FechaVencimiento' => 'required|date',
            'Propietario' => 'required|string',
            'Empresa' => 'required|string',
            'TasaInteres' => 'required|numeric',
            'Rendimiento' => 'required|numeric',
            'Capital' => 'required|numeric',
            'Retencion' => 'required|numeric',
            'Pagado' => 'required|numeric',
            'Expirado' => 'required|numeric',
            'Activo' => 'required|numeric',
        ];
        
        $validator = validator($request->all(),$rules);
        $msj ="Exito";
        
        if($validator->fails()){
            $msj = $validator->errors();
            //return view('Inversion.create',['Message'=>$msj]);
            return response()->json(["Respuesta" => $msj]);
        }
        else
        {
            $Inversion = new Inversion();
            $Inversion->inv_type = $request->Tipo;
            $Inversion->inv_purchase_date = $request->FechaCompra;
            $Inversion->inv_expiration_date = $request->FechaVencimiento;
            $Inversion->inv_owner = $request->Propietario;
            $Inversion->inv_enterprise = $request->Empresa;
            $Inversion->inv_rate = $request->TasaInteres;
            $Inversion->inv_return = $request->Rendimiento;
            $Inversion->inv_principal = $request->Capital;
            $Inversion->inv_retention = $request->Retencion;
            $Inversion->inv_paid = $request->Pagado;
            $Inversion->inv_expired = $request->Expirado;
            $Inversion->is_active = $request->Activo;
            $Inversion->save();
            //$msj ="Grabado con éxito";
            return response()->json(["Respuesta" => "Grabado"]);
            //return response()->json(["Respuesta" => $request->FechaCompra]);
            //return response()->json(["Respuesta" => $this->index()]);
            //return $this->index();
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
        $Inversion = Inversion::find($id);
        
        $rules = [
            'Tipo' => 'required',
            'FechaCompra' => 'required|date',
            'FechaVencimiento' => 'required|date',
            'Propietario' => 'required|string',
            'Empresa' => 'required|string',
            'TasaInteres' => 'required|numeric',
            'Rendimiento' => 'required|numeric',
            'Capital' => 'required|numeric',
            'Retencion' => 'required|numeric',
            'Pagado' => 'required|numeric',
            'Expirado' => 'required|numeric',
            'Activo' => 'required|numeric',
        ];
        
        $validator = validator($request->all(),$rules);
        $msj ="Exito";
        
        if($validator->fails()){
            $msj = $validator->errors();
            //return view('Inversion.create',['Message'=>$msj]);
            return response()->json(["Respuesta" => $msj]);
        }
        else
        {
            $Inversion->inv_type = $request->Tipo;
            $Inversion->inv_purchase_date = $request->FechaCompra;
            $Inversion->inv_expiration_date = $request->FechaVencimiento;
            $Inversion->inv_owner = $request->Propietario;
            $Inversion->inv_enterprise = $request->Empresa;
            $Inversion->inv_rate = $request->TasaInteres;
            $Inversion->inv_return = $request->Rendimiento;
            $Inversion->inv_principal = $request->Capital;
            $Inversion->inv_retention = $request->Retencion;
            $Inversion->inv_paid = $request->Pagado;
            $Inversion->inv_expired = $request->Expirado;
            $Inversion->is_active = $request->Activo;
            $Inversion->save();
            //$msj ="Grabado con éxito";
            return response()->json(["Respuesta" => "Actualizado"]);
            //return response()->json(["Respuesta" => $request->FechaCompra]);
            //return response()->json(["Respuesta" => $this->index()]);
            //return $this->index();
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
        $Inversion = Inversion::find($id);
        $Inversion->delete();
        return response()->json(["Respuesta" => "Eliminado"]);
    }
}
