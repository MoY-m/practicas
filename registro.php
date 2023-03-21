<?php
error_reporting (0);
include "include/conecta.php";
include "accion.php";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container m-0 content-justify-center py-2">
    <div class="row text-center">
      <h1 class="text-success">Registro</h1>
    </div>

    <form id="Registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="POST">
      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
                  </div>
      </div>


      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" required>
                  </div>
      </div>


      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                        <textarea class="form-control" name="Direccion" placeholder="Direccion" required>Direccion</textarea>
                </div>
      </div>

      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="tel" name="Telefono" class="form-control" placeholder="55-97-37-91" required>
                  </div>
      </div>


      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="date" name="Fecha" class="form-control" required>
                  </div>
      </div>

      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="Email" name="Email" class="form-control" placeholder="Email" required>
                  </div>
      </div>

      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="submit" value="Registrar" name="btn" class="btn btn-success">
                  </div>
      </div>
</div>
</div>
</div>

</form>

</div>

    


<script src="js/bootstrap.min.js"></script>
</body>
</html>