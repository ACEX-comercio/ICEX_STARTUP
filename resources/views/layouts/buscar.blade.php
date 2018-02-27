<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="css/main-moca.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>acex|analisis de mercado</title>
  </head>
  <body>
	  <!--SECTION OF NAVBAR-->
		<section class="container-fluid bg-white sombra-moca">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-white">
						<a class="navbar-brand" href="#">
							<img src="images/logo-icex.png" height="30" class="d-inline-block align-top" alt="">
						</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
						<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link p-2 text-nav-moca" href="/">INICIO</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link p-2 text-nav-moca" href="/inteligencia">INTELIGENCIA COMERCIAL</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-2 text-nav-moca" href="/analisis">ANALISIS DE MERCADO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-2 text-nav-moca" href="/./#pricing">PLANES Y PRODUCTOS</a>
						</li>
						</ul>
					</div>
				</nav>
			</div>
		</section><!--END SECTION OF NAVBAR-->
		<!---->
		<!--SECTION OF CONTENIDO-->
		<section class="container-fluid">
				<div class="container">
					<div class="row">
						
					</div>
                    <div class="row">
                        <div class="col">
                            <div class="card mt-2 bg-light">
								<div class="card-header fondomoca-asul">
									<i class="material-icons">swap_vert</i>
										Top productos
								</div>
								<div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Pais</th>
                                                <th scope="col">Puerto</th>
                                                <th scope="col">Descripcion</th>
                                                <th scope="col">Partida Arancelaria</th>
                                                <th scope="col">Peso Orig</th>
                                                <th scope="col">Bulto Orig</th>
                                                <th scope="col">Importador</th>
                                                <th scope="col">Exportador</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($informacions as $informacion)
                                                <tr>
                                                    <td>{{$informacion->nombre}}</td>
                                                    <td>{{$informacion->puerto}}</td>
                                                    <td>{{$informacion->descripcion_comercial}}</td>
                                                    <td>{{$informacion->partida_arancelaria}}</td>
                                                    <td>{{$informacion->peso_original}}</td>
                                                    <td>{{$informacion->bultos_original}}</td>
                                                    <td>{{$informacion->importador}}</td>
                                                    <td><a href="https://www.google.com/search?client=windows&channel=fs&ei=mZyUWqrVBYOG5wL34Y3ABg&q={{$informacion->exportador}}&oq={{$informacion->exportador}}&gs_l=psy-ab.3..0i71k1l5.0.0.0.2654.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.0_CAw8j_O_0">{{$informacion->exportador}}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</section>
		
    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.vmap.sampledata.js"></script>
	<script type="text/javascript" src="js/jquery.vmap.js"></script>
	<script type="text/javascript" src="js/maps/jquery.vmap.world.js" charset="utf-8"></script>

    <script>
			jQuery(document).ready(function () {
			  jQuery('#vmap').vectorMap({
				map: 'world_en',
				backgroundColor: '#273c75',
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#666666',
				enableZoom: true,
				showTooltip: true,
				scaleColors: ['#C8EEFF', '#006491'],
				values: sample_data,
				normalizeFunction: 'polynomial'
			  });
			});
		  </script>
  </body>
</html>