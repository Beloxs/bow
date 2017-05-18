<?php
/**
 | Le code ci-dessous sera un jeu de middleware qui vous permettra de mettre en place un firewall
 | simple et robuste
 */

use \Bow\Application\Actionner;

if (request()->isPost() || request()->isPut()) {
    $middleware = [
        'firewall' => ['csrf']
    ];
    Actionner::call($middleware, request()->getParameters(), config()->getNamespace());
}
