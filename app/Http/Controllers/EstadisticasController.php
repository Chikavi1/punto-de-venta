<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;
use App\Products;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizza = Ventas::buscarCategoria('pizza')->count();
        $cerveza = Ventas::buscarCategoria('cerveza')->count();
        $alitas = Ventas::buscarCategoria('alitas')->count();
        $ventas = Ventas::count();
        $productos = Products::count();
        $estadistica = 
            array("pizza" => $pizza,
                "cerveza" => $cerveza,
                "alitas" => $alitas,
                "ventas" => $ventas,
                "productos" => $productos);
        return view('estadisticas.index')->with(compact('estadistica'));
    }
    public function estadistica(){
       
        $todo = array("pizza" => $pizza,"cerveza" => $cerveza);
        return $todo;
        //,$alitas,$ventas,$productos
    }
    public function getEstadisticas(){
         $pizza = Ventas::buscarCategoria('pizza')->count();
        $cerveza = Ventas::buscarCategoria('cerveza')->count();
        $alitas = Ventas::buscarCategoria('alitas')->count();
        $ventas = Ventas::count();
        $productos = Products::count();

        $estadistica  = array(
            array("pizza" => $pizza,
                "cerveza" => $cerveza,
                "alitas" => $alitas,
                "ventas" => $ventas,
                "productos" => $productos));

        return $estadistica;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
