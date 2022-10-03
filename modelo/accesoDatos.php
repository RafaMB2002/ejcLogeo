<?php
    //Funcion para comprobar si un usuario exsiste
    function comprobarUsuario($cadena){
        $archivo = file_get_contents("../modelo/datos.csv");
        $array = explode("...", $archivo);
        $variable = false;
        //FUNCION
        for($i=0; $i<count($array); $i++){
            if($array[$i]==$cadena){
                $variable=true;
                break;
            }
        }
        return $variable;
    }

    function comprobarUsuario2($cadena){
        $datos = explode(";", $cadena);
        var_dump($datos);
        $usuarios = obtenerUsuarios();
        var_dump($usuarios);
        $variable = false;

        for ($i=0; $i <count($usuarios); $i++) { 
            if ($usuarios[$i]==$datos) {
                $variable=true;
                break;
            }
        }
        return $variable;
    }

    //Funcion para añadir un nuevo usuario
    function creaUsuario($cadena2){
        $actual = file_get_contents("../modelo/datos.csv");
        $actual .= "...".$cadena2;
        file_put_contents("../modelo/datos.csv", $actual);
    }

    //Funcion para obtener usuarios
    function obtenerUsuarios(){
        $arrayDeArray[]="";
        $cadenaUsers = file_get_contents("../modelo/datos.csv");
        $arrayUsers = explode("...", $cadenaUsers);
        for ($i=0; $i<count($arrayUsers); $i++) { 
            $array = explode(";", $arrayUsers[$i]);
            array_push($arrayDeArray, $array);
        }
        unset($arrayDeArray[0]);
        unset($arrayDeArray[count($arrayDeArray)]);
        
        return $arrayDeArray;
    }
?>