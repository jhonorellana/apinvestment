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
    public function index()
    {
        //return response()->json(Amortization::All());
        /*  return response()->json(DB::select("SELECT YEAR(am_expiration_date) AS year, MONTH(am_expiration_date) as month,
    SUM(am_interest) AS SUM_INTEREST,
    SUM(am_principal) AS SUM_PRINCIPAL,
    SUM(am_interest) + SUM(am_principal) AS TOTAL
FROM amortization
WHERE am_expiration_date
GROUP BY YEAR(am_expiration_date), MONTH(am_expiration_date)
ORDER BY am_expiration_date"));*/
        return response()->json(DB::select("CALL SP_AMORTIZATION_SUMMARY(1)"));
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
