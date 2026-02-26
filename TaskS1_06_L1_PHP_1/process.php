<?php
declare(strict_types=1);
session_start();

$_SERVER['REQUEST_METHOD'] === "POST" or die("Access denied. Use POST Method");

$username = $_POST["username"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["age"] = $age;

echo "El nombre de usuario es: " . $username .  "<br>";
echo "La edad del usuario es: " . $age . "<br>";
echo "El sexo del usuario es: " . $sex . "<br>";
echo "La contraseña es: " . "Más quisieras.... <br><br>";

//echo "El  nombre de usuario, guarado en variable de sesión es: " . $_SESSION["username"];
