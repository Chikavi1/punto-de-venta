  @extends('layouts.app')

@section('content')

<style>
  .img{
    border-radius: 50%;
    margin-left: 12em;
    margin-top: -9em;
  }
  #inicio{
    height: 18em !important;
  }
</style>
	<div class="row">
		<div class="col m6 offset-m3">
			<div class="card  z-depth-5">
				<div id="inicio">
					<h1 class="center-align">{{$usuario->name}}</h1>
				</div>

        <img src="{{ Storage::url($usuario->imagen)}}"
         alt="" width="300" height="300" class="img">
				<div class="p5">

      <form action="{{ route('profile2') }}" enctype="multipart/form-data">
        
        <div class="file-field input-field">
                  <div class="btn color-cut">
                    <span>Cambiar Imagen</span>
                    <input type="file" name="avatar">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
            </div>


          <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th><input type="text" name="nombre" value="{{ $usuario->name }}"></th>
          </tr>
           <tr>
              <th>Celular</th>
              <th><input type="text" name="celular" value="{{ $usuario->Celular }}"></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Role</td>
            <td>{{ $usuario->role }}</td>
          </tr>
          <tr>
            <td>Correo</td>
            <td>{{ $usuario->email }}</td>
          </tr>
        </tbody>
      </table>
        </div>
            <input type="submit" class="blue btn  btn-block color-cut" value="Editar Datos"></input>
      </div>
      </form>
    </div>
  </div>
@endsection