<?php

namespace App\Http\Controllers;

use App\Models\Amortization;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class AmortizationController extends Controller
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
            $result = DB::select("CALL SP_AMORTIZATION_SUMMARY_BY_MONTH(?, ?, ?)", [1, $year, $month]);
            return response()->json($result);
        } 
        else 
           if ($year)
              {
                  $result = DB::select("CALL SP_AMORTIZATION_SUMMARY_BY_MONTH(?, ?, ?)", [1, $year, 0]);
                  return response()->json($result);
               }
           else
             {
               $result = DB::select("CALL SP_AMORTIZATION_SUMMARY(1)");
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
    public function show($id){
        
    }
    
/*    public function show($issuer)
    {
        return response()->json(DB::select("CALL SP_AMORTIZATION_SUMMARY_BY_MONTH(?, ?, ?)", [1, 2023, $issuer]));
    }
*/
    
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
