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
        <h4 class="center-align p5">Nuevo Producto</h4>
       <form method="post" action="{{route('products.store')}}"  class="p5">
                    @csrf
                <div class="input-field">
                    <input type="text" class="form-control" name="nombre" required />
                    <label for="nombre">Nombre del producto</label>
                </div>

              <!--  
               Agregar al formulario cuando agrege imagenes 
               enctype="multipart/form-data"

              <div class="file-field input-field">
                  <div class="btn">
                    <span>Foto</span>
                    <input type="file" name="image">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="image">
                  </div>

                </div> 

                {!! $errors->first('image','<span class="error"> :message</span>') !!}

              -->
               <div class="input-field">
                <textarea name="descripcion" id="description">
                  
                </textarea>
                    
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">add_photo_alternate</i>
                  <input id="imagen" name="imagen" type="tel" class="validate">
                  <label for="imagen">Imagen</label>
                </div>
                <div class="input-field">

                  <i class="material-icons prefix">fastfood</i>
                 <select name="categoria">
                    <option  disabled selected>Escoge una Categoria</option>
                    @foreach($categories as $category)
                    <option value="{{$category->nombre}}">{{$category->nombre}}</option>
                    @endforeach
                  </select>

                </div>
                <div class="input-field">
                      <i class="material-icons prefix orange-text">straighten</i>
                    <input type="text" class="form-control" name="codigoBarra"/>
                    <label for="codigoBarra">Codigo de barras</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix blue-text">exposure_plus_1</i>  

                    <input type="text" class="form-control" name="cantidad"/>
                    <label for="cantidad">cantidad</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix red-text">attach_money</i>  
                    <input type="text" class="form-control" name="costo"/>
                    <label for="costo">Costo</label>
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