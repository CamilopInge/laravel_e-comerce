<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        $featuredProducts = Product::where('category', 'destacados')->get();
        return view('welcome', compact('featuredProducts'));
    }

    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('category')) {
            $categories = (array) $request->category;
            $query->whereIn('category', $categories);
        }

        if ($request->has('min_price') && $request->min_price != '') {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price') && $request->max_price != '') {
            $query->where('price', '<=', $request->max_price);
        }

        $products = $query->get();
        return view('carrito', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|url',
            'category' => 'required|string',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image = $request->image;
        $product->category = $request->category;
        $product->save();

        return redirect()->route('products.create.' . strtolower($request->category))
                         ->with('success', 'Producto creado con éxito.');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|url',
            'category' => 'required|string',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $request->image,
            'category' => $request->category,
        ]);

        return redirect()->route('products.create.' . strtolower($product->category))
                         ->with('success', 'Producto actualizado con éxito.');
    }

    public function createEscritorio()
    {
        $products = Product::where('category', 'escritorio')->get();
        return view('products.create.escritorio', compact('products'));
    }

    public function createPortatiles()
    {
        $products = Product::where('category', 'portatiles')->get();
        return view('products.create.portatiles', compact('products'));
    }

    public function createTeclados()
    {
        $products = Product::where('category', 'teclados')->get();
        return view('products.create.teclados', compact('products'));
    }

    public function createMouses()
    {
        $products = Product::where('category', 'mouses')->get();
        return view('products.create.mouses', compact('products'));
    }

    public function createMonitores()
    {
        $products = Product::where('category', 'monitores')->get();
        return view('products.create.monitores', compact('products'));
    }

    public function createAudifonos()
    {
        $products = Product::where('category', 'audifonos')->get();
        return view('products.create.audifonos', compact('products'));
    }

    public function createControles()
    {
        $products = Product::where('category', 'controles')->get();
        return view('products.create.controles', compact('products'));
    }

    public function destroy(Product $product)
    {
        $category = $product->category;
        $product->delete();

        return redirect()->route('products.create.' . strtolower($category))
                         ->with('success', 'Producto eliminado correctamente.');
    }

    public function dashboard()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }
}
