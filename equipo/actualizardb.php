<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
<?php

include 'Equipo.php';
echo "Se ha Actualizo correctamente:";
$equipo=new Equipo();

$equipo->actualizarEquipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
$tabla=$equipo->ultimoEquipo($_POST["Nombre"]);
foreach ($tabla as $fila) {?>

<tr>
     <td><?=$fila["Nombre"]?></td>
     <td><?=$fila["Ciudad"]?></td>
     <td><?=$fila["Conferencia"]?></td>
     <td><?=$fila["Division"]?></td>
   </tr>
<?php
echo "<br>";
echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualizar Registro</a></br>";
echo "<a href='listaequipos.php?nombre=".$fila["Nombre"]."'>Borrar Registro</a>";

}

 ?>



</body>
</html>
