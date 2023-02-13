<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratsController;
use App\Http\Controllers\PaiementController;

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
    return view('welcome');
});

//Route::match(['get','post'],'paiement-add',  'App\Http\Controllers\PaiementController@AddPaiement');
Route::post('add','App\Http\Controllers\PaiementController@AddPaiement');





Route::get('/getContrats', 'App\Http\Controllers\ContratsController@getContrats');
Route::get('/getImprimantes', 'App\Http\Controllers\ImprimantesController@getImprimantes');
Route::get('/deleteContrats/{id}', 'App\Http\Controllers\ContratsController@deleteContrats');
Route::get('/paiement', 'App\Http\Controllers\PaiementController@index');




