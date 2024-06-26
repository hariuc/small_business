<?php


use App\Application\Modules\Banks\Controllers\BankController;
use App\Application\Modules\Currencies\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UnitClassifierController;
use App\Http\Middleware\SetPhpOptionMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware([SetPhpOptionMiddleware::class,])->prefix("v1")->group(function () {

    //ref
    Route::apiResources(["/banks" => BankController::class]);
    Route::apiResources(["/currencies" => CurrencyController::class]);
    Route::apiResources(["/unit-classifier" => UnitClassifierController::class]);
    Route::apiResources(["/customers" => CustomerController::class]);
    Route::apiResources(["/customers-contracts" => CustomerController::class]);

    //docs

    //reports

});
