
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

	<div class="row">
		<div class="col m10 offset-m1">
		<div class="resultado" >
			
		<h4>Resultado</h4>
		@foreach($resultado as $res)
			<ul class="collection">
		      <li class="collection-item">
		      	<div class="row">
		      		<div class="col s4">
				      	{{ $res->id }}
		      		</div>
		      		<div class="col s4">
				      	{{ $res->folio }}
		      		</div>
		      		<div class="col s4">
					{{$res->product_id}}
		      		</div>
		      	</div>
			</li>

		    </ul>
		@endforeach
		<a href="{{ route('pdf') }}" class="btn btn-block color-cut">Imprimir</a>

		</div>

	</div>
	
@endsection