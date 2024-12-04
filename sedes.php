<?php $menu = "Institución";
include('includes/header.php'); ?>

<!--------------------- Titulo ------------------------------>
<div class="section">
    <h3 class="center yellow-text p-0 m-0 pt"><b>SEDES</b></h3>
    <!--------------------- Sedes Rurales ------------------------------>
    <h4 class="center yellow-text">Sedes Rurales</h4>
    <br>
    <div class="row">
        <div class="col s12">
            <div class="row">
                <br>
                <!--- Sede Central --->
                <div class="col s12 m6 center ">
                    <img src="./images/hombre.png" alt="" width=auto height=140>
                    <h4 class="yellow-text "><b>Sede Siderúrgica</b></h4>
                    <p class="green-text center" style="margin:5px 0;"><b>Vereda El Arenal</b></p>
                </div>

                <!--- Sede Siderurjica --->
                <div class="col s12 m6 center ">
                    <img src="./images/mujer.png" alt="" width=auto height=140>
                    <h4 class="yellow-text "><b>Sede Central</b></h4>
                    <p class="green-text center" style="margin:5px 0;"><b>Vereda San Nicolás</b></p>
                </div>

                <!--- Sede La Bolsa --->
                <div class="col s12 m6 center ">
                    <img src="./images/mujer.png" alt="" width=auto height=140>
                    <h4 class="yellow-text "><b>Sede Salvial</b></h4>
                    <p class="green-text center" style="margin:5px 0;"><b>Vereda Salvial</b></p>
                </div>

                <!--- Sede El Rosal --->
                <div class="col s12 m6 center ">
                    <img src="./images/mujer.png" alt="" width=auto height=140>
                    <h4 class="yellow-text "><b>Sede Jorge Elicer Gaitan</b></h4>
                    <p class="green-text center" style="margin:5px 0;"><b>Vereda Regencia</b></p>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.scrollspy');
        var instances = M.ScrollSpy.init(elems);
    });

    document.addEventListener("DOMContentLoaded", function() {
        document.body.style.backgroundImage = "url('./images/parallax/2.jpeg')";
    });
</script>

<?php include('includes/footer.php'); ?>