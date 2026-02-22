<?php $menu = "Institución";
$page_title = "IETSN | Docentes";

include('includes/header.php'); ?>

<div class="section ">
    <h3 class="center yellow-text p-0 m-0 pt"><b>DOCENTES</b></h3>
    <!--------------------- Docentes Directivos ------------------------------>
    <h4 class="center yellow-text" data-aos="fade-right" data-aos-duration="2500">Directivos Docentes</h4>
    <div class="">
        <div class="row" data-aos="fade-right" data-aos-duration="2500">
            <?php
            $linea = 0;
            $archivo = "./lista_docentes/directivos.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    if ($num >= 6) {
                        ?>
                        <!-- Cada docente ocupa 6 columnas en pantallas medianas o más -->
                        <div class="col s12 m4  offset-m1">
                            <div class="row valign-wrapper">
                                <div class="col s5">
                                    <div class="image-container" id="directivos-img">
                                        <div class="green-rectangle borde-dorado"></div>
                                        <img src="./images/docentes/<?php echo htmlspecialchars($docente[0]) ?>.png" data-aos="fade-right" data-aos-duration="2500">
                                    </div>
                                </div>
                                <div class="col s7">
                                    <h5 class="yellow-text left-align m-0"><b><?php echo htmlspecialchars($docente[1]) ?></b></h5>
                                    <h6 class="yellow-text left-align apellidos m-0">
                                        <b><?php echo htmlspecialchars($docente[2]) ?></b>
                                    </h6>
                                    <p class="white-text cargo m-0"><b><?php echo htmlspecialchars($docente[5]) ?></b></p>
                                    <p class="white-text email m-0"><b>E-mail: </b><?php echo htmlspecialchars($docente[4]) ?></p>
                                </div>
                            </div>
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
    </div>
</div>

