<?php
require_once ("../config/coneccion.php");
class registrarCompra{

    private static $instance = NULL;

    private function __clone() { }

    // Método singleton 
public static function getInstance()
{
    if (is_null(self::$instance)) {
        self::$instance = new registrarCompra();
    }
    return self::$instance;
}

    public function comprar($CI,$SELECCION,$TIEMPO,$PAGO,$NRONICHO){
    $verificarUsu="SELECT * FROM datos WHERE ci='$CI'";
    $ejecucionUsu =mysqli_query((Conectar::getInstance()->conexion()),$verificarUsu);
    if($ejecucionUsu){
        $valor=$ejecucionUsu->num_rows;
        if($valor==1){
                $consulta="INSERT INTO compra(metodopago,tipo,tiempo,nronicho,ciusu) VALUES ('$PAGO','$SELECCION','$TIEMPO','$NRONICHO','$CI')";
                mysqli_query((Conectar::getInstance()->conexion()),$consulta);
                return true;
        }else{
            return false;
        }
    }
}
}
?>