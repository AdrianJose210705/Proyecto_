<?php
class BD {
    public static $instancia = null;
    public static function crearInstancia(){
        if (!isset(self::$instancia)){        
            $host = "db"; 
            $bd = "portafolio_db";
            $usuario = "root";
            $contrasena = "rootpassword";
            try {
                self::$instancia = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasena);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $ex) {
                echo "Error de conexión: " . $ex->getMessage();
            }
        }
        return self::$instancia;     
    }
}
?>