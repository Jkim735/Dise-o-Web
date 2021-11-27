<?php
require_once ("../modelo/compramodelo.php");
$CI=$_POST['ci'];
$SELECCION=$_POST['select'];
$TIEMPO=$_POST['tiempo'];
$PAGO=$_POST['pago'];
$NRONICHO=$_POST['nronicho'];

    $mandarcompra=registrarCompra::getInstance()->comprar($CI,$SELECCION,$TIEMPO,$PAGO,$NRONICHO);
    if($mandarcompra==true){
        if($SELECCION=='PERPETUO'){
            echo "<script>alert('SE REALIZO LA RESERVA PERPETUA DEL NICHO NUMERO $NRONICHO');
            window.location='../index.html';
            </script>";
        }
        if($SELECCION=='TEMPORAL'){
            echo "<script>alert('SE REALIZO LA RESERVA TEMPORAL DEL NICHO NUMERO $NRONICHO');
            window.location='../index.html';
            </script>";
        }
    }else if($mandarcompra==false){
        echo "<script>
        alert('ERROR EL USUARIO NO EXISTE');
        window.location='../vista/paginas/compra.html';
        </script>";
    }
?>