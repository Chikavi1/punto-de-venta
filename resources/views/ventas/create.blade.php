@extends('layouts.app')
@section('content')
 <script src="/vendor/ckeditor-2/ckeditor.js"></script>
  <script src="/vendor/ckeditor-2/adapters/jquery.js"></script>


<script>
  $(document).ready(function(){
    $('select').formSelect();
    $('textarea').ckeditor();
 });
</script>
<div class="row">
  <div class="col s12 m6 offset-m3">
    <div class="card padding">
        <h4 class="center-align p5">Nueva venta</h4>
       <form method="post" action="{{route('ventas.store')}}"  class="p5">
                    @csrf
                <div class="input-field">
                    <input type="text" class="form-control" name="folio" required />
                    <label for="folio">Folio</label>
                </div>

   				 <div class="input-field">
                  <i class="material-icons prefix blue-text">exposure_plus_1</i>  

                    <input type="text" class="form-control" name="cantidad"/>
                    <label for="cantidad">cantidad</label>
                </div>
             
               
                <div class="input-field">
                  <i class="material-icons prefix">fastfood</i>
                  <input id="nombre" name="nombre" type="tel" class="validate">
                  <label for="nombre">nombre</label>
                </div>
				
				<div class="input-field">
                  <i class="material-icons prefix green-text">attach_money</i>  
                  <label for="products_id">products_id</label>
                    <input type="text" class="form-control" name="products_id"/>
                </div>

                 <div class="input-field">
                  <i class="material-icons prefix green-text">attach_money</i>  
                  <label for="precio">precio</label>
                    <input type="text" class="form-control" name="precio"/>
                </div>

                
                <button type="submit" class="btn btn-block color-cut">Crear</button>
       </form>
    </div>
  </div>
</div>
@endsection