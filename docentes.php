<?php $menu = "Institución";
include('includes/header.php'); ?>

<!--------------------- Titulo ------------------------------>
<div class="">
    <h4 class="center white-text"><b>DIRECTORIO DE DOCENTES</b></h4>
    <br>
</div>

<!--------------------- Docentes Directivos ------------------------------>

<div class="section">
    <h3 class="center white-text">Directivos Docentes</h3>
</div>
<br>

<div class="row white">
    <div class="col s12 opacity">
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

<div class="row white">
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

<div class="row white">
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

<div class="row white">
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

<?php include('includes/footer.php'); ?>