<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductController;

// Ruta para la vista welcome (página de inicio)
Route::get('/', [ProductController::class, 'welcome'])->name('welcome');

// Ruta para ver todos los productos en el inicio
Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');

// Rutas específicas para cada categoría en el inicio (solo para mostrar productos)
Route::get('/productos/portatiles', function () {
    return redirect()->route('productos.index', ['category' => 'portatiles']);
})->name('productos.portatiles');

Route::get('/productos/escritorio', function () {
    return redirect()->route('productos.index', ['category' => 'escritorio']);
})->name('productos.escritorio');

Route::get('/productos/teclados', function () {
    return redirect()->route('productos.index', ['category' => 'teclados']);
})->name('productos.teclados');

Route::get('/productos/mouses', function () {
    return redirect()->route('productos.index', ['category' => 'mouses']);
})->name('productos.mouses');

Route::get('/productos/audifonos', function () {
    return redirect()->route('productos.index', ['category' => 'audifonos']);
})->name('productos.audifonos');

Route::get('/productos/monitores', function () {
    return redirect()->route('productos.index', ['category' => 'monitores']);
})->name('productos.monitores');

Route::get('/productos/controles', function () {
    return redirect()->route('productos.index', ['category' => 'controles']);
})->name('productos.controles');

// Ruta para el chat
Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::post('/chat/sendMessage', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');

// Rutas protegidas por autenticación para el dashboard y productos
Route::middleware(['auth', 'verified'])->group(function () {
    // Ruta para el dashboard principal
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');

    // Ruta para la lista de productos en el dashboard
    Route::get('/dashboard/products', [ProductController::class, 'index'])->name('products.index');

    // Rutas para crear productos
    Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/dashboard/products', [ProductController::class, 'store'])->name('products.store');

    // Rutas para crear productos específicos de cada categoría
    Route::get('/dashboard/products/create/escritorio', [ProductController::class, 'createEscritorio'])->name('products.create.escritorio');
    Route::get('/dashboard/products/create/portatiles', [ProductController::class, 'createPortatiles'])->name('products.create.portatiles');
    Route::get('/dashboard/products/create/teclados', [ProductController::class, 'createTeclados'])->name('products.create.teclados');
    Route::get('/dashboard/products/create/mouses', [ProductController::class, 'createMouses'])->name('products.create.mouses');
    Route::get('/dashboard/products/create/monitores', [ProductController::class, 'createMonitores'])->name('products.create.monitores');
    Route::get('/dashboard/products/create/audifonos', [ProductController::class, 'createAudifonos'])->name('products.create.audifonos');
    Route::get('/dashboard/products/create/controles', [ProductController::class, 'createControles'])->name('products.create.controles');

    // Rutas para editar y actualizar productos
    Route::get('/dashboard/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/dashboard/products/{product}', [ProductController::class, 'update'])->name('products.update');

    // Ruta para eliminar un producto
    Route::delete('/dashboard/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

// Rutas protegidas por autenticación para el perfil de usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Carga de rutas de autenticación generadas por Laravel Breeze
require __DIR__.'/auth.php';
