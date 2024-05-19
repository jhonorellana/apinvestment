<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class MonAmortizationOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $month = $request->input('month'); // Obtén el mes desde la solicitud
        $year = $request->input('year'); // Obtén el mes desde la solicitud
        
        // Verifica si se proporcionó un mes y filtra la consulta en consecuencia
        if ($month && $year) {
            $result = DB::select("CALL SP_AMORTIZATION_BY_MONTH_OWNER(?, ?)", [$year, $month]);
            return response()->json($result);
        }
        else
            if ($year)
            {
                $result = DB::select("CALL SP_AMORTIZATION_BY_MONTH_OWNER(?, ?)", [$year, 0]);
                return response()->json($result);
            }
        else
        {
            $result = DB::select("CALL SP_AMORTIZATION_BY_MONTH_OWNER(0, 0)");
            return response()->json($result);
        }
        //print_r($result);@
        
        
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
