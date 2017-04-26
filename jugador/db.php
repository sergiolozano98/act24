<?php
/**
 * Permitir la conexion contra la base de datos
 */
class db
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;
  private $error_msj="";

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
        $this->error_msj="No se ha podido realizar la conexion";
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }
  function msjError(){
    return $this->error_msj;
  }
  //Funciones para la devolucion de resultados
public function realizarConsulta($consulta){
  if($this->error==false){
    $resultado = $this->conexion->query($consulta);
    return $resultado;
  }else{
    $this->error_msj="imposible realizar la consulta:".$consulta;
    return null;
  }
  }

  public function insertar($insertar){
    if (!$this->conexion->query($insertar)) {
     echo "Fallo en la insercion:".$this->conexion->connect_errno;
     return False;
   }else{
      $this->error_msj="imposible realizar la insercion:".$insertar;
      return null;
    }
    }
    public function actualizar($actualizar){
      if (!$this->conexion->query($actualizar)) {
       echo "Fallo en la creacion de la tabla:".$this->conexion->connect_errno;
       return False;
     }else{
        $this->error_msj="imposible realizar la insercion:".$actualizar;
        return null;
      }
      }
 public function ultimo($ultimo){

   if($this->error==false){
     $resultado = $this->conexion->query($ultimo);
     return $resultado;
   }else{
     $this->error_msj="imposible realizar la consulta:".$ultimo;
     return null;
   }
   }

   function borrar($borrar){
     if($this->error==false){
       $resultado = $this->conexion->query($borrar);
       return $borrar;
     }else{
       $this->error_msj="imposible realizar la consulta:".$borrar;
       return null;
   }
   }




}


 ?>
