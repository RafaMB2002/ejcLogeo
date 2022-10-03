<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="../controlador/procesaAlta.php" method="post">
            <label for="">Usuario</label>
            <input type="text" name="user"><br><br>
            <label for="">Contraseña</label>
            <input type="password" name="pass"><br><br>
            <label for="">Repita la contraseña</label>
            <input type="password" name="otraPass"><br><br>
            <label for="btnBasico">Basico</label>
            <input type="radio" name="rol" value="basico" checked>
            <label for="btnAdmin">Admin</label>
            <input type="radio" name="rol" value="admin"><br><br>
            <input type="submit" value="Crear nuevo">
        </form>
    </div>
    
</body>
</html>