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

       <img src="{{ $usuario->imagen}}"
         alt="" width="300" height="300" class="img">

				<div class="p5">
					<table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>{{ $usuario->name }}</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Role</td>
            <td>{{ $usuario->role }}</td>
          </tr>
           <tr>
            <td>Celular</td>
            <td>{{ $usuario->celular }}</td>
          </tr>
          <tr>
            <td>Correo</td>
            <td>{{ $usuario->email }}</td>
          </tr>
        </tbody>
      </table>
        </div>
            <a href="{{ route('edit',$usuario->id) }}" class="blue btn btn-block color-cut">Modificar Datos</a>
			</div>
		</div>
	</div>
@endsection