<?php
include "conecta.php";
if (ISSET($_POST['btn10'])){
$Nombrelugar = $conecta->real_escape_string($_POST['Nombrelugar']);
$Descripcion = $conecta->real_escape_string($_POST['Descripcion']);
$Telefono = $conecta->real_escape_string($_POST['Telefono']);
$Email = $conecta->real_escape_string($_POST['Email']);
$Facebook = $conecta->real_escape_string($_POST['Facebook']);
$Horario = $conecta->real_escape_string($_POST['Horario']);


if($Nombrelugar== " " || $Descripcion== " " || $Telefono== " " || $Email== " " || $Facebook== " " || $Horario== " "){
    $Alerta="Alguno de los campos esta vacio";
}
else{
    $registro="INSERT INTO lugar(Nombrelugar,Descripcion,Telefono,Email,Facebook,Horario) VALUES ('{$Nombrelugar}','{$Descripcion}','{$Telefono}','{$Email}','{$Facebook}','{$Horario}')";

        $registros= $conecta->query($registro);
    if($registros>0){
        header ('Location: practica.php');
        echo "registro exitoso";
    }else{
        echo "Eror al registrarse";
    }
}

}

?>