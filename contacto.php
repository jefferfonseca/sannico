<?php
$menu = "Contacto";
$css = "contacto.css"; // CSS específico

// Meta tags específicos
$page_title = "IETSN | Contáctenos - Tuta, Boyacá";
$page_description = "Ponte en contacto con la Institución Educativa Técnica San Nicolás. Envíanos tus consultas, sugerencias o solicitudes de información.";
$page_keywords = "contacto IET San Nicolás, información colegio Tuta, escribir IET San Nicolás";
$page_image = "https://ietsannicolas.edu.co/images/Escudo.png";

include('includes/header.php');

// ============================================
// PROCESAMIENTO DEL FORMULARIO
// ============================================
$mensaje_enviado = false;
$mensaje_error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar_contacto'])) {

    // Sanitizar datos
    $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telefono = filter_var(trim($_POST['telefono']), FILTER_SANITIZE_STRING);
    $asunto = filter_var(trim($_POST['asunto']), FILTER_SANITIZE_STRING);
    $mensaje = filter_var(trim($_POST['mensaje']), FILTER_SANITIZE_STRING);

    // Validar campos
    if (!empty($nombre) && !empty($email) && !empty($mensaje) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Configurar email
        $para = "tuta_colsannicolas@hotmail.com";
        $asunto_email = "Contacto Web: " . $asunto;

        // Crear mensaje HTML
        $mensaje_html = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #056245; color: white; padding: 20px; text-align: center; }
                .content { background: #f4f4f4; padding: 20px; }
                .info-item { margin: 15px 0; padding: 10px; background: white; border-left: 4px solid #ffc400; }
                .label { font-weight: bold; color: #056245; }
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Nuevo Mensaje de Contacto</h2>
                    <p>IET San Nicolás - Página Web</p>
                </div>
                <div class='content'>
                    <div class='info-item'>
                        <span class='label'>Nombre:</span><br>
                        " . htmlspecialchars($nombre) . "
                    </div>
                    <div class='info-item'>
                        <span class='label'>Email:</span><br>
                        " . htmlspecialchars($email) . "
                    </div>
                    <div class='info-item'>
                        <span class='label'>Teléfono:</span><br>
                        " . htmlspecialchars($telefono) . "
                    </div>
                    <div class='info-item'>
                        <span class='label'>Asunto:</span><br>
                        " . htmlspecialchars($asunto) . "
                    </div>
                    <div class='info-item'>
                        <span class='label'>Mensaje:</span><br>
                        " . nl2br(htmlspecialchars($mensaje)) . "
                    </div>
                </div>
                <div class='footer'>
                    <p>Este mensaje fue enviado desde el formulario de contacto de www.ietsannicolas.edu.co</p>
                    <p>Fecha: " . date('d/m/Y H:i:s') . "</p>
                </div>
            </div>
        </body>
        </html>
        ";

        // Headers para HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: IET San Nicolás Web <noreply@ietsannicolas.edu.co>" . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        // Enviar email
        if (mail($para, $asunto_email, $mensaje_html, $headers)) {
            $mensaje_enviado = true;
        } else {
            $mensaje_error = true;
        }

    } else {
        $mensaje_error = true;
    }
}
?>

<!-- ============================================
     PÁGINA: CONTACTO
     ============================================ -->
<main id="main-content" class="contacto-page" role="main">

    <!-- ============================================
         HEADER
         ============================================ -->
    <section class="contacto-header">
        <div class="container">
            <h1 class="titulo-principal yellow-text center" data-aos="fade-down">
                <i class="material-icons large">email</i>
                CONTÁCTENOS
            </h1>
            <p class="subtitulo-pagina white-text center" data-aos="fade-up" data-aos-delay="200">
                Estamos aquí para atenderte. Envíanos tu mensaje.
            </p>
        </div>
    </section>

    <!-- ============================================
         CONTENIDO PRINCIPAL
         ============================================ -->
    <section class="contacto-content">
        <div class="container">
            <div class="row">

                <!-- COLUMNA 1: INFORMACIÓN DE CONTACTO -->
                <div class="col s12 l5" data-aos="fade-right">
                    <div class="info-contacto-card">
                        <!-- Imagen -->
                        <div class="contacto-image-wrapper">
                            <img src="images/Contacto.jpg" alt="Institución Educativa Técnica San Nicolás"
                                class="contacto-image">
                            <div class="image-overlay">
                                <i class="material-icons">location_on</i>
                            </div>
                        </div>

                        <!-- Título -->
                        <h2 class="info-titulo yellow-text">
                            <i class="material-icons">contact_support</i>
                            Información de Contacto
                        </h2>

                        <!-- Items de contacto -->
                        <div class="contacto-items">

                            <div class="contacto-item">
                                <i class="material-icons">email</i>
                                <div class="item-content">
                                    <span class="item-label">Correo Electrónico</span>
                                    <a href="mailto:tuta_colsannicolas@hotmail.com" class="item-link">
                                        tuta_colsannicolas@hotmail.com
                                    </a>
                                </div>
                            </div>

                            <div class="contacto-item">
                                <i class="material-icons">phone</i>
                                <div class="item-content">
                                    <span class="item-label">Teléfono</span>
                                    <a href="tel:+573212222082" class="item-link">
                                        (+57) 321 222 2082
                                    </a>
                                </div>
                            </div>

                            <div class="contacto-item">
                                <i class="material-icons">chat</i>
                                <div class="item-content">
                                    <span class="item-label">WhatsApp</span>
                                    <a href="https://wa.me/573212222082" target="_blank" rel="noopener noreferrer"
                                        class="item-link">
                                        (+57) 321 222 2082
                                    </a>
                                </div>
                            </div>

                            <div class="contacto-item">
                                <i class="material-icons">thumb_up</i>
                                <div class="item-content">
                                    <span class="item-label">Facebook</span>
                                    <a href="https://www.facebook.com/ietsannicolas" target="_blank"
                                        rel="noopener noreferrer" class="item-link">
                                        IET San Nicolás Tuta
                                    </a>
                                </div>
                            </div>

                            <div class="contacto-item">
                                <i class="material-icons">location_on</i>
                                <div class="item-content">
                                    <span class="item-label">Dirección</span>
                                    <p class="item-text">Vda. El Arenal - Tuta, Boyacá</p>
                                </div>
                            </div>

                        </div>

                        <!-- Horario -->
                        <div class="horario-box">
                            <h3>
                                <i class="material-icons">schedule</i>
                                Horario de Atención
                            </h3>
                            <p><strong>Lunes a Viernes:</strong> 7:00 AM - 3:00 PM</p>
                            <p><strong>Sábados y Domingos:</strong> Cerrado</p>
                        </div>
                    </div>
                </div>

                <!-- COLUMNA 2: FORMULARIO -->
                <div class="col s12 l7" data-aos="fade-left">
                    <div class="formulario-card">
                        <h2 class="form-titulo yellow-text">
                            <i class="material-icons">send</i>
                            Envíanos un Mensaje
                        </h2>

                        <?php if ($mensaje_enviado): ?>
                            <div class="alert alert-success">
                                <i class="material-icons">check_circle</i>
                                <div>
                                    <strong>¡Mensaje enviado exitosamente!</strong>
                                    <p>Nos pondremos en contacto contigo pronto.</p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($mensaje_error): ?>
                            <div class="alert alert-error">
                                <i class="material-icons">error</i>
                                <div>
                                    <strong>Error al enviar el mensaje</strong>
                                    <p>Por favor verifica que todos los campos estén correctos.</p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="" class="contacto-form" id="contactForm">

                            <!-- Nombre -->
                            <div class="input-group">
                                <i class="material-icons">person</i>
                                <div class="input-wrapper">
                                    <input type="text" id="nombre" name="nombre" required class="form-input">
                                    <label for="nombre" class="form-label">Nombre Completo *</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="input-group">
                                <i class="material-icons">email</i>
                                <div class="input-wrapper">
                                    <input type="email" id="email" name="email" required class="form-input">
                                    <label for="email" class="form-label">Correo Electrónico *</label>
                                </div>
                            </div>

                            <!-- Teléfono -->
                            <div class="input-group">
                                <i class="material-icons">phone</i>
                                <div class="input-wrapper">
                                    <input type="tel" id="telefono" name="telefono" class="form-input">
                                    <label for="telefono" class="form-label">Teléfono (opcional)</label>
                                </div>
                            </div>

                            <!-- Asunto -->
                            <div class="input-group">
                                <i class="material-icons">subject</i>
                                <div class="input-wrapper">
                                    <select id="asunto" name="asunto" required class="form-input form-select">
                                        <option value="" disabled selected>Selecciona un asunto</option>
                                        <option value="Información General">Información General</option>
                                        <option value="Admisiones">Admisiones y Matrículas</option>
                                        <option value="Certificados">Solicitud de Certificados</option>
                                        <option value="Quejas o Sugerencias">Quejas o Sugerencias</option>
                                        <option value="Técnico Desarrollo Web">Técnico en Desarrollo Web</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <label for="asunto" class="form-label">Asunto *</label>
                                </div>
                            </div>

                            <!-- Mensaje -->
                            <div class="input-group">
                                <i class="material-icons">message</i>
                                <div class="input-wrapper">
                                    <textarea id="mensaje" name="mensaje" required rows="6"
                                        class="form-input form-textarea"></textarea>
                                    <label for="mensaje" class="form-label">Mensaje *</label>
                                </div>
                            </div>

                            <!-- Botón Submit -->
                            <button type="submit" name="enviar_contacto" class="btn-submit waves-effect waves-light">
                                <i class="material-icons left">send</i>
                                Enviar Mensaje
                                <span class="btn-ripple"></span>
                            </button>

                            <p class="form-note">* Campos obligatorios</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         MAPA
         ============================================ -->
    <section class="mapa-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title yellow-text center">
                <i class="material-icons">map</i>
                Encuéntranos
            </h2>
            <div class="mapa-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.978313165623!2d-73.22735148532549!3d5.716261833606349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a6e896ba57b19%3A0xa2950f5e2a24f373!2sInstituci%C3%B3n%20Educativa%20San%20Nicolas%2C%20Sede%20Sider%C3%BArgica!5e0!3m2!1ses!2sco!4v1680283187306!5m2!1ses!2sco"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    title="Ubicación IET San Nicolás">
                </iframe>
            </div>
        </div>
    </section>

</main>

<!-- ============================================
     JAVASCRIPT
     ============================================ -->
<script src="js/materialize.min.js"></script>
<script>
    // Background
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
        document.body.style.transition = "background-image 0.8s ease-in-out";
    });

    // Validación adicional del formulario
    document.getElementById('contactForm')?.addEventListener('submit', function (e) {
        const email = document.getElementById('email').value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(email)) {
            e.preventDefault();
            alert('Por favor ingresa un correo electrónico válido');
            return false;
        }
    });

    // Efecto ripple en botón
    document.querySelector('.btn-submit')?.addEventListener('click', function (e) {
        const ripple = this.querySelector('.btn-ripple');
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('active');

        setTimeout(() => ripple.classList.remove('active'), 600);
    });
</script>

<?php include('includes/footer.php'); ?>