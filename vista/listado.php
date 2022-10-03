<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilosListado.css">
    <title>Document</title>
</head>
<body>
    <div style="margin-top: 0em">
        <div style="display: inline-block; float:left; margin-top: 1em; margin-left: 1em">
            <?php
            include("../modelo/accesoDatos.php");
            include("../vista/funciones/funciones.php");
            $array = obtenerUsuarios();
            pintaListado($array);
            ?>
        </div>
        
        <div style="display: inline-block; margin-left: 1em; margin-top: 1em; border: 2px solid black; background-color: #CBCBCB; font-weight:bold;">
            <a href="newForm.php">Nuevo usuario</a>
        </div>
    </div>
    
    
</body>
</html>