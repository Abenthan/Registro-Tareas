<?php
    include("conexion.php");
    $vIdTarea=$_GET["IdTarea"];
    $vHoraFecha=$_GET["IdHoraFin"];

    $sql="UPDATE registrostareas SET horaFechaFin=:horaFin WHERE idtarea=:IdTarea";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":IdTarea"=>$vIdTarea, ":horaFin"=>$vHoraFecha));

    header("Location:index.php");

?>
