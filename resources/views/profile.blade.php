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

        <img src="https://scontent.fgdl3-1.fna.fbcdn.net/v/t1.0-9/29792617_1818901124842537_5087666672265854976_n.jpg?_nc_cat=109&_nc_ht=scontent.fgdl3-1.fna&oh=442ac893527da3330231b2b6e3df073f&oe=5CE3AAFA"
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
            <td>Correo</td>
            <td>{{ $usuario->email }}</td>
          </tr>
        </tbody>
      </table>
        </div>
            <a href="" class="blue btn ">Cambiar contraseña</a>
			</div>
		</div>
	</div>
@endsection