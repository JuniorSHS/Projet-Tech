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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Partie de redirection des pages

    Route::get('/utilisateurs', 'App\Http\Controllers\Admin\DashboardController@user');
    Route::get('/ordinateur', 'App\Http\Controllers\Admin\OrdiController@ordinateur');
    Route::get('/attribution', 'App\Http\Controllers\Admin\DashboardController@attribution');


    // Partie d'ajout utilisateur

    Route::post('/add_utilisateurs','App\Http\Controllers\Admin\DashboardController@add');

    // Partie de modiification et de suppression
    // utilisateur  

    Route::get('/utilisateurs_edit/{id}', 'App\Http\Controllers\Admin\DashboardController@useredit');
    Route::put('/utilisateurs_edit_update/{id}', 'App\Http\Controllers\Admin\DashboardController@usereupdate');
    Route::delete('/utilisateurs_supp/{id}', 'App\Http\Controllers\Admin\DashboardController@useredelete');
    
    // Partie de modiification et de suppression
    // ordinateur   

    Route::get('/ordinateur_edit/{id}', 'App\Http\Controllers\Admin\OrdiController@ordiedit');
    Route::put('/ordinateur_edit_update/{id}', 'App\Http\Controllers\Admin\OrdiController@ordiupdate');
    Route::delete('/ordinateur_supp/{id}', 'App\Http\Controllers\Admin\OrdiController@ordidelete');

    // Partie d'ajout ordinateur

    Route::post('/add_ordinateur','App\Http\Controllers\Admin\OrdiController@addordi');
    
});

