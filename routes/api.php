<?php


use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
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

Route::get('/merchandises', [MerchandiseController::class, 'index']);
Route::get('/suppliers', [SupplierController::class, 'index']);
Route::get('/merchandise/{merchandise}', [MerchandiseController::class, 'view']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customer/{customer}', [CustomerController::class, 'view']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
