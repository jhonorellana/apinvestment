<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Share;
Use Illuminate\Support\Facades\DB;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $issuer = $request->input('issuer'); // Obtén el mes desde la solicitud
        $year = $request->input('year'); // Obtén el mes desde la solicitud
        
        $issuer = urlencode($issuer);
        
        if ($issuer && $year) {
            $result = DB::select("CALL SP_SHARES_SUMMARY(?, ?)", [$issuer, $year]);
            return response()->json($result);
        }

        if ($issuer && !$year) {
            $result = DB::select("CALL SP_SHARES_SUMMARY(?, ?)", [$issuer, 0]);
            return response()->json($result);
        }
        if (!$issuer && !$year) {
            $result = DB::select("CALL SP_SHARES_SUMMARY(?, ?)", [0, 0]);
            return response()->json($result);
       }
        
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
