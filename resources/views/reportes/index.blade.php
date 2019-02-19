
@extends('layouts.app')

@section('content')


<script>
	 $(document).ready(function(){
    $('.datepicker').datepicker({
    	format: 'yy/mm/dd'
    });

  });
</script>

	<div class="row">
		<div class="col m6 offset-m3 card">
			<h4 class="center-align">Generar Reporte</h4>
			<p class="center-align">Selecciona la fecha con la cual quieres generar el reporte.</p>
			<form  method="GET" class="col s12">
				<div class="row">
					<div class="input-field col s5 m4 ">
						<input type="search" class="datepicker"  placeholder="fecha de inicio" id="inicios" name="FInicio">
					</div>
					<div class="input-field col s2 m4">
					</div>
					<div class="input-field col s5 m4 ">
						<input type="text"  class="datepicker" placeholder="fecha de finalizacion" name="FFinal">
					</div>
					<input type="submit" value="Generar" class="btn btn-block color-cut" id="buscar">
				</div>
			</form>
		</div>
	</div>

		@if(!empty($resultado->count()))
	<div class="row">
		<div class="col m10 offset-m1">
		<div class="resultado" >
			
		<h4 class="center-align">Resultado</h4>
		<table class="striped">
	        <thead>
	          <tr>
	              <th>Folio</th>
	              <th>Cantidad</th>
	              <th>Vendedor</th>
	              <th>Nombre</th>
	              <th>Precio</th>
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
	          </tr>
	          @endforeach
	        </tbody>
      </table>
		<a href="{{ route('pdf') }}" class="btn btn-block color-cut">Imprimir</a>

		</div>
		@endif

	</div>
	
@endsection