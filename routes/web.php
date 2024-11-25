<?php

use App\Http\Controllers\ApiPayPalController;
use App\Http\Controllers\IpDataController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsersLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/logeado/index', [IpDataController::class, 'getUserInfo']);
    Route::get('/logeado/index', [ProductoController::class, 'index'])->name('index');
    Route::resource('logeado', ProductoController::class)->except(['show']);
    Route::get('/prueba/producto', [ProductoController::class, 'productosCarrito']);
    Route::post('/carrito/agregar', [ProductoController::class, 'agregarCarrito']);
    Route::post('/carrito/quitar', [ProductoController::class, 'quitarCarrito']);
    Route::post('/carrito/incrementar', [ProductoController::class, 'incrementarCarrito']);
    Route::post('/carrito/decrementar', [ProductoController::class, 'decrementarCarrito']);
    //Api de Paypal
    Route::post('pay', [ApiPayPalController::class, 'pay'])->name('payment');
    Route::get('success', [ApiPayPalController::class, 'success']);
    Route::get('error', [ApiPayPalController::class, 'error']);


    Route::view('/logeado/overview', '/logeado/overview');
    Route::view('/logeado/nosotros', '/logeado/nosotros');
});

//Login y Register páginas
Route::get('/inicio/login', [UsersLoginController::class, 'index']);
Route::post('/inicio/login', [UsersLoginController::class, 'login'])->name('login');
Route::post('logout', [UsersLoginController::class, 'logout'])->name('logout');
Route::get('/inicio/register', function () {
    return view('/inicio/register');
})->name('register.form');
Route::post('/inicio/register', [UsersLoginController::class, 'registrar'])->name('register');

//Plantillas
Route::view('/plantillas/navbar', '/plantillas/navbar');
Route::view('/plantillas/footer', '/plantillas/footer');
