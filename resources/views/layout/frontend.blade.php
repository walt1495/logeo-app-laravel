<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link href="css/fontawesome-free-6.5.2-web/css/all.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
<div class="login-area">
  <div class="bg-image">
    <div class="login-signup">
      <div class="container">
        <div class="login-header">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="login-logo">
                <i class="fa-solid fa-user"></i>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="login-details">
                <ul class="nav nav-tabs navbar-right">
                  <li><a data-toggle="tab" href="#register">Register</a></li>
                  <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="tab-content">
          <div id="register" class="tab-pane">
            <form class="login-inner" action="{{route("registrar")}}" method="POST">
              {{ csrf_field() }}
              <div class="title">
                <h1><span>Registrate</span></h1>
              </div>
              <div class="login-form">
                <div class="form-details">
                  <label class="nombre">
                    <input type="text" name="nombre" placeholder="Nombre Completo" id="nombre" value="{{ old('nombre')}}">
                  </label>
                  <label class="mail">
                    <input type="email" name="mail" placeholder="Email" id="mail" value="{{old('mail')}}">
                  </label>
                  <label class="telefono">
                    <input type="text" name="telefono" placeholder="Número de Teléfono" id="telefono" value="{{old('telefono')}}">
                  </label>
                  <label class="direccion">
                    <input type="text" name="direccion" placeholder="Ingresar Dirección" id="direccion" value="{{old('direccion')}}">
                  </label>
                  <label class="pass">
                    <input type="password" name="contrasena" placeholder="Contraseña" id="password">
                  </label>
                  <label class="pass">
                    <input type="password" name="contrasena_confirmation" placeholder="Confirmar Contraseña" id="password">
                  </label>
                </div>
                <button type="submit" class="form-btn" onsubmit="">Registrarse <i class="fa-regular fa-id-card"></i></button>
              </div>
            </form>
          </div>
          <div id="login" class="tab-pane fade in active">
            <form class="login-inner" action="{{route("logeo")}}" method="POST">
              {{ csrf_field() }}
              <div class="title">
                <h1><span>Login</span></h1>
              </div>
              <div class="login-form">
                <div class="form-details">
                  <label class="user">
                    <input type="text" name="username" placeholder="Username" id="username">
                  </label>
                  <label class="pass">
                    <input type="password" name="passsword" placeholder="Password" id="password">
                  </label>
                </div>
                <button type="submit" class="form-btn" onsubmit="">Ingresar <i class="fa-solid fa-right-to-bracket"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
  <footer>
    <p>
      Created with <i class="fa fa-heart"></i> by
      <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
      - Read how I created this and how you can join the challenge
      <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
    </p>
  </footer>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  
</body>
</html>