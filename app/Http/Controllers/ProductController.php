<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Método para mostrar productos destacados en welcome.blade.php
    public function welcome()
    {
        // Obtener solo los productos destacados
        $featuredProducts = Product::where('category', 'destacados')->get();

        return view('welcome', compact('featuredProducts'));
    }

    // Método para mostrar todos los productos en carrito.blade.php
    public function index(Request $request)
    {
        $query = Product::query();
    
        // Asegúrate de que $request->category sea un arreglo
        if ($request->has('category')) {
            $categories = (array) $request->category; // Convierte a array si no lo es
            $query->whereIn('category', $categories);
        }
    
        // Filtrar por rango de precios
        if ($request->has('min_price') && $request->min_price != '') {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price') && $request->max_price != '') {
            $query->where('price', '<=', $request->max_price);
        }
    
        $products = $query->get();
    
        return view('carrito', compact('products'));
    }
    

}
