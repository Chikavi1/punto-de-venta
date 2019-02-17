<!--<link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet"></link>-->
<style>
body{
	font-family: 'Roboto', sans-serif;
}
	#inicio{
	background: #17202f;
  	color:white;
  	padding: 3em;
}
.center-align{
	text-align: center;
}
.white-text{
	color:;
}
table{
	border: 1px solid black;
	width: 100%;
}
td{
	padding: 1em;
}
.cabeza{
	background-color: #17202f;
	color:white;
}
</style>
<div id="inicio">	
<h1 class="center-align white-text">Reporte</h1>

</div>
<div class="row">
	<div class="col m6 offset-m3">
		
	
<table>	
	<thead class="cabeza center-align">	
		<tr>	
			<td >id</td>
			<td>Folio</td>
			<td>Producto id</td>
		</tr>
	</thead>
	<tbody class="center-align">	
		@foreach($resultado as $res)

		<tr>	
			<td>{{$res->id}}</td>
			<td>{{$res->folio}}</td>
			<td>{{$res->product_id}}</td>
		</tr>
		@endforeach

	</tbody>
</table>
	<h3 class="center-align">Chikavi © 2019</h3>
</div>
</div>
