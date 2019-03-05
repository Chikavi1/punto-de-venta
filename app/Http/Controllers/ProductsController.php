<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $totalCantidad = Products::getTotalCantidad();
        $totalCosto = Products::getTotalCosto();
        $totalPrecio = Products::getTotalPrecio();
        return view('products.index')->with(compact('products','totalCosto','totalPrecio','totalCantidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('products.create')->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('avatar')){

            $imagen = $request->file('avatar')->store('public');
            $resultado = str_replace("public", "storage", $imagen);
        }

        $product = new Products([
            'codigoBarra' => $request->codigoBarra ,
            'imagen' => $resultado,
            'cantidad' => $request->cantidad ,
            'categoria' => $request->categoria ,
            'nombre' => $request->nombre ,
            'descripcion' => $request->descripcion ,
            'costo' => $request->costo ,
            'precio' => $request->precio
        ]);

        $product->save();

        return redirect('/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit')->with(compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $product = Products::findOrFail($id);
        if($request->hasFile('avatar')){
            $imagen = $request->file('avatar')->store('public');
            $resultado = str_replace("public", "storage", $imagen);
        }
        $product->imagen = $resultado;
        $product->nombre = $request->get('nombre');
        $product->codigoBarra = $request->codigoBarra;
        $product->cantidad = $request->cantidad ;
        $product->categoria = $request->categoria ;
        $product->descripcion = $request->descripcion ;
        $product->costo = $request->costo ;
        $product->precio = $request->precio;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = Products::findOrFail($id);
         
        $Product->delete();

        return redirect('/products');
    }
}
