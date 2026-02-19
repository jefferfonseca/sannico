<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Inicialización de Materialize -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Tooltips
        var tooltips = document.querySelectorAll('.tooltipped');
        M.Tooltip.init(tooltips);

        // Dropdown
        var dropdowns = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdowns);

        // Sidenav
        var sidenavs = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenavs);
    });
</script>
</body>

</html>
<?php
