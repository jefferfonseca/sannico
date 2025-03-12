<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sitio Web Oficial de la Institución Educativa Técnica San Nicolás">
    <title>IET San Nicolás - Tuta</title>
    <link rel="icon" href="./images/Escudo.png" type="image/png">
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="navbar ">
            <div class="row  center valign-wrapper ">
                <div class="col s12 m4">
                    <img src="./images/Escudo.png" alt="sanicolas" height="90px">
                </div>
                <div class="col s12 m4 center">
                    <h5 class="center m-0">Institución Educativa Técnica<br>San Nicolás - Tuta</h5>
                    <p class="center m-0">"Queremos y podemos"</p>
                </div>
                <div class="col s12 m4">
                    <img src="./images/Escudo-tuta.png" alt="tuta" height="90px">
                </div>
            </div>
        </div>
        <!-- Menú de navegación -->
        <nav id="myHeader" class="nav z-depth-0">
            <div class="nav-wrapper">
                <a href="#" id="logo" class="hide">
                    <img style="padding: 10px;" src="./images/Escudo.png" alt="sannicolas" height="100%">
                </a>
                <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Inicio</a></li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="institucion">Institución
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li><a href="live.php" target="_blank">Radio</a></li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="esp">Especialidades
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li><a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank">Sistema de Notas</a></li>
                    <li><a href="contacto.php">Contáctenos</a></li>
                </ul>
            </div>
        </nav>
        <!-- Submenús -->
        <ul id="institucion" class="dropdown-content">
            <li><a href="nosotros.php">Reseña Histórica</a></li>
            <li><a href="simbolos.php">Símbolos Institucionales</a></li>
            <li><a href="sedes.php">Sedes</a></li>
            <li><a href="docentes.php">Docentes</a></li>
            <li><a href="gobierno-escolar.php">Gobierno Escolar</a></li>
            <li><a href="proyectos.php">Proyectos</a></li>
            <li><a href="#" target="_blank">Psicoorientación</a></li>
        </ul>
        <ul id="esp" class="dropdown-content">
            <li><a href="redes.php">Redes y Sistemas</a></li>
            <li><a href="salud.php">Salud</a></li>
            <li><a href="turismo.php">Turismo</a></li>
        </ul>
        <!-- Menú lateral responsivo -->
        <ul class="sidenav" id="menu-responsive">
            <li><a href="index.php">Inicio</a></li>
            <li>
                <a href="#" class="dropdown-trigger" data-target="institucion-responsive">Institución
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li><a href="live.php" target="_blank">Radio</a></li>
            <li>
                <a href="#" class="dropdown-trigger" data-target="esp-responsive">Especialidades
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li><a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank">Sistema de Notas</a></li>
            <li><a href="contacto.php">Contáctenos</a></li>
        </ul>
        </div>
    </header>