<?php
    include("conexion.php");
	$vDateTime = new DateTime();
    $vFecha=$vDateTime->format('Y-m-d');
    $vHoraFecha= $vFecha . " " . $_POST["horaFecha"];
    $vDescripcion=$_POST["txtDescripcion"];

    $sql="INSERT INTO registrostareas(horaFechainicio, descripciontarea) VALUES(:hora, :tarea)";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":hora"=>$vHoraFecha, ":tarea"=>$vDescripcion));

    header("Location:index.php");

?>
