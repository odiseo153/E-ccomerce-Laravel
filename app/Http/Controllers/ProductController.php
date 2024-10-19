<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     
     public function index()
     {
         // Obtener el ID del usuario autenticado
         $userId = auth()->user()->id;
     
         // Obtener todos los productos que no están asociados con el usuario actual
         $products = Product::whereNotIn('id', function($query) use ($userId) {
             $query->select('product_id')->from('product_user')->where('user_id', $userId);
         })->paginate();
     
         return view('product.index', compact('products'))
             ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
     }
     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        echo $request;

        return redirect()->route('products.index')
            ->with('success', 'Producto creado Exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
       

        return view('product.show', compact('product'));
    }

 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

}
