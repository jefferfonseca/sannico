<?php
include 'cx.php';
$Id = $_POST['Id'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Cel = $_POST['Cel'];
$Edad = $_POST['Edad'];
$TipoSangre = $_POST['TipoSangre'];
$RH = $_POST['RH'];
$Email = $_POST['Email'];
$pw = $_POST['pw'];

function select()
{
    $cx = cx();
    $query = 'SELECT * FROM registro;';
    $data = $cx->query($query);

    return $data;
}

function insert($Nombres, $Apellidos, $Cel,  $Edad,  $TipoSangre,  $RH,  $Email, $pw)
{

    $cx = cx();
    $query = "INSERT INTO registro (Nombres, Apellidos, Cel,  Edad,  TipoSangre,  RH,  Email, pw) 
                           VALUES('$Nombres' , ' $Apellidos' , '$Cel' ,  '$Edad' ,  '$TipoSangre' ,  '$RH' ,  '$Email' , '$pw')";
    if ($cx->query($query) == true) {
        return true;
    } else {
        return false;
    }
}


function update($Id, $Nombres, $Apellidos,  $Cel, $Edad,  $TipoSangre,  $RH,  $Email, $pw)
{
    $cx = cx();
    $query = "UPDATE registro set
    Nombres = $Nombres,
    Apellidos = $Apellidos,
    Cel =  $Cel,
    Edad =  $Edad, 
    TipoSangre = $TipoSangre,
     RH =  $RH,
    Email = $Email,
    pw = $pw
    Where id = $Id;";

    if ($cx->query($query) == true) {
        return true;
    } else {
        return false;
    }
}

function delete($Id)
{


    $cx = cx();
    $query = "DELETE FROM registro WHERE Id = $Id;";


    if ($cx->query($query) == true) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['crud'])) {
    switch (($_POST['crud'])) {

        case 'insert':
            insert($Nombres, $Apellidos,  $Cel, $Edad,  $TipoSangre,  $RH,  $Email, $pw);

            break;

        case 'update':
            update($Id, $Nombres, $Apellidos,  $Cel, $Edad,  $TipoSangre,  $RH,  $Email, $pw);

            break;

        case 'delete':
            delete($Id);


            break;
    }
}
