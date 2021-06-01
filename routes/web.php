<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\WebController;

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

Route::get('/tienda', [WebController::class, 'indexProducts'])->name('web.products.index');
Route::get('/tienda/{id}', [WebController::class, 'showProduct'])->name('web.products.show');

Route::post('/send-contact-mail', [WebController::class, 'contact'])->name('contact');



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

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'delete'])->name('categories.delete');

    Route::get('/subcategories', [SubcategoryController::class, 'index'])->name('subcategories.index');
    Route::get('/subcategories/create', [SubcategoryController::class, 'create'])->name('subcategories.create');
    Route::post('/subcategories', [SubcategoryController::class, 'store'])->name('subcategories.store');
    Route::get('/subcategories/{subcategory}', [SubcategoryController::class, 'show'])->name('subcategories.show');
    Route::get('/subcategories/{subcategory}/edit', [SubcategoryController::class, 'edit'])->name('subcategories.edit');
    Route::put('/subcategories/{subcategory}', [SubcategoryController::class, 'update'])->name('subcategories.update');
    Route::delete('/subcategories/{subcategory}', [SubcategoryController::class, 'delete'])->name('subcategories.delete');
});

require __DIR__ . '/auth.php';
