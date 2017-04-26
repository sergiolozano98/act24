<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
<?php
include 'Equipo.php';
echo "Se ha insetado correctamente:";
$equipo=new Equipo();

$equipo->insertarJugador($_POST["Nombre"],$_POST["Procedencia"],$_POST["Altura"],$_POST["Peso"],$_POST["Posicion"],$_POST["Nom_eq"]);
$tabla=$equipo->ultimoJugador($_POST["Nombre"]);
foreach ($tabla as $fila) {?>

<tr>
     <td><?=$fila["Nombre"]?></td>
     <td><?=$fila["Procedencia"]?></td>
     <td><?=$fila["Altura"]?></td>
     <td><?=$fila["Peso"]?></td>
     <td><?=$fila["Posicion"]?></td>
     <td><?=$fila["Nombre_equipo"]?></td>
   </tr>
<?php
echo "<br>";
echo "<a href='actualizar.php?Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]."'>Actualizar Registro</a></br>";
echo "<a href='listaequipos.php?Nombre=".$fila["Nombre"]."'>Borrar Registro</a>";

}
 ?>



</body>
</html>
