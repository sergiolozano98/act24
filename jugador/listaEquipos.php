<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar Equipos</title>
  </head>
  <body>
    <?php
    include "Equipo.php";

   $nba=new Equipo();

     ?>

     <table>
       <tr>
         <td>Nombre</td>
         <td>Procedencia</td>
         <td>Altura</td>
         <td>Peso</td>
         <td>Posicion</td>
         <td>Nomeq</td>
       </tr>
       <?php
    $tabla=$nba->devolverJugador();
    foreach ($tabla as $fila) {
      ?>
      <tr>
        <td><?=$fila["Nombre"]?></td>
        <td><?=$fila["Procedencia"]?></td>
        <td><?=$fila["Altura"]?></td>
        <td><?=$fila["Peso"]?></td>
        <td><?=$fila["Posicion"]?></td>
        <td><?=$fila["Nombre_equipo"]?></td>

              <td><?php echo "<a href='borrar.php?nombre=".$fila["Nombre"]."'>Borrar ".$fila["Nombre"]."</a>";?></td>
          </tr>
          <?php

    }
        ?>
     </table>

  </body>
</html>
