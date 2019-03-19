<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas;
use DB;
class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ventas = Ventas::all();
        $ventafolio = $ventas->unique('folio');
        $ventasduplicados = $ventas->diff($ventafolio);

       return view('tickets.index')->with(compact('ventafolio'));

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
    public function show($folio)
    {
       $ventas = Ventas::where('folio',"LIKE","%$folio%")->get();
       $totalVentas = $ventas->sum('precio');
       return view('tickets.show')->with(compact('ventas','folio','totalVentas')); 
    }

    public function showTicket($folio)
    {
        $ventas = Ventas::where('folio',"LIKE","%$folio%")->get();
       $totalVentas = $ventas->sum('precio');
       $now = new \DateTime();
       return view('reportes.ticket')->with(compact('ventas','totalVentas','now'));
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
