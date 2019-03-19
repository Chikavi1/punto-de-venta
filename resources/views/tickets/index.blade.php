@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col m4 offset-m4">
			<div class="card center-align">
				<h1>Tickets</h1>
			@if(!empty($ventafolio->count()))
				@foreach($ventafolio as $venta)
				<h2 >
					<a href="{{ route('ticket.show', $venta->folio) }}"> {{ $venta->folio}} </a> <br>
				</h2>
				@endforeach
			@else
			 	<img src="{{asset('img/shopping.png')  }}" class="center" width="90" alt="no tienes ventas aun">
				<h2>Aun no tienes tickets</h2>
			@endif
			</div>
		</div>
	</div>
	
@endsection