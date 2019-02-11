    <link href='css/materialize.min.css' rel="stylesheet"></link>
<div class="row">
    <div class="col m10 offset-m1">
        <div class="card">

            <div class="row">
                <div class="col m4">
	                	<p> {!! $now->format('d-m-Y H:i:s'); !!} </p>
               	</div>
                <div class="col m4"><h2>Chikavi's</h2></div>
                <div class="col offset-m2 m1"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Escudo_UdeG.svg/200px-Escudo_UdeG.svg.png" alt="" width="90"></div>
            </div>
		<table>
			<thead>
				<tr>
					<th>Hora</th>	
					<th> .</th>
					<th> </th>	
					<th>Hora</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
				</tr>
			</tbody>
		</table>

            <table class="striped centered">
                <thead>
                  <tr>
                      <th>Codigo de Barras</th>
                      <th>Cantidad</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Otro campo</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><a class=" modal-trigger" href="#modal1"> 75021312312</a></td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>$0.87</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>75023123212</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                    <td>$0.87</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>32812381232</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                    <td>$0.87</td>
                    <td>$7.00</td>
                  </tr>
                   
                </tbody>
                <tr>
                    <td>Cajero Luis Rojas</td>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>$21.00</td>
                  </tr>
            </table>
            
        </div>
    </div>
</div>