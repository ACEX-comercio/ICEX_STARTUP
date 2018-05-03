<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main-moca.css">
    <link rel="stylesheet" href="css/clinica.css">
    <title>login</title>
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
                                <a class="nav-link p-2 text-nav-moca" href="/./#pricing">PLANES Y PRODUCTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 text-nav-moca" href="/inicio">LOGIN</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link p-2 text-nav-moca" href="/registro">REGISTRO</a>
                            </li>
						</ul>
					</div>
				</nav>
			</div>
		</section><!--END SECTION OF NAVBAR-->
    <div class="container-fluid d-flex justify-content-center flex-column align-items-center login">
        <form action="{{ route('registro.store') }}" method="POST">
            {{ csrf_field() }}
              <img style="height: 50px;" src="images/logo-icex.png" class="rounded mx-auto d-block" alt="Responsive image">
                <h5 class="mb-0 text-center">REGISTRO</h5>
                <hr>
                <div class="row">
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="name" name="nombre"  class="form-control" id="recipient-name">
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Apellido:</label>
                        <input type="lastname" name="apellido" class="form-control" id="recipient-name">
                    </div>
                </div>

                <div class="row">
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Nick:</label>
                        <input type="text" name="nick" class="form-control" id="recipient-name">
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="email" name="email" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña:</label>
                    <input type="password" name="contra" class="form-control" id="recipient-name">
                </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">REGISTRAR</button>
                </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>