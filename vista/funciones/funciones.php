<?php
function pintaListado($usuarios){

    echo "<table style='border:1px solid black; border-spacing: 0; text-align:center'><tr style='font-weight:bold; font-size:1.5em;'><td style='border:1px solid black; width:6em'>Usuario</td><td style='border:1px solid black; width:6em'>Contraseña</td><td style='border:1px solid black; width:3em'>Rol</td></tr>";
    for ($i=1; $i <count($usuarios); $i++) { 
        echo "<tr><td style='border:1px solid black'>".$usuarios[$i][0]."</td><td style='border:1px solid black'>".$usuarios[$i][1]."</td><td style='border:1px solid black'>".$usuarios[$i][2]."</td></tr>";
    }
    echo "</table>";
}
?>

