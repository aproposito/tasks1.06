<?php
declare(strict_types=1);

require_once __DIR__ . "/DidacticResources.php";

$resources1 = new DidacticResources(Topic::PHP, Type::Video, "Enums en PHP", "www.videosphp.com/enums.mp4");
$resources2 = new DidacticResources(Topic::Laravel, Type::WebArticle, "100 things you always want to know but you never dare to...", "www.lavarel_cours.com/webarticles/art1");


echo $resources1 . "<br><br>";
echo $resources2. "<br><br>";