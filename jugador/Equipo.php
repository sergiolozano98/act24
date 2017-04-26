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
  function devolverJugador(){
    //construimos la consulta
    $sql="SELECT * from jugadores";
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

  function insertarJugador($nombre,$procedencia,$altura,$peso,$posicion,$equipo){
    $sql="INSERT INTO jugadores(Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) VALUES ('".$nombre."','".$procedencia."','".$altura."','".$peso."','".$posicion."','".$equipo."')";
    $resultado=$this->insertar($sql);
    if ($resultado!=null) {
     echo "Fallo en la creacion de la tabla:".$this->conexion->connect_errno;
     return False;
    }
  }


  function actualizarJugador($nombre,$procedencia,$altura,$peso,$posicion,$equipo){
    $sql="UPDATE jugadores set Nombre='".$nombre."',Procedencia='".$procedencia."',Altura='".$altura."',Peso='".$peso."',Posicion='".$posicion."',Nombre_equipo='".$equipo."' where Nombre='".$nombre."'";
    $resultado=$this->actualizar($sql);
    if ($resultado!=null) {
     echo "Fallo en la creacion de la tabla:".$this->conexion->connect_errno;
     return False;
    }
  }


  function ultimoJugador($nombre){
    $sql="SELECT *  FROM jugadores where Nombre='".$nombre."'";
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
  function borrarjugador($nombre){
  $sql="DELETE FROM jugadores WHERE Nombre='".$nombre."'";
  $resultado=$this->borrar($sql);
  if ($resultado=null) {
   echo "Fallo en la creacion de la tabla:";
   return False;
  }
  }
}

 ?>
