<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use App\venta;
class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $entrada = $request->get('FInicio');
        $entrada2 = $request->get('FFinal');

        
        $ini =  date("y/m/d",strtotime($entrada));
        $fin = date('y/m/d',strtotime($entrada2));


       // $resultado = Venta::whereBetween('created_at', [$entrada, $entrada2])->get();
        $resultado = Venta::whereBetween('created_at',array($entrada,$entrada2))->get();
        \Session::flash('resultado', $resultado);
        return view('reportes.index')->with(compact('resultado','entrada','entrada2','ini','fin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  

    public function pdf(){
        $resultado = \Session::get('resultado');
        $pdf = \PDF::loadView('reportes.pdf', ['resultado' => $resultado ]);
        return $pdf->download('ticket.pdf');

        
    }
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
