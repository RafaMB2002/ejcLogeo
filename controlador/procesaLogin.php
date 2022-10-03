<?php
include("../modelo/accesoDatos.php");
    $usuario = $_POST["user"];
    $password = $_POST["pass"];
    $cadena = $usuario.";".$password."";

    if(comprobarUsuario($cadena)){
        print "usuario correcto";
    }else{
        print "Contraseña o usuario incorrecto";
    }
?>