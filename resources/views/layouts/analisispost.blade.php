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
						<!--primer modulo-->
						<div class="col pt-5">
							<div class="card mt-2">
								<div class="card-body bg-light">
										<form>
												<ul class="d-flex">
														<div class="form-check mr-3">
																<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
																<label class="form-check-label" for="exampleRadios1">
																	Exportacion
																</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
																<label class="form-check-label" for="exampleRadios2">
																	Inportacion
																</label>
															</div>
												</ul>
												<div class="form-group">
													<label for="exampleInputEmail1">Nombre Comercial</label>
													<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre o codigo del producto">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Partida arancelaria</label>
													<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Partida arancelaria">
												</div>
												<div class="form-group">
														<label for="exampleInputPassword1">Exportador</label>
														<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre del exportador">
												</div>
												<div class="form-group">
														<label for="exampleInputPassword1">Inportador</label>
														<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre del importador">
												</div>
												<div class="row">
														<div class="col">
																<div class="form-group">
																		<label for="exampleInputPassword1">Inicio</label>
																		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Fecha de inicio">
																</div>
														</div>
														<div class="col">
																<div class="form-group">
																		<label for="exampleInputPassword1">Final</label>
																		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Fecha final">
																</div>
														</div>
												</div>
												<button type="submit" class="btn btn-primary">Bucar</button>
										</form>
                                </div>
                            </div>
                            <!--resultado-->
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Aduana</th>
                                                    <th scope="col"># arancelaria</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pruevas->slice(0, 10) as $prueva)
                                                        <tr>
                                                            <td>{{ $prueva['aduana'] }}</td>
                                                            <td>{{ $prueva['numero'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Caracteristica</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pruevas->slice(0, 5) as $prueva)
                                                        <tr>
                                                            <td>{{ $prueva['nombre_comercial'] }}</td>
                                                            <td>{{ $prueva['caracteristica'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                  <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Marcas</th>
                                                    <th scope="col">Modelos</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pruevas->slice(0, 8) as $prueva)
                                                        <tr>
                                                            <td>{{ $prueva['marca'] }}</td>
                                                            <td>{{ $prueva['modelo'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Inportador</th>
                                                    <th scope="col">Pais</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pruevas->slice(0, 5) as $prueva)
                                                        <tr>
                                                            <td>{{ $prueva['inportador'] }}</td>
                                                            <td>{{ $prueva['pais'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                                <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Puerto</th>
                                                            <th scope="col">Peso neto</th>
                                                            <th scope="col">Peso bruto</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($pruevas->slice(0, 10) as $prueva)
                                                            <tr>
                                                                <td>{{ $prueva['puerto'] }}</td>
                                                                <td>{{ $prueva['peso_neto'] }}</td>
                                                                <td>{{ $prueva['peso_bruto'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						
						<!--segundo modulo-->
						<div class="col-4 pt-5">
							<div class="card mt-2 bg-light" style="width: 18rem;">
								<div class="card-header fondomoca-asul">
									<i class="material-icons">swap_vert</i>
									Top productos
								</div>
								<div class="card-body">
									<p><small class="text-muted">Productos mas comercialisados</small></p>
									<div>
										<p><span class="font-weight-bold"><span class="colormoca-asul">Papas o aguacates</span></span><span class="font-weight-light"><br>Peru</p></span>
									</div>
									<div>
										<p><span class="font-weight-bold"><span class="colormoca-asul">Cacao</span></span><span class="font-weight-light"><br>Brasil</p></span>
									</div>
									<div>
										<p><span class="font-weight-bold"><span class="colormoca-asul">Cebollas y chalotes</span></span><span class="font-weight-light"><br>Peru</p></span>
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