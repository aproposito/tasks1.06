<?php
session_start();

echo "El nombre de usuario persisntente durante la sesión y accesible entre páginas es: " . $_SESSION["username"] . ".<br><br>" ?? "No hay nombre guardado en la sesión.";

echo "La edad des usuario persisntente durante la sesión y accesible entre páginas es: " . $_SESSION["age"] . ".<br><br>";
