<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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


//Formularios, envio recepcion

Route::resource('producto', ProductoController::class);
//Agregar el use para el controlador     
//esta ruta genera las necesarias para usarlas en el CRUD
    //Revisar ruta específica con php artisan route:list |grep productos (se muestra la terminacion de la ruta)

    //jetstream
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

