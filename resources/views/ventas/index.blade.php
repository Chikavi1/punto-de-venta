@extends('layouts.app')

@section('content')
<style>
    .codebar{
        height: 80px !important;
    }
     .tabs .tab a{
            color:#17202f;
        } /*Black color to the text*/

        .tabs .tab a:hover {
            background-color:#17202f;
            color:white;
        } /*Text color on hover*/

        .tabs .tab a.active {
            background-color: #17202f;
            color:white;
        } /*Background and text color when a tab is active*/

        .tabs .indicator {
            background-color:white;
        } /*Color of
</style>

<script>
     $(document).ready(function(){
    $('.modal').modal();
    $('.tabs').tabs();
    $('#tabs-swipe-demo').tabs({ 'swipeable': true });
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




     @if(!empty($ventas->count()))
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
                        <td>Cajero: {{ Auth::user()->name }} </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="color:green;">Total</td>
                        <td style="color:green;"> <b>${{ $totalVentas}}</b></td>
                      </tr>
                </table>
                @else
                <div class="center">
                  <img src="{{asset('img/shopping.png')  }}" class="center" width="100" alt="no tienes ventas aun">
                  <h3>No tienes ningun registro</h3>
                </div>
                @endif

        

      
            
    </div>
    </div>
</div>
<!--<a href=" {{ route('pdf') }} ">Generar Ticket</a>-->

@endsection
</body>
