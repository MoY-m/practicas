<?php
include "conecta.php";
if (ISSET($_POST['btn'])){
    $Nombre = $conecta->real_escape_string($_POST['Nombre']);
    $Apellidos = $conecta->real_escape_string($_POST['Apellidos']);
    $Direccion = $conecta->real_escape_string($_POST['Direccion']);
    $Telefono = $conecta->real_escape_string($_POST['Telefono']);
    $Fecha = $conecta->real_escape_string($_POST['Fecha']);
    $Email = $conecta->real_escape_string($_POST['Email']);
    if($Nombre== " " || $Apellidos== " " || $Direccion== " " || $Telefono==" " || $Fechanac==" " || $Email== " "){
       $Alerta="Alguno de los datos estan vacios";
    }    
    else{                //esto tiene que estar igual a la base de datos //
        $registro="INSERT INTO usuarios(Nombre,Apellidos,Direccion,Telefono,Fechanac,Email)VALUES('$Nombre','$Apellidos','$Direccion','$Telefono','$Fechanac','$Email')";
        $registros=$conecta->query($registro);
        if($registros>0){
            echo "registro exitoso";
        }else{
            echo"Error al registrar ";
        }
    }  
}
















?>