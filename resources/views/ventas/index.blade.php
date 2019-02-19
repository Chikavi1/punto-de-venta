@extends('layouts.app')

@section('content')
<style>
    .codebar{
        height: 80px !important;
    }
</style>

<script>
     $(document).ready(function(){
    $('.modal').modal();
  });
          
    function relojillo()
{
fecha = new Date()
hora = fecha.getHours()
if (hora>12) {
    meri=' PM';
    hora=hora-12; }
else
    meri=' AM';
    minuto = fecha.getMinutes()
if (minuto<10) minuto='0'+minuto;
    segundo = fecha.getSeconds()
if (segundo<10) segundo='0'+segundo;
    horita = hora + ":" + minuto + ":" + segundo + meri;
document.getElementById('hora').innerHTML = horita
setTimeout('relojillo()',1000)
}
</script>
<body onload="relojillo()">

<div class="row">
    <div class="col m10 offset-m1">
        <div class="card p5">

            <div class="row">
                <div class="col m4"><p> {!! $now->format('d/m/Y'); !!} </p> <p  id="hora"> hora</p></div>
                <div class="col m4"><h2>Chikavis</h2></div>
                <div class="col offset-m2 m1"><img src="{{asset('img/logo.png')}}" alt="" width="90"></div>
            </div>
            <div class="row">

              <form action="" method="GET">
                <div class="col m4">
                  <div class="input-field">
                    <i class="material-icons prefix">search</i>
                    <input type="text" name="busqueda" >
                    <label for="busqueda">Busca por codigo o nombre</label>
                  </div>
                </div>
                <div class="col m2">
                  <input type="submit" class="btn  color-cut">
                </div>


              </form>
            </div>
            <table>
                <thead>
                  <tr>
                      <th>folio</th>
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
                    <td>{{$venta->cantidad}}</td>
                    <td>{{$venta->vendedor}}</td>
                    <td>{{$venta->products_id}}</td>
                    <td>${{$venta->precio}}</td>
                  </tr>
                  @endforeach
                   
                </tbody>
                <tr>
                    <td>Cajero: {{ Auth::user()->name }} </td>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>{{ $totalVentas}}</td>
                  </tr>
            </table>
            
        </div>
    </div>
</div>
<!--<a href=" {{ route('pdf') }} ">Generar Ticket</a>-->

@endsection
</body>
