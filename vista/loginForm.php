<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>
    <form action="../controlador/procesaLogin.php" method="post">
        <label for="user">Usuario&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="user" id="user"><br><br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>