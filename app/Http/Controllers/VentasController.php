<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;
use Auth;
class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $now = new \DateTime();
        $ventas = \DB::table('ventas')->where('status', 1)->get();
        $ventas = Ventas::Search($request->get("busqueda"));

        $totalVentas = $ventas->sum('precio');
        return view('ventas.index')->with(compact('now','ventas','totalVentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.create');
    }

    //use for Api 

    public function createVenta(Request $request){
        $Venta = Ventas::create($request->all());
        return $Venta;
    }

    public function getAllVentas(){
      return Ventas::all();
    }

    public function getbyMesa(Request $request){
        return Ventas::BuscarMesa($request->mesa);
    }


    public function delete(Request $request){

    $venta = Ventas::findOrFail($request->id);
    $venta->delete();
    return $venta;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta = new Ventas([
            'folio' => $request->folio,
            'cantidad' => $request->cantidad,
            'vendedor' => Auth::user()->name,
            'nombre' => $request->nombre,
            'products_id' => "1",
            'precio' => $request->precio
        ]);

        $venta->save();
        return redirect('/home');
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
       $venta = Ventas::findOrFail($id);
        return view('ventas.edit')->with(compact('venta'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $venta = Ventas::findOrFail($id);
     $venta->delete();
     return redirect('/home');
    }
}
