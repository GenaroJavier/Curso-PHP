<?php 
  require 'conexion.php'; 

  if($_POST) {
    $buscarCorreo = $_POST["txtCorreo"]; 
    $buscarPass = $_POST["txtPass"]; 

    $conectar = new Conexion(); 
    $conectar->RealizarConexion(); 
    $conectar->BuscarUsuario($buscarCorreo, $buscarPass); 
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
  </head>
  <body>
    <br />
    <br />

    <!--Bootstrap al usar grid trabaja con 12 columnas -->
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-body">
              <h4 class="card-title">Iniciar Sesión</h4>
              <form action="login.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo</label>
                  <input type="email" class="form-control" name="txtCorreo" id="exampleInputEmail1" aria-describedby="emailHelp"/>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="txtPass"/>
                </div>

                <button type="submit" class="btn btn-primary">Ingresar</button>

              </form>
            </div>
          </div>
        </div>

        <div class="col-md-4"></div>
      </div>
    </div>
  </body>
</html>