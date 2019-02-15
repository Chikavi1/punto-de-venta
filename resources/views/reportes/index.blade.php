
@extends('layouts.app')

@section('content')


<script>
	 $(document).ready(function(){
    $('.datepicker').datepicker();
    console.log($('#inicios').val());
  });
</script>

	<div class="row">
		<div class="col m10 offset-m1 card">
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
					<input type="submit" value="Generar" class="btn btn-block color-cut">
				</div>
			</form>
		</div>
	</div>

	@foreach($resultado as $res)
	{{ $res->id }}
	@endforeach
@endsection