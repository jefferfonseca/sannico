<?php $menu = "Institución";
include('includes/header.php'); ?>

<div class="section p-0 m-0">
<h3 class="center white-text"><b>DOCENTES</b></h3>
<!--------------------- Docentes Directivos ------------------------------>
<h4 class="center white-text">Directivos Docentes</h4>
        <div class="row">
            <br>
            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            // Verificar si el archivo existe y se puede abrir
            $archivo = "./lista_docentes/directivos.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                // Recorremos fila por fila con el while
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    // Recorremos las columnas de esa fila
                    if ($num >= 6) { // Asegurarnos de que hay suficientes columnas
            ?>
                        <div class="col s12 m6 center">
                            <img src="./images/<?php echo htmlspecialchars($docente[0]) ?>.png" alt="" width="auto" height="140">
                            <h5 class="green-text "><b><?php echo htmlspecialchars($docente[1] . ' ' . $docente[2]) ?></b></h5>
                            <p class="black-text center" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo htmlspecialchars($docente[3]) ?>" target="_blank">+57<?php echo htmlspecialchars($docente[3]) ?></a></p>
                            <p class="black-text center" style="margin: 0;"><b>E-mail: </b><?php echo htmlspecialchars($docente[4]) ?></p>
                            <p class="black-text center" style="margin: 0;"><b>Cargo: </b><?php echo htmlspecialchars($docente[5]) ?></p>
                            <br><br><br>
                        </div>
            <?php
                    }
                }
                // Cerramos el archivo
                fclose($handle);
            } else {
                echo "<p>No se pudo abrir el archivo $archivo.</p>";
            }
            ?>
        </div>
        <br>
    </div>
</div>

<!--------------------- Docentes Secundaria ------------------------------>
<div class="section">
    <h3 class="center white-text">Docentes Secundaria</h3>
</div>
<br>

<div class="row">
    <div class="col s12 opacity">
        <div class="row">
            <br>
            <?php
            $linea = 0;
            $archivo = "./lista_docentes/secundaria.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    if ($num >= 6) {
            ?>
                        <div class="col s12 m6 l4 center">
                            <img src="./images/<?php echo htmlspecialchars($docente[0]) ?>.png" alt="" width="auto" height="140">
                            <h5 class="green-text "><b><?php echo htmlspecialchars($docente[1] . ' ' . $docente[2]) ?></b></h5>
                            <p class="black-text center" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo htmlspecialchars($docente[3]) ?>" target="_blank">+57<?php echo htmlspecialchars($docente[3]) ?></a></p>
                            <p class="black-text center" style="margin: 0;"><b>E-mail: </b><?php echo htmlspecialchars($docente[4]) ?></p>
                            <p class="black-text center" style="margin: 0;"><b>Área: </b><?php echo htmlspecialchars($docente[5]) ?></p>
                            <br><br><br>
                        </div>
            <?php
                    }
                }
                fclose($handle);
            } else {
                echo "<p>No se pudo abrir el archivo $archivo.</p>";
            }
            ?>
        </div>
        <br>
    </div>
</div>

<!--------------------- Docentes Primaria ------------------------------>
<div class="section">
    <h3 class="center white-text">Docentes Primaria</h3>
</div>
<br>

<div class="row">
    <div class="col s12 opacity">
    <div class="row">
            <br>
            <?php
            $linea = 0;
            $archivo = "./lista_docentes/primaria.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    if ($num >= 6) {
            ?>
                        <div class="col s12 m6 l4 center">
                            <img src="./images/<?php echo htmlspecialchars($docente[0]) ?>.png" alt="" width="auto" height="140">
                            <h5 class="green-text "><b><?php echo htmlspecialchars($docente[1] . ' ' . $docente[2]) ?></b></h5>
                            <p class="black-text center" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo htmlspecialchars($docente[3]) ?>" target="_blank">+57<?php echo htmlspecialchars($docente[3]) ?></a></p>
                            <p class="black-text center" style="margin: 0;"><b>E-mail: </b><?php echo htmlspecialchars($docente[4]) ?></p>
                            <p class="black-text center" style="margin: 0;"><b>Área: </b><?php echo htmlspecialchars($docente[5]) ?></p>
                            <br><br><br>
                        </div>
            <?php
                    }
                }
                fclose($handle);
            } else {
                echo "<p>No se pudo abrir el archivo $archivo.</p>";
            }
            ?>
        </div>
        <br>
    </div>
</div>

<!--------------------- Docentes Sedes ------------------------------>
<div class="section">
    <h3 class="center white-text">Docentes Sedes</h3>
</div>
<br>

<div class="row">
    <div class="col s12 opacity">
    <div class="row">
            <br>
            <?php
            $linea = 0;
            $archivo = "./lista_docentes/sedes.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    if ($num >= 6) {
            ?>
                        <div class="col s12 m6 l3 center">
                            <img src="./images/<?php echo htmlspecialchars($docente[0]) ?>.png" alt="" width="auto" height="140">
                            <h5 class="green-text "><b><?php echo htmlspecialchars($docente[1] . ' ' . $docente[2]) ?></b></h5>
                            <p class="black-text center" style="margin: 0;"><b>Celular: </b><a href="https://wa.me/+57<?php echo htmlspecialchars($docente[3]) ?>" target="_blank">+57<?php echo htmlspecialchars($docente[3]) ?></a></p>
                            <p class="black-text center" style="margin: 0;"><b>E-mail: </b><?php echo htmlspecialchars($docente[4]) ?></p>
                            <p class="black-text center" style="margin: 0;"><b>Área: </b><?php echo htmlspecialchars($docente[5]) ?></p>
                            <br><br><br>
                        </div>
            <?php
                    }
                }
                fclose($handle);
            } else {
                echo "<p>No se pudo abrir el archivo $archivo.</p>";
            }
            ?>
        </div>
        <br>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function() {
        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
    });

    // JavaScript para cambiar el fondo dependiendo de la sección visible
    document.addEventListener("scroll", function() {
        const sections = document.querySelectorAll(".section");
        const scrollPosition = window.scrollY;

        sections.forEach((section, index) => {
            const sectionTop = section.offsetTop - 20;
            const sectionHeight = section.offsetHeight;

            if (
                scrollPosition >= sectionTop &&
                scrollPosition < sectionTop + sectionHeight
            ) {
                switch (index) {
                    case 0:
                        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
                        break;
                    case 1:
                        document.body.style.backgroundImage = "url('./images/parallax/10.jpg')";
                        break;
                    case 2:
                        document.body.style.backgroundImage = "url('./images/parallax/17.jpg')";
                        break;
                    case 3:
                        document.body.style.backgroundImage = "url('./images/parallax/6.jpg')";
                        break;
                    default:
                        break;
                }
            }
        });
    });
</script>

<?php include('includes/footer.php'); ?>