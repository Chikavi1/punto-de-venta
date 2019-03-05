@extends('layouts.app')

@section('content')
<script>
     $(document).ready(function(){
    $('.modal').modal();
     $('.tooltipped').tooltip();
  });
  </script>


<div id="inicio">
	<h2 class="center-align">Inventario</h2>
</div>

<div class="row">
	<div class="col m9 offset-m1 s12 card">
		@if(!empty($products->count()))

	    <table class="centered">
	        <thead>
	          <tr>
	              <th>Codigo de Barra</th>
	              <th>Cantidad</th>
	              <th>Categoria</th>
	              <th>Nombre</th>
	              <th>Descripcion</th>
	              <th>Costo</th>
	              <th>Precio</th>
	              <th>Opciones</th>
	          </tr>
	        </thead>

	        <tbody>
	        	@foreach($products as $product)
	          <tr>
	            <td>
	            	<div class="codebar center">
        				{!! DNS1D::getBarcodeSVG(  $product->codigoBarra , "C128"); !!}
       				<p>{{$product->codigoBarra}}</p>
    				</div>
    			</td>
	            <td>{{$product->cantidad}}</td>
	            <td>{{$product->categoria}}</td>
	            <td>{{$product->nombre}}</td>
	            <td>{!! $product->descripcion !!}</td>
	            <td>${{$product->costo}}</td>
	            <td>${{$product->precio}}</td>
	            <td><a href="#modal{{$product->id}}"  class="red-text modal-trigger">Eliminar</a>
	            	<a href="{{ route('products.edit',$product->id)}}"class="green-text">Editar</a>

	<div id="modal{{$product->id}}" class="modal">
	    <div class="modal-content">

		<h3>Confirmacion para eliminar</h3>
	   	<p>¿Estas seguro que deseas eliminar <b>{{$product->nombre}}</b> ?</p>
	    
	    </div>
	    <div class="modal-footer">
	      <form method="POST" action="{{ route('products.destroy',$product->id) }}">
	      <a href="#!" class="modal-close waves-effect waves-green blue-text btn-flat">Cancelar</a>
	      	@csrf
	      	@method('DELETE')
	      	<button class="btn red white-text" type="submit">Aceptar</button>
	      </form>
	    
	    </div>
	  </div>

	            </td>
	          </tr>
	          	@endforeach
	         
	           
	        </tbody>
	        <tr class="color-cut white-text">
	            <td>Cajero: {{ Auth::user()->name }}</td>
	            <td>{{ $totalCantidad }}</td>
	            <td></td>
	            <td></td>
	            <td>Total</td>
	            <td>${{ $totalCosto }}</td>
	            <td>${{ $totalPrecio }}</td>
	            <td></td>
	          </tr>
	    </table>
	    @else
	    <div class="center">
	    	
	    	<img src="{{asset('img/shopping-bag.png')  }}" class="center" width="200" alt="no tienes productos">
	    	<h3>no tienes productos</h3>
	    </div>
	    @endif

	</div>
</div>


 <div class="fixed-action-btn">
  
  
</div>


<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">hamburguer</i>
  </a>
  <ul>
  	<a class="btn-floating btn-large color-cut tooltipped" href="{{ route('products.create') }}" data-position="left" data-tooltip="Agregar producto">
    <i class="large material-icons">add</i>
  	</a>

  		<a class="btn-floating btn-large yellow tooltipped" href="{{ route('categories.index') }}" data-position="left" data-tooltip="Agregar Categoria">
    <i class="large material-icons">add</i>
  	</a>

  </ul>
</div>
      



@endsection