<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreebetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('form');
});

Route::get('/ip', function () {
    $checkLocation = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    return $checkLocation->ip;
});

Route::post('/freebet',  [FreebetController::class, 'store']);
Route::delete('/delete/{id}',  [FreebetController::class, 'delete']);
Route::get('/data',  [FreebetController::class, 'addData']);
Route::get('/edit/{id}',  [FreebetController::class, 'edit']);
Route::post('/update/{id}',  [FreebetController::class, 'update']);
Route::get('/export',  [FreebetController::class, 'export']);
