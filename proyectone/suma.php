<?php 
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