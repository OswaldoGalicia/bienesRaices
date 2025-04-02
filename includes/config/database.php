<?php


function conectarBD() : mysqli {
    $db = mysqli_connect('localhost', 'root', '428655', 'bienesRaices');
    if(!$db) {
        echo "Error: no se pudo conectar";
        exit;
    }
    return $db;
}