<div class="section ">

    <!--------------------- Docentes Secundaria ------------------------------>
    <h4 class="center yellow-text" data-aos="fade-right" data-aos-duration="2500">Docentes Secundaria</h4>
    <div class="contenedor">
        <div class="row" data-aos="fade-right" data-aos-duration="2500">
            <br>
            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            // Verificar si el archivo existe y se puede abrir
            $archivo = "./lista_docentes/secundaria.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                // Recorremos fila por fila con el while
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    // Recorremos las columnas de esa fila
                    if ($num >= 6) { // Asegurarnos de que hay suficientes columnas
                        ?>
                        <div class="col s12 m4 ">
                            <div class="row  valign-wrapper">
                                <div class="col s4">
                                    <div class="image-container" data-aos="fade-right" data-aos-duration="2500">
                                        <!-- Rectángulo verde detrás de la imagen -->
                                        <div class="green-rectangle borde-dorado"></div>
                                        <img src="./images/docentes/<?php echo htmlspecialchars($docente[0]) ?>.png" data-aos="fade-right" data-aos-duration="2500">
                                    </div>
                                </div>
                                <div class="col s8">
                                    <!-- Nombres -->
                                    <h5 class="yellow-text left-align truncate m-0">
                                        <b><?php echo htmlspecialchars($docente[1]) ?></b>
                                    </h5>
                                    <h6 class="yellow-text left-align apellidos m-0">
                                        <b><?php echo htmlspecialchars($docente[2]) ?></b>
                                    </h6>
                                    <!-- Cargo -->
                                    <p class="white-text cargo" style="margin: 0;">
                                        <b><?php echo htmlspecialchars($docente[5]) ?></b>
                                    </p>
                                    <!-- Correo -->
                                    <p class="white-text email" style="margin: 0;"><b>E-mail:
                                        </b><?php echo htmlspecialchars($docente[4]) ?></p>

                                </div>
                            </div>
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
    </div>
</div>
<div class="section ">
    <!--------------------- Docentes Primaria ------------------------------>
    <h4 class="center yellow-text" data-aos="fade-right" data-aos-duration="2500">Docentes Primaria</h4>
    <div class="contenedor">
        <div class="row " data-aos="fade-right" data-aos-duration="2500">
            <br>
            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            // Verificar si el archivo existe y se puede abrir
            $archivo = "./lista_docentes/primaria.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                // Recorremos fila por fila con el while
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    // Recorremos las columnas de esa fila
                    if ($num >= 6) { // Asegurarnos de que hay suficientes columnas
                        ?>
                        <div class="col s12 m4">
                            <div class="row  valign-wrapper">
                                <div class="col s4">
                                    <div class="image-container" data-aos="fade-right" data-aos-duration="2500">
                                        <!-- Rectángulo verde detrás de la imagen -->
                                        <div class="green-rectangle borde-dorado"></div>
                                        <img src="./images/docentes/<?php echo htmlspecialchars($docente[0]) ?>.png" data-aos="fade-right" data-aos-duration="2500">
                                    </div>
                                </div>
                                <div class="col s8">
                                    <!-- Nombres -->
                                    <h5 class="yellow-text left-align truncate m-0">
                                        <b><?php echo htmlspecialchars($docente[1]) ?></b>
                                    </h5>
                                    <h6 class="yellow-text left-align apellidos m-0">
                                        <b><?php echo htmlspecialchars($docente[2]) ?></b>
                                    </h6>
                                    <!-- Cargo -->
                                    <p class="white-text cargo" style="margin: 0;">
                                        <b><?php echo htmlspecialchars($docente[5]) ?></b>
                                    </p>
                                    <!-- Correo -->
                                    <p class="white-text email" style="margin: 0;"><b>E-mail:
                                        </b><?php echo htmlspecialchars($docente[4]) ?></p>

                                </div>
                            </div>
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
    </div>
    <!--------------------- Docentes Sedes ------------------------------>
</div>
<div class="section ">

    <h4 class="center yellow-text" data-aos="fade-right" data-aos-duration="2500">Docentes Primaria</h4>
    <div class="contenedor">
        <div class="row " data-aos="fade-right" data-aos-duration="2500">
            <br>
            <!-- Leer archivo csv con php para crear dodentes-->
            <?php
            $linea = 0;
            // Verificar si el archivo existe y se puede abrir
            $archivo = "./lista_docentes/sedes.csv";
            if (($handle = fopen($archivo, "r")) !== FALSE) {
                // Recorremos fila por fila con el while
                while (($docente = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($docente);
                    $linea++;
                    // Recorremos las columnas de esa fila
                    if ($num >= 6) { // Asegurarnos de que hay suficientes columnas
                        ?>
                        <div class="col s12 m6">
                            <div class="row  valign-wrapper">
                                <div class="col s4">
                                    <div class="image-container" data-aos="fade-right" data-aos-duration="2500">
                                        <!-- Rectángulo verde detrás de la imagen -->
                                        <div class="green-rectangle borde-dorado"></div>
                                        <img src="./images/docentes/<?php echo htmlspecialchars($docente[0]) ?>.png" data-aos="fade-right" data-aos-duration="2500">
                                    </div>
                                </div>
                                <div class="col s8">
                                    <!-- Nombres -->
                                    <h5 class="yellow-text left-align truncate m-0">
                                        <b><?php echo htmlspecialchars($docente[1]) ?></b>
                                    </h5>
                                    <h6 class="yellow-text left-align apellidos m-0">
                                        <b><?php echo htmlspecialchars($docente[2]) ?></b>
                                    </h6>
                                    <!-- Cargo -->
                                    <p class="white-text cargo" style="margin: 0;">
                                        <b><?php echo htmlspecialchars($docente[5]) ?></b>
                                    </p>
                                    <!-- Correo -->
                                    <p class="white-text email" style="margin: 0;"><b>E-mail:
                                        </b><?php echo htmlspecialchars($docente[4]) ?></p>

                                </div>
                            </div>
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
    </div>
</div>

<script src="js/materialize.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
    });

    // JavaScript para cambiar el fondo dependiendo de la sección visible
    document.addEventListener("scroll", function () {
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
                        document.body.style.backgroundImage = "url('./images/parallax/10.jpg')";
                        break;
                    case 1:
                        document.body.style.backgroundImage = "url('./images/parallax/17.jpg')";
                        break;
                    case 2:
                        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
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