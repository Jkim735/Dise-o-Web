<?php
require_once ("../modelo/validarAdmin.php");
$ci=$_POST['CI'];
$contraseña=$_POST['CONTRA'];
$validacion=validarAdmin::getInstance()->valiAdmin($ci,$contraseña);
if($validacion==1){
    echo "<script>alert('BIENVENIDO ADMINISTRADOR $ci');
    window.location='../vista/paginas/mostrar.php';
    </script>";
}else{
    echo "<script>alert('ERROR DE ADMINISTRADOR');
    window.location='../vista/paginas/admin.html';
    </script>";
}
?>