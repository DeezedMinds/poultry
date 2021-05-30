<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/aves', function () {
    return view('pages.aves');
});
Route::get('/cerdos', function () {
    return view('pages.cerdos');
});
Route::get('/tienda', function () {  //maqueta
    return view('pages.tienda');
});
Route::get('/nosotros', function () {
    return view('pages.nosotros');
});
Route::get('/obras', function () {
    return view('pages.obras');
});
Route::get('/servicios', function () {
    return view('pages.servicios');
});
Route::get('/representaciones', function () {
    return view('pages.representaciones');
});





Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('product.list');
});

require __DIR__ . '/auth.php';
