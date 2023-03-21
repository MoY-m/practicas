<?php 
error_reporting (0);
if(isset($_POST['btnsuma'])){ 
$numero1=$_POST["caja1"];
$numero2=$_POST["caja2"];

$numero1 = (int) $numero1;
$numero2 = (int) $numero2;

$resultado = $numero1 + $numero2;
$va = $resultado;

}else{
    echo "no existen valores";
}

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
    
<div class="col-lg-12">
    <div class="row">
        <h1 class="text-center">Suma</h1>
    </div>
</div>
<div class="row">

<form action="<?php echo $SERVER ['PHP_SELF'];?>" method="POST">

<input type="text" name="caja1" required> +

<input type="text" name="caja2" required>=

<input type="text" name="resultado" value="<?php echo $va?>">
 
<input type="submit" name="btnsuma" value="calcular">
</form>

</div>
<script src="js/bootstrap.min.css"></script>
</body>
</html>