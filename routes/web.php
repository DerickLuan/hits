<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\InterpretesController;

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
    return view('home');
});

//Route::get('/artistas', [ArtistaController::class, 'show']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::get('/formCadArtista', [ArtistaController::class, 'formCadArtista']);
//Route::get('/excluirArtista/{artista_id}', [ArtistaController::class, 'excluirArtista']);

Route::resource('/artista', ArtistaController::class);
Route::resource('musica', MusicaController::class);
Route::resource('interprete', InterpretesController::class);