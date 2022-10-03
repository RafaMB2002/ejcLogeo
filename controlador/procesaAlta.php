<?php
include("../modelo/accesoDatos.php");

    $usuario = $_POST["user"];
    $password = $_POST["pass"];
    $pass2 = $_POST["otraPass"];
    $rol = $_POST["rol"];
   
    $cadena = $usuario.";".$password.";".$rol;

    if($password == $pass2){
        creaUsuario($cadena);
        print "Usuario creado correctamente";
    }else {
        print "Vuelva a repetir la contraseña";
    }

?>