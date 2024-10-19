<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Product_user;
use Illuminate\Foundation\Auth;

class Product_userController extends Controller
{
    //

    public function carrito()
    {
        $products = [];
        $userId = 1; // Aquí debes asignar el ID del usuario deseado
    
        // Obtener el usuario por su ID
        $user = User::find($userId);
        
    
        // Verificar si el usuario existe
        if ($user) {
            // Obtener los productos asociados al usuario mediante la relación many-to-many
            $products = $user->products()->get();
        }
    
        // Devolver el array de productos
        return view('product.carrito',compact('products'));
    }   

    public function destroy($id)
    {

        $userId =  auth()->user()->id ;
        Product_user::where('user_id', $userId)->where('product_id', $id)->delete();

        return  redirect()->route('carrito')->with('success', 'Producto Eliminado correctamente');
    }


    public function Agregar_carrito($idProducto)
    {
        $userId = auth()->user()->id;
    
        // Verificar si ya existe una relación para este producto y usuario
        $existeRelacion = Product_user::where('user_id', $userId)
                                      ->where('product_id', $idProducto)
                                      ->exists();
    
        // Si ya existe la relación, no se agrega nuevamente
        if ($existeRelacion) {
            return redirect()->route('products.index')->with('error', 'El producto ya está en el carrito');
        }
    
        // Si no existe la relación, se crea
        $relacion = new Product_user();
        $relacion->user_id = $userId;
        $relacion->product_id = $idProducto;
        $relacion->save();
    
        return redirect()->route('products.index')->with('success', 'Producto agregado al carrito correctamente');
    }

    
}




