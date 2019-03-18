@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col m6 offset-m3 card p5">
		
	<h1 class="center-align p3">Editar Categoria</h1>
	<form  action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
		<div class="input-field">
			<input type="text" name="nombre"  value="{{ $category->nombre }}" >
			<label for="nombre">nombre</label>
		</div>
		<div class="file-field input-field">
                  <div class="btn color-cut">
                    <span>Imagen</span>
                    <input type="file" name="avatar" value="{{$category->imagen}}" >
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
            </div>

		<input type="submit" value="enviar" class="btn btn-block color-cut">
	</form>

	</div>
</div>
@endsection