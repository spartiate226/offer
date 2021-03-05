<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontoffice.index');
});
Route::get('offres', function () {
    return view('frontoffice.offresListe');
});
Route::post('Offre/search', 'offreController@search');
Route::any('admin/{page}','AdminController')->middleware('AuthMiddleware');
Route::get('connexion','AuthController@loginForm');
Route::post('connexion','AuthController@login');
Route::get('deconnexion','AuthController@logout');
Route::resource('User', 'UserController');
Route::resource('Offre', 'offreController');
