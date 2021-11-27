<?php
require_once ("../config/coneccion.php");
class registrarClientes{

    private static $instance = NULL;

    private function __clone() { }

    // Método singleton 
public static function getInstance()
{
    if (is_null(self::$instance)) {
        self::$instance = new registrarClientes();
    }
    return self::$instance;
}
public function ingresa($CI,$NOMBRE,$APELLIDOS,$EDAD,$TELEFONO,$DIRECCION,$CONTRASEÑA){
        $consulta="INSERT INTO datos(ci, nombre, apellidos, edad, telefono, direccion, contra, rol) VALUES ('$CI','$NOMBRE','$APELLIDOS','$EDAD','$TELEFONO','$DIRECCION','$CONTRASEÑA','user')";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consulta);
            return $ejecucion;
}
}
?>