<?php $menu = "Contacto";
include('includes/header.php'); ?>
<br>
<style>
    /*PAGINA DE CONTACTO*/

    .Contacto {
        background-color: #056245;
        border-radius: 10px;
        border: none;
        margin-top: 3%;
        padding-bottom: 3%;
        color: #fefefb;
        text-align: justify;
        font-size: 150%;
        font-family: 'Times New Roman', Times, serif;
        width: 100%;
    }

    .opcionesdecontacto {
        text-align: center;
        font-size: 100%;

    }

    .ImgContacto {
        border-radius: 5px;
    }

    .ContInfo {
        text-align: center;
    }

    .contact-link {
        margin: 10px 0;
        text-decoration: none;
        color: white;
        font-size: 18px;
    }
    .contact-link a{
        font-weight: 100 !important;
    }

    .contact-link:hover {
        text-decoration: underline;
    }

    .contact-item {
        padding-bottom: 5px;
        margin-left: 20%;
        margin-right: 20%;
        font-weight: 700;
    }

    .contact-item a:hover {
        text-decoration: underline;
    }
</style>

<main>
    <div class="row">
        <div class="col s6">
            <div class="Contacto">
                <img src="images/Contacto.jpg" alt="ImgContacto" width="100%" class="ImgContacto" height="auto">
                <h4 class="ContInfo"><b>Información de Contacto:</b>
                </h4>
                <ul class="opcionesdecontacto">
                    <li class="contact-item">Correo Electrónico: </li>
                    <a href="mailto:secretaria@ietsannicolas.edu.co" class="contact-link">secretaria@ietsannicolas.edu.co </a>
                    <li class="contact-item">Facebook: </li>
                    <a href="https://www.facebook.com/ietsannicolas?_rdc=1&_rdr"target="_blank" class="contact-link">IET San Nicolás Tuta.</a>
                    <li class="contact-item">Número Telefónico:</li>
                    <a href="tel:3212222082" class="contact-link">(+57)321 222 2082</a>
                    <li class="contact-item">Nuestro WhatsApp:  </li>
                    <a href="https://wa.me/573212222082" target="_blank" class="contact-link">(+57) 321 222 2082</a>
                </ul>
            </div>
        </div>
        <div class="col s6 formulario">
            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLSdGOYocCUBbIdjSNXhC9GbdFJuhkvuE6KOJCanA3wjzCkKsrQ/viewform?embedded=true"
                width="730" height="675" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
    </div>
</main>


<br>

<?php include('includes/footer.php'); ?>