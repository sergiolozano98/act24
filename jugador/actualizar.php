<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>
    <form action="actualizardb.php" method="post">
      Nombre:<br>
      <input type="text" name="Nombre" value="<?=$_GET["nombre"]?>"><br>
      Procedencia:<br>
      <input type="text" name="Ciudad" value="<?=$_GET["Procedencia"]?>"><br>
      Altura:<br>
      <input type="text" name="Conferencia" value="<?=$_GET["Altura"]?>"><br>
      Peso:<br>
      <input type="text" name="Division" value=<?=$_GET["Peso"]?>><br>
      Posicion:<br>
      <input type="text" name="Division" value=<?=$_GET["Posicion"]?>><br>
      Nombre equipo:<br>
      <input type="text" name="Division" value=<?=$_GET["Nombre_equipo"]?>><br>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
