<?php

function cx()
{
    $server = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'plataforma';

    //puente
    $cx = new mysqli($server, $user, $pw, $db);

    if ($cx->connect_error) {
        die("conexion fallida: " . $cx->connect_error);
    }

    return $cx;
}
