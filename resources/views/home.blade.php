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
                <div class="col offset-m2 m1"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Escudo_UdeG.svg/200px-Escudo_UdeG.svg.png" alt="" width="90"></div>
            </div>

            <table>
                <thead>
                  <tr>
                      <th>Codigo de Barras</th>
                      <th>Cantidad</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Otro campo</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><a class=" modal-trigger" href="#modal1"> 75021312312</a></td>
                    <td>3</td>
                    <td>tacos</td>
                    <td>$15</td>
                    <td>$18</td>
                  </tr>
                  <tr>
                    <td><a class=" modal-trigger" href="#modal1"> 75021312312</a></td>
                    <td>3</td>
                    <td>tacos</td>
                    <td>$15</td>
                    <td>$18</td>
                  </tr>
                  <tr>
                    <td><a class=" modal-trigger" href="#modal1"> 75021312312</a></td>
                    <td>3</td>
                    <td>tacos</td>
                    <td>$15</td>
                    <td>$18</td>
                  </tr>
                   
                </tbody>
                <tr>
                    <td>Cajero: {{ Auth::user()->name }} </td>
                    <td></td>
                    <td>Total</td>
                    <td>$21.00</td>
                    <td></td>
                  </tr>
            </table>
            
        </div>
    </div>
</div>
<!--<a href=" {{ route('pdf') }} ">Generar Ticket</a>-->
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Leer Codigo de Barras</h4>
      <p>Ingresa a la App Chikavi's © y lee el siguiente codigo</p>

      <div class="codebar center">
        {!! DNS1D::getBarcodeSVG("4445645656", "C128"); !!}
        <p>
            4445645656
            
        </p>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
    </div>
  </div>
  
@endsection
</body>
