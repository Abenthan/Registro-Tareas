<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Tareas</title>
    <link rel="stylesheet" href="estilos.css">
  </head>

  <body>
    <h1>Registrar tareas</h1>
    <?php
      include("conexion.php");
      $registros=$base->query("SELECT * FROM registrostareas WHERE horaFechaFin is null")->fetchAll(PDO::FETCH_OBJ);
        $date = new DateTime();
/*      if(isset($_POST["btnGuardartarea"])){
        $hora=$date->format('Y-m-d H:i:s');
        $descripcion=$_POST["txtDescripcion"];

        $sql="INSERT INTO registrostareas(horaFechainicio, descripciontarea) VALUES(:hora, :tarea)";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":hora"=>$hora, ":tarea"=>$descripcion));

        //header("Location:index.php");
      }
*/      
    ?>
    <table>
      <?php foreach($registros as $tarea): ?>

      <tr>
        <td class="fila1"><?php echo $tarea->horaFechainicio ?></td>
        <td class="fila2"><?php echo $tarea->descripciontarea ?></td>
        <td class="fila3">
          <a href="FinalizarTarea.php?IdTarea=<?php echo $tarea->idtarea?> & 
            IdHoraFin=<?php echo $date->format('Y-m-d H:i:s') ?>">
            <input type="button" value="Finalizar" class="btnfinalizar">
          </a>
        </td>
      </tr>

      <?php endforeach; ?>

    </table>
 
    <form action="EnviarTarea.php" method="post" class="formulario">
      <input type="time" class="hora" id="txtHora" name="horaFecha" readonly>
      <input type="text" class="descripcion" 
        maxlength="100"
        placeholder="Descripcion de la tarea" 
        name="txtDescripcion"
        id="txtDescripcion">
      <input type="submit" name="btnGuardartarea" value="Guardar Tarea">
    </form>
    <script src="tareas.js"></script>
  </body>
</html>