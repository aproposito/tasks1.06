<?php
//métodos mágicos: __DIR__ / __construct / __toString //

declare(strict_types=1);

require_once __DIR__ . "/src/Talks.php";
require_once __DIR__ . "/src/Workshops.php";
require_once __DIR__ . "/src/Conferences.php";

$talk1 = new Talks("Transformando S2P a través de IA y Tecnologías Emergente", 60, "March 2nd");
$workshop1 = new Workshops("Decodificando el Lujo: El Desafío de Datos de LVMH", 60, "March 2nd");
$conference1 = new Conferences ("Camino hacia la AGI: un camino con curvas", 30, "March 2nd");

echo $talk1 .  "<br><br>";
echo $workshop1 . "<br><br>";
echo $conference1 . "<br>";
