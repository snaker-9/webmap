<?php
include_once 'conex.php';//INCLUIR CONEXION DE BASE DE DATOS

class puntosDao
{
    private $r;
    public function __construct()
    {
        $this->r = array();
    }
   
    public function listar_todo()
    {
        $q = "select * from puntos";
        $con = conex::con();
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        while($fila = mysqli_fetch_assoc($rpta))
        {
            $this->r[] = $fila;
        }
        return $this->r;
    }
    public function listar_cord()
    {
        $q = "select * from contagio";
        $con = conex::con();
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        while($fila = mysqli_fetch_assoc($rpta))
        {
            $this->r[] = $fila;
        }
        return $this->r;
    }
  public function info()
    {
        $con = conex::con();
        //SEGURIDAD
        //$p = mysqli_real_escape_string($con,$p);
        
        $q = "select * 
        
             FROM personas
             join contagio 
             on contagio.idPersona = personas.DNI ";
        
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        while($fila = mysqli_fetch_assoc($rpta))
        {
            $this->r[] = $fila;
        }
        return $this->r;
    }


}
    
   

    
?>