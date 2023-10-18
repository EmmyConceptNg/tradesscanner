<?php

use App\Http\Controllers\ThriveCartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/list-products', [ThriveCartController::class, 'ListProducts']);
Route::get('/get-product/{id}', [ThriveCartController::class, 'getProduct']);
Route::get('/get-product-price/{id}', [ThriveCartController::class, 'getProductPrice']);



// subscription
Route::post('/resume-subscription', [ThriveCartController::class, 'resumeSubscription']);
Route::post('/pause-subscription', [ThriveCartController::class, 'pauseSubscription']);
Route::post('/cancel-subscription', [ThriveCartController::class, 'cancelSubscription']);


// Upsell
Route::get('/list-upsells', [ThriveCartController::class, 'listUpSells']);
Route::get('/get-upsell/{id}', [ThriveCartController::class, 'getUpSell']);
Route::get('/get-upsell-details/{id}', [ThriveCartController::class, 'getUpSellDetails']);


// Downsell
Route::get('/list-downsells', [ThriveCartController::class, 'listDownSells']);
Route::get('/get-downsell/{id}', [ThriveCartController::class, 'getDownSell']);
Route::get('/get-downsell-details/{id}', [ThriveCartController::class, 'getDownSellDetails']);
