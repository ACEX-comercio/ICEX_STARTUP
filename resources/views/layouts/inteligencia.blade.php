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
							<li class="nav-item active">
								<a class="nav-link p-2 text-nav-moca" href="/inteligencia">INTELIGENCIA COMERCIAL</a>
							</li>
							<li class="nav-item">
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
									<i class="material-icons">find_replace</i>
									Busqueda personalizada
								</div>
								<div class="card-body bg-light">
										<form action="/buscar" method="get">
											<ul class="d-flex">
													<div class="form-check mr-3">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
														<label class="form-check-label" for="exampleRadios1">
															Exportacion
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
														<label class="form-check-label" for="exampleRadios2" disabled="">
															Importacion
														</label>
													</div>
											</ul>
											<div class="form-group">
												<label class="mr-sm-2" for="inlineFormCustomSelect">Pais</label>
												<select name="pais" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
													<option  selected>Todos</option>
													<option name="pais" value="Afganistán">Afganistán</option>
														<option value="Albania">Albania</option>
														<option value="Alemania">Alemania</option>
														<option value="Algeria">Algeria</option>
														<option value="Andorra">Andorra</option>
														<option value="Angola">Angola</option>
														<option value="AI">Anguila</option>
														<option value="AQ">Antártida</option>
														<option value="AG">Antigua y Barbuda</option>
														<option value="AN">Antillas Neerlandesas</option>
														<option value="SA">Arabia Saudita</option>
														<option value="AR">Argentina</option>
														<option value="AM">Armenia</option>
														<option value="AW">Aruba</option>
														<option value="AU">Australia</option>
														<option value="AT">Austria</option>
														<option value="AZ">Azerbayán</option>
														<option value="BE">Bélgica</option>
														<option value="BS">Bahamas</option>
														<option value="BH">Bahrein</option>
														<option value="BD">Bangladesh</option>
														<option value="BB">Barbados</option>
														<option value="BZ">Belice</option>
														<option value="BJ">Benín</option>
														<option value="BT">Bhután</option>
														<option value="BY">Bielorrusia</option>
														<option value="MM">Birmania</option>
														<option value="BO">Bolivia</option>
														<option value="BA">Bosnia y Herzegovina</option>
														<option value="BW">Botsuana</option>
														<option value="BR">Brasil</option>
														<option value="BN">Brunéi</option>
														<option value="BG">Bulgaria</option>
														<option value="BF">Burkina Faso</option>
														<option value="BI">Burundi</option>
														<option value="CV">Cabo Verde</option>
														<option value="KH">Camboya</option>
														<option value="CM">Camerún</option>
														<option value="CA">Canadá</option>
														<option value="TD">Chad</option>
														<option value="CL">Chile</option>
														<option value="china">China</option>
														<option value="CY">Chipre</option>
														<option value="VA">Ciudad del Vaticano</option>
														<option value="CO">Colombia</option>
														<option value="KM">Comoras</option>
														<option value="CG">Congo</option>
														<option value="CD">Congo</option>
														<option value="KP">Corea del Norte</option>
														<option value="KR">Corea del Sur</option>
														<option value="CI">Costa de Marfil</option>
														<option value="CR">Costa Rica</option>
														<option value="HR">Croacia</option>
														<option value="CU">Cuba</option>
														<option value="DK">Dinamarca</option>
														<option value="DM">Dominica</option>
														<option value="EC">Ecuador</option>
														<option value="EG">Egipto</option>
														<option value="SV">El Salvador</option>
														<option value="AE">Emiratos Árabes Unidos</option>
														<option value="ER">Eritrea</option>
														<option value="SK">Eslovaquia</option>
														<option value="SI">Eslovenia</option>
														<option value="España">España</option>
														<option value="US">Estados Unidos de América</option>
														<option value="EE">Estonia</option>
														<option value="ET">Etiopía</option>
														<option value="PH">Filipinas</option>
														<option value="FI">Finlandia</option>
														<option value="FJ">Fiyi</option>
														<option value="FR">Francia</option>
														<option value="GA">Gabón</option>
														<option value="GM">Gambia</option>
														<option value="GE">Georgia</option>
														<option value="GH">Ghana</option>
														<option value="GI">Gibraltar</option>
														<option value="GD">Granada</option>
														<option value="GR">Grecia</option>
														<option value="GL">Groenlandia</option>
														<option value="GP">Guadalupe</option>
														<option value="GU">Guam</option>
														<option value="GT">Guatemala</option>
														<option value="GF">Guayana Francesa</option>
														<option value="GG">Guernsey</option>
														<option value="GN">Guinea</option>
														<option value="GQ">Guinea Ecuatorial</option>
														<option value="GW">Guinea-Bissau</option>
														<option value="GY">Guyana</option>
														<option value="HT">Haití</option>
														<option value="HN">Honduras</option>
														<option value="HK">Hong kong</option>
														<option value="HU">Hungría</option>
														<option value="IN">India</option>
														<option value="ID">Indonesia</option>
														<option value="IR">Irán</option>
														<option value="IQ">Irak</option>
														<option value="IE">Irlanda</option>
														<option value="BV">Isla Bouvet</option>
														<option value="IM">Isla de Man</option>
														<option value="CX">Isla de Navidad</option>
														<option value="NF">Isla Norfolk</option>
														<option value="IS">Islandia</option>
														<option value="BM">Islas Bermudas</option>
														<option value="KY">Islas Caimán</option>
														<option value="CC">Islas Cocos (Keeling)</option>
														<option value="CK">Islas Cook</option>
														<option value="AX">Islas de Åland</option>
														<option value="FO">Islas Feroe</option>
														<option value="GS">Islas Georgias del Sur y Sandwich del Sur</option>
														<option value="HM">Islas Heard y McDonald</option>
														<option value="MV">Islas Maldivas</option>
														<option value="FK">Islas Malvinas</option>
														<option value="MP">Islas Marianas del Norte</option>
														<option value="MH">Islas Marshall</option>
														<option value="PN">Islas Pitcairn</option>
														<option value="SB">Islas Salomón</option>
														<option value="TC">Islas Turcas y Caicos</option>
														<option value="UM">Islas Ultramarinas Menores de Estados Unidos</option>
														<option value="VG">Islas Vírgenes Británicas</option>
														<option value="VI">Islas Vírgenes de los Estados Unidos</option>
														<option value="IL">Israel</option>
														<option value="IT">Italia</option>
														<option value="JM">Jamaica</option>
														<option value="JP">Japón</option>
														<option value="JE">Jersey</option>
														<option value="JO">Jordania</option>
														<option value="KZ">Kazajistán</option>
														<option value="KE">Kenia</option>
														<option value="KG">Kirgizstán</option>
														<option value="KI">Kiribati</option>
														<option value="KW">Kuwait</option>
														<option value="LB">Líbano</option>
														<option value="LA">Laos</option>
														<option value="LS">Lesoto</option>
														<option value="LV">Letonia</option>
														<option value="LR">Liberia</option>
														<option value="LY">Libia</option>
														<option value="LI">Liechtenstein</option>
														<option value="LT">Lituania</option>
														<option value="LU">Luxemburgo</option>
														<option value="MX">México</option>
														<option value="MC">Mónaco</option>
														<option value="MO">Macao</option>
														<option value="MK">Macedônia</option>
														<option value="MG">Madagascar</option>
														<option value="MY">Malasia</option>
														<option value="MW">Malawi</option>
														<option value="ML">Mali</option>
														<option value="MT">Malta</option>
														<option value="MA">Marruecos</option>
														<option value="MQ">Martinica</option>
														<option value="MU">Mauricio</option>
														<option value="MR">Mauritania</option>
														<option value="YT">Mayotte</option>
														<option value="FM">Micronesia</option>
														<option value="MD">Moldavia</option>
														<option value="MN">Mongolia</option>
														<option value="ME">Montenegro</option>
														<option value="MS">Montserrat</option>
														<option value="MZ">Mozambique</option>
														<option value="NA">Namibia</option>
														<option value="NR">Nauru</option>
														<option value="NP">Nepal</option>
														<option value="NI">Nicaragua</option>
														<option value="NE">Niger</option>
														<option value="NG">Nigeria</option>
														<option value="NU">Niue</option>
														<option value="NO">Noruega</option>
														<option value="NC">Nueva Caledonia</option>
														<option value="NZ">Nueva Zelanda</option>
														<option value="OM">Omán</option>
														<option value="NL">Países Bajos</option>
														<option value="PK">Pakistán</option>
														<option value="PW">Palau</option>
														<option value="PS">Palestina</option>
														<option value="PA">Panamá</option>
														<option value="PG">Papúa Nueva Guinea</option>
														<option value="PY">Paraguay</option>
														<option value="PE">Perú</option>
														<option value="PF">Polinesia Francesa</option>
														<option value="PL">Polonia</option>
														<option value="PT">Portugal</option>
														<option value="PR">Puerto Rico</option>
														<option value="QA">Qatar</option>
														<option value="GB">Reino Unido</option>
														<option value="CF">República Centroafricana</option>
														<option value="CZ">República Checa</option>
														<option value="DO">República Dominicana</option>
														<option value="RE">Reunión</option>
														<option value="RW">Ruanda</option>
														<option value="RO">Rumanía</option>
														<option value="RU">Rusia</option>
														<option value="EH">Sahara Occidental</option>
														<option value="WS">Samoa</option>
														<option value="AS">Samoa Americana</option>
														<option value="BL">San Bartolomé</option>
														<option value="KN">San Cristóbal y Nieves</option>
														<option value="SM">San Marino</option>
														<option value="MF">San Martín (Francia)</option>
														<option value="PM">San Pedro y Miquelón</option>
														<option value="VC">San Vicente y las Granadinas</option>
														<option value="SH">Santa Elena</option>
														<option value="LC">Santa Lucía</option>
														<option value="ST">Santo Tomé y Príncipe</option>
														<option value="SN">Senegal</option>
														<option value="RS">Serbia</option>
														<option value="SC">Seychelles</option>
														<option value="SL">Sierra Leona</option>
														<option value="SG">Singapur</option>
														<option value="SY">Siria</option>
														<option value="SO">Somalia</option>
														<option value="LK">Sri lanka</option>
														<option value="ZA">Sudáfrica</option>
														<option value="SD">Sudán</option>
														<option value="SE">Suecia</option>
														<option value="CH">Suiza</option>
														<option value="SR">Surinám</option>
														<option value="SJ">Svalbard y Jan Mayen</option>
														<option value="SZ">Swazilandia</option>
														<option value="TJ">Tadjikistán</option>
														<option value="TH">Tailandia</option>
														<option value="TW">Taiwán</option>
														<option value="TZ">Tanzania</option>
														<option value="IO">Territorio Británico del Océano Índico</option>
														<option value="TF">Territorios Australes y Antárticas Franceses</option>
														<option value="TL">Timor Oriental</option>
														<option value="TG">Togo</option>
														<option value="TK">Tokelau</option>
														<option value="TO">Tonga</option>
														<option value="TT">Trinidad y Tobago</option>
														<option value="TN">Tunez</option>
														<option value="TM">Turkmenistán</option>
														<option value="TR">Turquía</option>
														<option value="TV">Tuvalu</option>
														<option value="UA">Ucrania</option>
														<option value="UG">Uganda</option>
														<option value="UY">Uruguay</option>
														<option value="UZ">Uzbekistán</option>
														<option value="VU">Vanuatu</option>
														<option value="VE">Venezuela</option>
														<option value="VN">Vietnam</option>
														<option value="WF">Wallis y Futuna</option>
														<option value="YE">Yemen</option>
														<option value="DJ">Yibuti</option>
														<option value="ZM">Zambia</option>
														<option value="ZW">Zimbabue</option>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nombre Comercial</label>
												<input type="text" name="nbcomercial" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre o codigo del producto">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Partida arancelaria</label>
												<input type="text" name="ptarancelaria" class="form-control" id="exampleInputPassword1" placeholder="Partida arancelaria">
											</div>
											
											<div class="form-group">
													<label for="exampleInputPassword1">Inportador</label>
													<input type="text" name="nbinportador" class="form-control" id="exampleInputPassword1" placeholder="Nombre del importador">
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
											<!--<a href="/muestra" type="button" class="btn btn-primary">Bucar</a>-->
											<button type="submit" class="btn btn-primary">Buscar</button>
										</form>
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