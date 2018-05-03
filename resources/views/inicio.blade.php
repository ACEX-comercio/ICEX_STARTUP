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
                            <li class="nav-item active">
                                <a class="nav-link p-2 text-nav-moca" href="/inicio">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 text-nav-moca" href="/registro">REGISTRO</a>
                            </li>
						</ul>
					</div>
				</nav>
			</div>
		</section><!--END SECTION OF NAVBAR-->
    <div class="container-fluid d-flex justify-content-center flex-column align-items-center login">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{csrf_field()}}
              <img style="height: 50px;" src="images/logo-icex.png" class="rounded mx-auto d-block" alt="Responsive image">
                <h5 class="mb-0 text-center">INICIAR</h5>
                <hr>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Email/nick</label>
                    <div class="col-md-12">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Contraseña</label>

                      <div class="col-md-12">
                          <input id="password" type="password" class="form-control" name="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-12 col-md-offset-4">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                              </label>
                          </div>
                      </div>
                  </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Iniciar
                        </button>
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