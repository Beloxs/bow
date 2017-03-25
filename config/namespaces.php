<?php
return [

    // Liste de namespace valide de l'applicareqtion
    'namespace' => [
        'controller' => 'App\\controllers',
        'middleware' => 'App\\middleware',
        'app'        => 'App\\Autoload',
    ],

    // Liste de middleware
    // * ici quand vous générez un middleware
    // * il faudra l'enregistré dans ce tableau avec le même de nom de classe
    // e.g: ['VerifyToken', 'autre nom de middleware']
    'middlewares' => [
        'crsf' => 'VerifyToken',
        // 'Autre middleware'
    ],

    // autoload de l'application
    'autoload' => __DIR__ . '/autoload'
];