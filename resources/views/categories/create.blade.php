@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col m6 offset-m3 card p5">
		
	<h1 class="center-align p3">Crear Categoria</h1>
	<form method="POST" action="{{ route('categories.store') }}" >
                    @csrf
		<div class="input-field">
			<input type="text" name="nombre" required >
			<label for="nombre">nombre</label>
		</div>
		<div class="input-field">
			<input type="text" name="imagen" required>
			<label for="imagen">Imagen</label>
		</div>

		<input type="submit" value="enviar" class="btn btn-block color-cut">
	</form>

	</div>
</div>
@endsection