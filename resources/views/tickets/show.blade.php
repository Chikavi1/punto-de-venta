@extends('layouts.app')
@section('content')
<style>
	.p10{
		padding: 7em;
	}
</style>
<h1 class="center-align">Ticket {{ $folio}}</h1>

<div class="p10">
	
 <table>
                    <thead>
                      <tr>
                          <th>folio</th>
                          <th>estado</th>
                          <th>Cantidad</th>
                          <th>vendedor</th>
                          <th>producto</th>
                          <th>Precio</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($ventas as $venta)
                      <tr>
                        <td>{{$venta->folio}}</td>
                        <td>@if($venta->status == 0)
                              pendiente
                            @else
                            finalizado
                            @endif
                        </td>
                        <td>{{$venta->cantidad}}</td>
                        <td>{{$venta->vendedor}}</td>
                        <td>{{$venta->nombre}}</td>
                        <td>${{$venta->precio}}</td>
                      
                      </tr>
                      @endforeach
                       
                    </tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="color:green;">Total</td>
                        <td style="color:green;"> <b>$ {{ $totalVentas }}</b></td>
                      </tr>
                </table>

            <a href="{{ route('ticketchico',$folio) }}" class="btn btn-block color-cut">Ver Ticket</a>
</div>

@endsection