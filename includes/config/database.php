<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices');

    if (!$db) {
        echo "Error al conectar";
        exit;
    }

    return $db;

}