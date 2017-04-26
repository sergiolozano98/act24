<?php
include 'db.php';
/**
 *
 */
class Equipo extends db
{

  function __construct()
  {
    //aqui realizamos la conexion a la base de datos
    parent::__construct();
  }
//aqui realizamos la funcion con la consulta
  function devolverEquipo(){
    //construimos la consulta
    $sql="SELECT * from equipos";
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=null){
      //montamos la tabla de resultado
      $tabla=[];
      while ($fila=$resultado->fetch_assoc()) {
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }

  function insertarEquipo($nombre,$ciudad,$conferencia,$division){
    $sql="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
    $resultado=$this->insertar($sql);
    if ($resultado!=null) {
     echo "Fallo en la creacion de la tabla:".$this->conexion->connect_errno;
     return False;
    }
  }


  function actualizarEquipo($nombre,$ciudad,$conferencia,$division){
    $sql="UPDATE equipos set nombre='".$nombre."',ciudad='".$ciudad."',conferencia='".$conferencia."',division='".$division."' where nombre='".$nombre."'";
    $resultado=$this->actualizar($sql);
    if ($resultado!=null) {
     echo "Fallo en la creacion de la tabla:".$this->conexion->connect_errno;
     return False;
    }
  }


  function ultimoEquipo($nombre){
    $sql="SELECT *  FROM equipos where Nombre='".$nombre."'";
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=null){
      //montamos la tabla de resultado
      $tabla=[];
      while ($fila=$resultado->fetch_assoc()) {
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }
  function borrarequipo($equipo){
  $sql="DELETE FROM equipos WHERE Nombre='".$equipo."'";
  $resultado=$this->borrar($sql);
  if ($resultado=null) {
   echo "Fallo en la creacion de la tabla:";
   return False;
  }
  }
}

 ?>
