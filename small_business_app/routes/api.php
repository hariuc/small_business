<?php


use App\Http\Controllers\FunctionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TypePriceController;
use App\Http\Controllers\UnitClassifierController;
use App\Http\Middleware\SetPhpOptionMiddleware;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Controllers\BankController;
use App\SmallBusinessApp\Modules\Catalogs\BanksAccounts\Controllers\BankAccountController;
use App\SmallBusinessApp\Modules\Catalogs\Category\Controllers\CategoryController;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Controllers\CurrencyController;
use App\SmallBusinessApp\Modules\Catalogs\Customers\Controllers\CustomerController;
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

    //catalogs
    Route::apiResources(["/banks" => BankController::class]);
    Route::apiResources(["/currencies" => CurrencyController::class]);
    Route::apiResources(["/unit-classifier" => UnitClassifierController::class]);
    Route::apiResources(["/customers" => CustomerController::class]);
    Route::apiResources(["/customers-contracts" => CustomerController::class]);
    Route::apiResources(["/banks-accounts" => BankAccountController::class]);
    Route::apiResources(["/functions" => FunctionController::class]);
    Route::apiResources(["/categories" => CategoryController::class]);
    Route::apiResources(["/items" => ItemController::class]);
    Route::apiResources(["/type-prices" => TypePriceController::class]);

    //documents

    //reports

});
