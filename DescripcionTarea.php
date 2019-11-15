<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar Tarea</title>
</head>
<body>
    <h1>Descripción Tarea</h1>
    <?php
        include("conexion.php"); 
        if (isset($_POST["btnGuardar"])){
            $vDescripcion=$_POST["txtDescripcion"];
            $sql="UPDATE registrostareas SET descripciontarea=:Tarea, apellido=:miApe, direccion=:miDir WHERE id=:miId";
            

           /*  header("Location:index.php"); */  
        }
  /*        if (!isset($_POST["bot_actualizar"])){
            $Id=$_GET["Id"];
            $nom=$_GET["nom"];
            $ape=$_GET["ape"];
            $dir=$_GET["dir"];
          }else{
            $Id=$_POST["id"];
            $nom=$_POST["nom"];
            $ape=$_POST["ape"];
            $dir=$_POST["dir"];
            $sql="UPDATE datos_usuarios SET nombre=:miNom, apellido=:miApe, direccion=:miDir WHERE id=:miId";
            $resultado=$base->prepare($sql);
            $resultado->execute(array(":miId"=>$Id, ":miNom"=>$nom, ":miApe"=>$ape, ":miDir"=>$dir));
            header("Location:index.php");
        
          } */
    ?>
    <form action="" method="post">
        <input type="text" name="txtDescripcion">
        <input type="submit" name="btnGuardar" value="Guardar">
    </form>
</body>
</html>