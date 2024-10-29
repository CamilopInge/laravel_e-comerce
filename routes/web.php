<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductController;

// Ruta para la vista welcome
Route::get('/', [ProductController::class, 'welcome'])->name('welcome');

// Ruta para la vista de productos
Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');

// Rutas específicas para cada categoría
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


// Ruta para el dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Carga de rutas de autenticación
require __DIR__.'/auth.php';
