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
         <td>Ciudad</td>
         <td>Conferencia</td>
         <td>Division</td>
         <td>Borrar</td>
       </tr>
       <?php
    $tabla=$nba->devolverEquipo();
    foreach ($tabla as $fila) {
      ?>
      <tr>
            <td><?=$fila["Nombre"]?></td>
            <td><?=$fila["Ciudad"]?></td>
            <td><?=$fila["Conferencia"]?></td>
            <td><?=$fila["Division"]?></td>
              <td><?php echo "<a href='borrar.php?nombre=".$fila["Nombre"]."'>Borrar ".$fila["Nombre"]."</a>";?></td>
          </tr>
          <?php

    }
        ?>
     </table>

  </body>
</html>
