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
						<a class="navbar-brand" href="/">
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
							<li class="nav-item">
								<a class="nav-link p-2 text-nav-moca" href="/inteligencia">INTELIGENCIA COMERCIAL</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link p-2 text-nav-moca" href="/analisis">ANALISIS DE MERCADO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link p-2 text-nav-moca" href="#" role="button" aria-expanded="false" aria-haspopup="true">
									{{ Auth::user()->nombre }} <span class="caret"></span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link p-2 text-nav-moca"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									SALIR
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
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
					<!--primer modulo-->
					<div class="col pt-5">
						<div class="card mt-2">
							<div class="card-header fondomoca-asul">
								<i class="material-icons">room</i>
								Mapa de calor
							</div>
							<div class="card-body bg-light">
								<p><small class="text-muted">Mapa de calor de inversiones de cada pais</small></p>
								<section class="row pb-2">
									<div class="col-4">
										<div class="card-header bg-danger text-white d-flex align-items-center">
											<i class="material-icons">call_received</i>
											Pais critico
										</div>
									</div>
									<div class="col-4 ">
										<div class="card-header bg-warning text-white d-flex align-items-center">
											<i class="material-icons">call_missed_outgoing</i>
											Pais preventivo
										</div>
									</div>
									<div class="col-4">
										<div class="card-header bg-success text-white d-flex align-items-center">
											<i class="material-icons">call_made</i>
											pais moderado
										</div>
									</div>
								</section>
								<div id="vmap" style="width: 100%; height: 400px;"></div>
							</div>
						</div>
						<!--el mapa-->
						<div id="mapa" class="card mt-3">
							<div class="card-header fondomoca-asul">
								<i class="material-icons">timeline</i>
								Grafico de paises
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div id="chart_div"></div>
									</div>
								</div>
							</div>
						</div>
						<!--el resutado-->
						<div class="card mt-3">
							<div class="card-header fondomoca-asul">
								<i class="material-icons">language</i>
								Riesgo Pais
							</div>
							<div class="card-body">
								<p><small class="text-muted">Selecione el pais que desea informacion  y le graficara los resultados</small></p>
								<div class="row" id="paises">
									
								</div>
							</div>
						</div>
					</div>
					
					<!--segundo modulo-->
					<div class="col-4 pt-5">
						<div class="card mt-2 bg-light" style="width: 18rem;">
							<div class="card-header fondomoca-asul">
							<i class="material-icons">swap_vert</i>
								Top de exportacion
							</div>
							<div class="card-body">
								<p><small class="text-muted">los 4 paises que mas exportaron en el ultimo mes</small></p>
								<div>
									<p><span class="font-weight-bold"><span class="colormoca-asul">Chile</span></span><span class="font-weight-light"><br>Exportacion : 70%<br>Importacion : 30%</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold"><span class="colormoca-asul">Brasil</span></span><span class="font-weight-light"><br>Exportacion : 65%<br>Importacion : 35%</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold"><span class="colormoca-asul">Ecuador</span></span><span class="font-weight-light"><br>Exportacion : 36%<br>Importacion : 64%</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold"><span class="colormoca-asul">Peru</span></span><span class="font-weight-light"><br>Exportacion : 25%<br>Importacion : 75%</p></span>
								</div>
							</div>
						</div>
						<div class="card mt-4" style="width: 18rem;">
							<div class="card-header fondomoca-asul">
								<i class="material-icons">swap_vert</i>
								Paises en crisis
							</div>
							<div class="card-body">
								<p><small class="text-muted">Los 3 paises que se encuentra en crisis</small></p>
								<div>
									<p><span class="font-weight-bold"><span class="colormoca-asul">Venezuela</span></span><span class="font-weight-light"><br>Problema : Politico</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold"><span class="colormoca-asul">Argentina</span></span><span class="font-weight-light"><br>Problema : Deuda</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold"><span class="colormoca-asul">México</span></span><span class="font-weight-light"><br>Problema : Deuda</p></span>
								</div>
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
				backgroundColor: '#34495e',
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#e74c3c',
				scaleColors: ['#f1c40f','#27ae60'],
				values: sample_data,
				enableZoom: true,
          		showTooltip: true,
				normalizeFunction: 'polynomial',
    			showTooltip: true,
				multiSelectRegion: true,
          		selectedRegions: ['PK','VE','SD','AO','YE'],
				
				  //paises de 
			  });
			});
		  </script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="js/main-moca.js"></script>
  </body>
</html>