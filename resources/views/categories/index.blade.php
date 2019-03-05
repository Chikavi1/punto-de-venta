@extends('layouts.app')

@section('content')
<script>
     $(document).ready(function(){
    $('.modal').modal();
  });
  </script>
<div class="row">
	<div class="col m10 offset-m1">
		<div class="card">
			<h1 class="center-align p3">Categorias</h1>

			<div class="row p5">
				@foreach($categories as $category)
					<div class="col m6 ">
					  <div class="card">
					    <div class="card-image waves-effect waves-block waves-light">
					      <img class="activator" src="/{{$category->imagen}}" height="300" >
					    </div>
					    <div class="card-content">
					      <span class="card-title center-align activator grey-text text-darken-4">{{$category->nombre}}<i class="material-icons right">more_vert</i></span>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4 center-align">{{$category->nombre}}<i class="material-icons right">close</i></span>
					      <div class="p3 mt5">
					      	<a href="{{ route('categories.edit',$category->id) }}" class="btn btn-block green text-white ">Editar</a>
					      </div>
					      <div class="p3">
						  	<a href="#modal{{$category->id}}" class=" modal-trigger btn btn-block red text-white ">Eliminar</a>
					      </div>
					    </div>
					  </div>
            
						
	<div id="modal{{$category->id}}" class="modal">
	    <div class="modal-content">

		<h3>Confirmacion para eliminar</h3>
	   	<p>¿Estas seguro que deseas eliminar <b>{{$category->nombre}}</b> ?</p>
	    
	    </div>
	    <div class="modal-footer">
	      <form method="POST" action="{{ route('categories.destroy',$category->id) }}">
	      <a href="#!" class="modal-close waves-effect waves-green blue-text btn-flat">Cancelar</a>
	      	@csrf
	      	@method('DELETE')
	      	<button class="btn red white-text" type="submit">Aceptar</button>
	      </form>
	    
	    </div>
	  </div>

					</div>	
				@endforeach
			</div>
		</div>
	</div>
</div>

 <div class="fixed-action-btn">
  <a class="btn-floating btn-large color-cut" href="{{ route('categories.create') }}">
    <i class="large material-icons">add</i>
  </a>
  
</div>
@endsection