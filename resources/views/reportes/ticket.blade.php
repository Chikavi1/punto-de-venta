<!DOCTYPE html>
<html>

<head>
  <style>
  	* {
  font-size: 12px;
  font-family: 'Times New Roman';
}

td,
th,
tr,
table {
  border-top: 1px solid black;
  border-collapse: collapse;
}

td.producto,
th.producto {
  width: 75px;
  max-width: 75px;
}

td.cantidad,
th.cantidad {
  width: 40px;
  max-width: 40px;
  word-break: break-all;
}

td.precio,
th.precio {
  width: 40px;
  max-width: 40px;
  word-break: break-all;
}

.centrado {
  text-align: center;
  align-content: center;
}

.ticket {
  width: 155px;
  max-width: 155px;
}

img {
  max-width: inherit;
  width: inherit;
}
  </style>

</head>

<body>
  <div class="ticket">
    <img src="{{ asset('img/logo.png') }}" alt="Logotipo">
    <p class="centrado">CHIKAVI'S
      <br>JAUJA #1006
      <br>{!! $now->format('d/m/Y'); !!} </p>
    <table>
      <thead>
        <tr>
          <th class="cantidad">CANT</th>
          <th class="producto">PRODUCTO</th>
          <th class="precio">$$</th>
        </tr>
      </thead>
      <tbody>

      @foreach($ventas as $venta)
        <tr>
          <td class="cantidad">{{$venta->cantidad}}</td>
          <td class="producto">{{$venta->nombre}}</td>
          <td class="precio">{{$venta->precio}}</td>
        </tr>
        

       @endforeach

      </tbody>
    </table>
    <p class="centrado">¡GRACIAS POR SU COMPRA!
      <br>https://www.chikavi.com</p>
  </div>
</body>

</html>