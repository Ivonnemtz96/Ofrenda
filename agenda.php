<!DOCTYPE html>
<html lang="es">
<?php
    $title = 'Agenda';
    $agenda = 'active';
    include("includes/head.php");
    include("includes/metricas.php");
?>
<body >
       
    <?php
        include("includes/preloader.php");
        include("includes/header.php");
        include("modules/agenda.php");
        include("includes/redes.php");
        include("includes/footer.php");
        include("includes/scripts.php");
    ?>
</body>

</html>