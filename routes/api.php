<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VariationController;
use App\Http\Controllers\AmortizationController;
use App\Http\Controllers\MonAmortizationController;
use App\Http\Controllers\MonAmortizationOwnerController;
use App\Http\Controllers\InvestOwnerController;
use App\Http\Controllers\InvestOwnernewController;
use App\Http\Controllers\TotalInvestOwnerController;
use App\Http\Controllers\InvestEnterpriseController;
use App\Http\Controllers\InvestVSbondController;
use App\Http\Controllers\AmortizationdatesController;
use App\Http\Controllers\AmortizationdatessummaryController;
use App\Http\Controllers\BalanceController;

use App\Http\Controllers\ShareController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CapitalByTypeOwnerController;
use App\Http\Controllers\TradingController;
use App\Http\Controllers\BonosController;
use App\Http\Controllers\OtherInvestmentDetailController;
use App\Http\Controllers\InvertidoRendimientoController;
use App\Http\Controllers\InvertidoVencimientoController;
use App\Http\Controllers\OthervalueController;
use App\Http\Controllers\InversionController;
use App\Http\Controllers\ShareslastdateController;
use App\Http\Controllers\BondshisController;
use App\Http\Controllers\ShareshisController;
use App\Http\Controllers\ObligacioneshisController;
use App\Http\Controllers\PapeleshisController;
use App\Http\Controllers\FacturashisController;
use App\Http\Controllers\GenericoshisController;
use App\Http\Controllers\BonoshisresumenController;
use App\Http\Controllers\DividendosController;
use App\Http\Controllers\SimulacionController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('variation', VariationController::class);
Route::apiResource('amortization', AmortizationController::class);
Route::apiResource('monamortization', MonAmortizationController::class);  // SP_AMORTIZATION_DETAIL_BY_MONTH
Route::apiResource('monamortizationowner', MonAmortizationOwnerController::class);
Route::apiResource('investowner', InvestOwnerController::class);
Route::apiResource('investownernew', InvestOwnernewController::class);
Route::apiResource('totalinvestowner', TotalInvestOwnerController::class);
Route::apiResource('investenterprise', InvestEnterpriseController::class);
Route::apiResource('investvsbond', InvestVSbondController::class);
Route::apiResource('amortizationdates', AmortizationdatesController::class);
Route::apiResource('amortizationdatessumary', AmortizationdatessummaryController::class);
Route::apiResource('capitalbytypeinvestOwner', CapitalByTypeOwnerController::class);
Route::apiResource('otherinvestmentdetail', OtherInvestmentDetailController::class);
Route::apiResource('invertidorendimiento', InvertidoRendimientoController::class);
Route::apiResource('invertidovencimiento', InvertidoVencimientoController::class);
Route::apiResource('othervalue', OthervalueController::class);
Route::apiResource('inversion', InversionController::class);


Route::apiResource('balance', BalanceController::class);
Route::apiResource('trading', TradingController::class);
Route::apiResource('bonos', BonosController::class);
Route::apiResource('shareslastdate', ShareslastdateController::class);
Route::apiResource('historicobonos', BondshisController::class);
Route::apiResource('historicoacciones', ShareshisController::class);
Route::apiResource('historicoobligaciones', ObligacioneshisController::class);
Route::apiResource('historicopapeles', PapeleshisController::class);
Route::apiResource('historicofacturas', FacturashisController::class);
Route::apiResource('historicogenericos', GenericoshisController::class);

Route::apiResource('bonoshisresumen', BonoshisresumenController::class);
Route::apiResource('dividendos', DividendosController::class);
Route::apiResource('simulacion', SimulacionController::class);

Route::apiResource('shares', ShareController::class);
Route::apiResource('login', LoginController::class);




//Route::post('/amortization/{$issuer}', [AmortizationController::class,'show']);
//Route::post('/amortization', 'AmortizationController@index');
//    Route::apiResource('variation', VariationController);

