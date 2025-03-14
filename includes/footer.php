<?php
/*  include('includes/db.php');
$query = "UPDATE Visitas SET Contador = Contador + 1 WHERE Id = '1'";
$result = $cx->query($query);

$query = "SELECT * FROM Visitas";
$result = $cx->query($query);
$cx = NULL;
$row = NULL;
foreach($result as $row){
echo "<h4 class='center-align'>Número de visitas: 0000" . $row['Contador'] . "</h4>";
}*/

?>


<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- Inicializa los JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit(); // Inicializa todos los componentes
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });

    //js fixed header
    window.onscroll = function() {
        myFunction();
    };

    var header = document.getElementById("myHeader");
    var logo = document.getElementById("logo");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            logo.classList.remove("hide");
        } else {
            header.classList.remove("sticky");
            logo.classList.add("hide");
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });

    // js Slider
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);
    });


</script>
<footer class="p-0">
    <div class="row valign-wrapper m-0">
        <div class="col s4  center">
            <h4 class="white-text center"><b>Contacto:</b></h4>
            <h6><b>Celular: <br>(+57)</b> 321 222 2082</h6>
            <h6><b>E - mail:</b> <br>tuta_colsannicolas@hotmail.com</h6>
            <h6><b>Dirección</b> <br>Vda. El Arenal - Tuta</h6>
        </div>
        <div class="col s8 p-0 valign-wrapper">
            <iframe class="p-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.978313165623!2d-73.22735148532549!3d5.716261833606349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a6e896ba57b19%3A0xa2950f5e2a24f373!2sInstituci%C3%B3n%20Educativa%20San%20Nicolas%2C%20Sede%20Sider%C3%BArgica!5e0!3m2!1ses!2sco!4v1680283187306!5m2!1ses!2sco" style="width: 100%; height: 350px; border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row foot-dev m-0">
        <div class="col s12">
            <div class="container center ">
                <h6>© 2024 | <b>Powered By:</b> <a href="https://ingjefersonfonsecasoto.com.co" target="_blank">&lt; Ing. Jeferson Fonseca Soto &gt;</a></h6>
            </div>
        </div>
    </div>
</footer>