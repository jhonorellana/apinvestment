<?php

namespace App\Http\Controllers;

use App\Models\Variation;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return response()->json(Variation::All());
        return response()->json(DB::select("CALL SP_VARIATION()"));
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
        Variation::create($request->all());
        return response()->json(["Respuesta" => "Grabado"]);
        //return response()->json(["Respuesta" => $request->input('var_date')]);
        */
        
        
        $rules = [
            'Fecha' => 'required',
            'Jaime' => 'required|numeric',
            'Argentina' => 'required|numeric',
            'Cristian' => 'required|numeric',
            'SaldoTotal' => 'required|numeric',
            'SaldoPropio' => 'required|numeric',
            'Importacion' => 'required|numeric',
            'TotalPropio' => 'required|numeric',
            
        ];
        
        $validator = validator($request->all(),$rules);
        $msj ="Exito";
        
        if($validator->fails()){
            $msj = $validator->errors();
            //return view('variation.create',['Message'=>$msj]);
            return response()->json(["Respuesta" => $msj]);
        }
        else
        {
            $variation = new Variation();
            $variation->var_date = $request->Fecha;
            $variation->var_jaime = $request->Jaime;
            $variation->var_argentina = $request->Argentina;
            $variation->var_cristian = $request->Cristian;
            $variation->var_totalbalance = $request->SaldoTotal;
            $variation->var_ownbalance = $request->SaldoPropio;
            $variation->var_importation = $request->Importacion;
            $variation->var_own = $request->TotalPropio;
            $variation->save();
            //$msj ="Grabado con éxito";
            return response()->json(["Respuesta" => "Grabado"]);
            //return response()->json(["Respuesta" => $request->Jaime]);
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
        $variation = Variation::find($id);
        
        $rules = [
            'Fecha' => 'required',
            'Jaime' => 'required|numeric',
            'Argentina' => 'required|numeric',
            'Cristian' => 'required|numeric',
            'SaldoTotal' => 'required|numeric',
            'SaldoPropio' => 'required|numeric',
            'Importacion' => 'required|numeric',
            'TotalPropio' => 'required|numeric',
            
        ];
        
        $validator = validator($request->all(),$rules);
        $msj ="Exito";
        
        if($validator->fails()){
            $msj = $validator->errors();
            //return view('variation.create',['Message'=>$msj]);
            return response()->json(["Respuesta" => $msj]);
        }
        else
        {
            $variation->var_date = $request->Fecha;
            $variation->var_jaime = $request->Jaime;
            $variation->var_argentina = $request->Argentina;
            $variation->var_cristian = $request->Cristian;
            $variation->var_totalbalance = $request->SaldoTotal;
            $variation->var_ownbalance = $request->SaldoPropio;
            $variation->var_importation = $request->Importacion;
            $variation->var_own = $request->TotalPropio;
            $variation->save();
            //$msj ="Grabado con éxito";
            return response()->json(["Respuesta" => "Actualizado"]);
            //return response()->json(["Respuesta" => $request->Jaime]);
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
        $variation = Variation::find($id);
        $variation->delete();
        return response()->json(["Respuesta" => "Eliminado"]);
    }
}
