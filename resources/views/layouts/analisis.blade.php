<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="css/main-moca.css" rel="stylesheet"> 

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
						<li class="nav-item">
							<a class="nav-link p-2 text-nav-moca" href="/inteligencia">INTELIGENCIA COMERCIAL</a>
						</li>
						<li class="nav-item active">
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
					<!--primer modulo-->
					<div class="col pt-5">
						<div class="card mt-2">
							<div class="card-body bg-light">
								<div id="vmap" style="width: 100%; height: 400px;"></div>
							</div>
							<section class="row pl-4 pb-2">
								<div class="col d-flex"><span class="text-danger mr-2">Pais Critico</span><span class="text-warning mr-2">Pais preventivo</span><span class="text-success mr-2">Pais Moderado</span></div>
							</section>
						</div>
						<div class="card mt-3">
							<div class="card-header">
								Riesgo Pais
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="card mt-2 bg-light">
											<div class="card-body">
												<div>
													<p><span class="font-weight-bold">Peru</span><span class="font-weight-light"><br>Exportacion : 70%<br>Inportacion : 30%</p></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card mt-2 bg-light">
											<div class="card-body">
												<div>
													<p><span class="font-weight-bold">Peru</span><span class="font-weight-light"><br>Exportacion : 70%<br>Inportacion : 30%</p></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card mt-2 bg-light">
											<div class="card-body">
												<div>
													<p><span class="font-weight-bold">Peru</span><span class="font-weight-light"><br>Exportacion : 70%<br>Inportacion : 30%</p></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!--segundo modulo-->
					<div class="col-4 pt-5">
						<div class="card mt-2 bg-light" style="width: 18rem;">
							<div class="card-header">
								Top de exportacion
							</div>
							<div class="card-body">
								<div>
									<p><span class="font-weight-bold">Peru</span><span class="font-weight-light"><br>Exportacion : 70%<br>Inportacion : 30%</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold">Brasil</span><span class="font-weight-light"><br>Exportacion : 65%<br>Inportacion : 35%</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold">Ecuador</span><span class="font-weight-light"><br>Exportacion : 36%<br>Inportacion : 64%</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold">Chile</span><span class="font-weight-light"><br>Exportacion : 25%<br>Inportacion : 75%</p></span>
								</div>
							</div>
						</div>
						<div class="card mt-4" style="width: 18rem;">
							<div class="card-header">
								Paises en crisis
							</div>
							<div class="card-body">
								<div>
									<p><span class="font-weight-bold">Venezuela</span><span class="font-weight-light"><br>Problema : Politico</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold">Argentina</span><span class="font-weight-light"><br>Problema : Deuda</p></span>
								</div>
								<div>
									<p><span class="font-weight-bold">México</span><span class="font-weight-light"><br>Problema : Deuda</p></span>
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