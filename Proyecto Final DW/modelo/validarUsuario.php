<?php
require_once ("../config/coneccion.php");
class validarUsuario{

    private static $instance = NULL;

    private function __clone() { }

    // Método singleton 
public static function getInstance()
{
    if (is_null(self::$instance)) {
        self::$instance = new validarUsuario();
    }
    return self::$instance;
}
public function validar($ci,$contraseña){
    $consulta="SELECT * FROM datos WHERE ci=$ci AND contra=$contraseña";
    $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consulta);
    if($ejecucion){
        $datosadmin = $ejecucion->num_rows;
        if($datosadmin==1){
            return 1;
        }else{
            return 0;
        }
    }
}
}
?>