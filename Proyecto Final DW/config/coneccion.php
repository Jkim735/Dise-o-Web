<?php
    class Conectar
    {
    private static $instance = NULL;
    private function __construct() { }
    private function __clone() { }
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Conectar();
        }
        return self::$instance;
    }
        public static function conexion()
        {
            $conexion = mysqli_connect("localhost", "root", "", "disewebii");
            return $conexion;
        }
    }
    ?>