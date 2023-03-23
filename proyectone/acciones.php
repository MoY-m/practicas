<?php
include "conecta.php";
if (ISSET($_POST['btn5'])){
    $Nombre_Plantel = $conecta->real_escape_string($_POST['Nombre_Plantel']);
    $Clave_Plantel = $conecta->real_escape_string($_POST['Clave_Plantel']);
    $Direccion = $conecta->real_escape_string($_POST['Direccion']);
    $Telefono = $conecta->real_escape_string($_POST['Telefono']);
    $Responsable = $conecta->real_escape_string($_POST['Responsable']);
   
    if($Nombre_Plnatel== " " || $Clave_Plantel== " " || $Direccion== " " || $Telefono==" " || $Responsable==" "){
       $Alerta="Alguno de los datos estan vacios";
    }    
    else{                //esto tiene que estar igual a la base de datos //
        $registro="INSERT INTO plantel(Nombre_Plantel,Clave_Plantel,Direccion,Telefono,Responsable)VALUES('$Nombre_Plantel','$Clave_Plantel','$Direccion','$Telefono','$Responsable')";
        $registros=$conecta->query($registro);
        if($registros>0){
            echo "registro exitoso";
        }else{
            echo"Error al registrar";
        }
    }  
}
















?>