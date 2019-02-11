@extends('layouts.app')

@section('content')
<script>
     $(document).ready(function(){
    $('.modal').modal();
  });


  </script>


<div id="inicio">
	<h2 class="center-align">Inventario</h2>
</div>

<div class="row">
	<div class="col m9 offset-m1 s12 card">
	    <table class="centered">
	        <thead>
	          <tr>
	              <th>Codigo de Barra</th>
	              <th>Cantidad</th>
	              <th>Departamento</th>
	              <th>Nombre</th>
	              <th>Descripcion</th>
	              <th>Costo</th>
	              <th>Precio</th>
	              <th>Opciones</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td><a class=" modal-trigger" href="#modal1"> 75021312312</a></td>
	            <td>2</td>
	            <td>Comida</td>
	            <td>tacos</td>
	            <td>pues son tacos xd</td>
	            <td>$7.00</td>
	            <td>$15.00</td>
	            <td><a href="#modal2" class="red-text modal-trigger">Eliminar</a>
	            	<span class="green-text ">Editar</span>
	            </td>
	          </tr>
	          <tr>
	            <td><a class=" modal-trigger" href="#modal1"> 75021312312</a></td>
	            <td>2</td>
	            <td>Comida</td>
	            <td>tacos</td>
	            <td>pues son tacos xd</td>
	            <td>$7.00</td>
	            <td>$15.00</td>
	            <td><a href="#modal2" class="red-text modal-trigger">Eliminar</a>
	            	<span class="green-text ">Editar</span>
	            </td>
	          </tr>
	          <tr>
	            <td><a class=" modal-trigger" href="#modal1"> 75021312312</a></td>
	            <td>2</td>
	            <td>Comida</td>
	            <td>tacos</td>
	            <td>pues son tacos xd</td>
	            <td>$7.00</td>
	            <td>$15.00</td>
	            <td><a href="#modal2" class="red-text modal-trigger">Eliminar</a>
	            	<span class="green-text ">Editar</span>
	            </td>
	          </tr>
	           
	        </tbody>
	        <tr>
	            <td>Cajero Luis Rojas</td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td>Total</td>
	            <td>$21.00</td>
	          </tr>
	    </table>
	    
	</div>
</div>

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


<div id="modal2" class="modal">
    <div class="modal-content">

	<h3>Confirmacion para eliminar</h3>
   	<p>¿Estas seguro que lo quieres eliminar?</p>
    
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green red-text btn-flat">Cancelar</a>
      <a href="#!" class="modal-close waves-effect waves-green blue-text btn-flat">Aceptar</a>
    </div>
  </div>
  
@endsection