<?php
require_once ("../config/coneccion.php");
class validarAdmin{

    private static $instance = NULL;

    private function __clone() { }

    // Método singleton 
public static function getInstance()
{
    if (is_null(self::$instance)) {
        self::$instance = new validarAdmin();
    }
    return self::$instance;
}
public function valiAdmin($ci,$contraseña){
    $consulta="SELECT * FROM datos WHERE ci=$ci AND contra=$contraseña AND rol='admin'";
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