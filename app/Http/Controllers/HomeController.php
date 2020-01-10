<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Buscar todos los productos y enviarlos de forma paginada
        $products = Product::paginate();
        return view('home', compact(('products')));
    }

    public function destroyProduct(Request $request, $id)
    {
        if($request->ajax()) {
            $product = Product::find($id);
            $product->delete();

            $products_total = Product::all()->count();
            
            return response()->json([
                'total' => $products_total,
                'message' => "Producto {$product->name} fué eliminado satisfactoriamente del sistema"
            ]);
        }
    }
}
