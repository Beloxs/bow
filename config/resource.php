<?php

/**
 * Fichier de configuration de la classe réssource
 */

return (object) [

    // Liste des extensions valides en cas d'upload de fichier
    "upload_file_extension" => [ "jpg", "png", "jpeg", "ico", "git", "doc", "pdf" ],

    // Répertoire d'upload de fichier, Deux types sont valides
    "upload_directory" => dirname(__DIR__) . "/storage/upload",

    // FTP. configuration
    "ftp" => [
        "password" => "mot de passe ftp",
        "username" => "nom d'utilisateur ftp",
        "root" => "~",
        "tls" => false, // A `true` pour activer une connection sécurisé.
        "timeout" => 50 // Temps d'attente de connection
    ]
];