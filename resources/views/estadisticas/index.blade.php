@extends('layouts.app')
@section('content')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script >
    	

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['comida', 'cantidad'],
          ['cervezas', {{ $estadistica['cerveza']}} ],
          ['alitas',  {{$estadistica['alitas']}} ],
          ['pizzas',  {{$estadistica['pizza']}} ]
        ]);  

        var options = {
          title: 'Los más vendidos '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>

	<div class="row">
			<div id="inicio">
			<h1 class="center-align">Estadisticas</h1>
			</div>
	</div>

	<div class="row">
		<div class="col card offset-m3 m3 s12 p5" style="background: #B00020">
			<p class="center-align white-text">Total de productos</p>
		<h3 class="center-align white-text">
			{{$estadistica['productos']}}
		</h3>	
		</div>
		<div class="col card  m3 s12 p5" style="background: #1A237E">
		<p class="center-align white-text">Total de Ventas</p>
		<h3 class="center-align white-text">
			{{$estadistica['ventas']}}
		</h3>	
		</div>
	</div>

	<div class="row">
		<div class="col m6 offset-m3">
			<div class="center">
				<div id="piechart" class="center" style="width: 100%; height: 500px;"></div>
			</div>
		</div>
	</div>
		
@endsection


   
 