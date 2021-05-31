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

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('products.delete');
    Route::get('/products/{product}/feature', [ProductController::class, 'feature'])->name('products.feature');
});

require __DIR__ . '/auth.php';
