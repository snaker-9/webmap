<?php
class conex //CLASE PARA CONEXION A BASE DE DATOS
{
   public static function con()
    {
        $conexion = mysqli_connect("localhost", "mapcovi_mapas", "VlB40QoLdDcgf");
      mysqli_select_db($conexion,"mapcovi_covi");
        mysqli_query($conexion,"SET NAMES 'utf8'");
        if(!$conexion)
        {
            return FALSE;
        }
        else
        {
            return $conexion;
            
        }
    }
}
?>