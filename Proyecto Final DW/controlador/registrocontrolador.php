<?php
require_once ("../modelo/registromodelo.php");
$CI=$_POST['CI'];
$NOMBRE=$_POST['NOMBRE'];
$APELLIDOS=$_POST['APELLIDOS'];
$EDAD=$_POST['EDAD'];
$TELEFONO=$_POST['TELEFONO'];
$DIRECCION=$_POST['DIRECCION'];
$CONTRASEÑA=$_POST['CONTRASEA'];

    $mandarregistro=registrarClientes::getInstance()->ingresa($CI,$NOMBRE,$APELLIDOS,$EDAD,$TELEFONO,$DIRECCION,$CONTRASEÑA);
    if($mandarregistro){
        echo "<script>alert('USUARIO REGISTRADO EXITOSAMENTE');
        window.location='../index.html';
        </script>";
    }else{
        echo "<script>
        window.location='../vista/paginas/registro.html';
        </script>";
    }
?>