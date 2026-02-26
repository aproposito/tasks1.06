
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). El formulari ha de tenir com a action un document PHP. El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari mitjançant variables superglobals. Enregistra a més, alguns d’aquests valors dins de variables de sessió. -->

<body>
    <form action="process.php" method="POST">

        <label for="username">Nombre de usuario</label>
        <input id="username" type="text" name="username">
        <br>
        <br>
        <label> Edad
        <input id="age" type="number" name="age">
        </label>
        <br>
        <br>
        <label>Sexo
        <input type="radio" name="sex" value="Masculino"> Masculino
        <input type="radio" name="sex" value="Femenino"> Femenino
        </label>
        <br>
        <br>
        <label> Contraseña
        <input type="password" name="password">
        </label>
        <br>
        <br>

        <button type="submit">Enviar</button>


    </form>
</body>

</html>