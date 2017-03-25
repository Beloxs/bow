<?php
require_once __DIR__ . "/../vendor/autoload.php";

/*-------------------------------------------------------
| chargement des configurations
| chargement des principaux fichiers de l'application bow
*/

use Bow\Application\Application;



// Création de l'application
$app = Application::make(config(), request(), response());



// Chargement des routeurs.
require __DIR__ . "/../app/main.php";



// Lancement de l'application
$app->run();