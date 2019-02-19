  @extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col m6 offset-m3">
			<div class="card  z-depth-5">
				<div id="inicio">
					<h1 class="center-align">{{$usuario->name}}</h1>
				</div>
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
			</div>
		</div>
	</div>
@endsection