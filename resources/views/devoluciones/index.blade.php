@extends('layouts.app')
<script>

</script>
@section('content')
	<div class="row ">
		<div class="col m6 offset-m3 card">
			<div id="inicio">
				<h1 class="center-align text-white">Devoluciones</h1>
			</div>
			<form action="" method="GET">
				<div class="input-field p3">
					<i class="material-icons prefix">assignment</i>
					<input type="text" name="folio">
					<label for="folio">Ingresa el folio de venta</label>
				</div>
				<input type="submit" class="btn btn-block color-cut" id="btnbuscar">
			</form>

		</div>
	</div>
	@if(!empty($resultado))
	<div class="row ">
		<div class="col m6 offset-m3 card " id="resultado">
		<table class="striped">
	        <thead>
	          <tr>
	              <th>Folio</th>
	              <th>Cantidad</th>
	              <th>Vendedor</th>
	              <th>Nombre</th>
	              <th>Precio</th>
	              <th>Opciones</th>
	          </tr>
	        </thead>
			
	        <tbody>
	        	@foreach($resultado as $res)
	          <tr>
	            <td>{{$res->folio}}</td>
	            <td>{{$res->cantidad}}</td>
	            <td>{{$res->vendedor}}</td>
	            <td>{{$res->nombre}}</td>
	            <td>{{$res->precio}}</td>

				<td>
					
	            <form method="POST" action="{{ route('ventas.destroy',$res->id) }}">
	     
			      	@csrf
			      	@method('DELETE')
			      	<button class="btn red white-text" type="submit">Cancelar</button>
	      		</form>
				</td>

	          </tr>
	          @endforeach
	        </tbody>
      </table>
		</div>
	</div>
	@endif
@endsection