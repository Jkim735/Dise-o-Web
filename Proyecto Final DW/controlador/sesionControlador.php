<?php
require_once ("../modelo/validarUsuario.php");
$ci=$_POST['CI'];
$contraseña=$_POST['CONTRA'];
$validacion=validarUsuario::getInstance()->validar($ci,$contraseña);
if($validacion==1){
    echo "<script>alert('BIENVENIDO $ci');
    window.location='../vista/paginas/compra.html';
    </script>";
}else{
    echo "<script>alert('ERROR DE USUARIO');
    window.location='../vista/paginas/iniciar-sesion.html';
    </script>";
}
?>