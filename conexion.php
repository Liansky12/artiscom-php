<?php
class ConexionBD
{
   private static $instancia;
   private $conexion;

   private function __construct()
   {
      // Configuración de la conexión a la base de datos
      $dsn = 'mysql:host=mysql-liansky.alwaysdata.net;dbname=liansky_artiscom';
      $usuario_bd = 'liansky_artiscom';
      $contrasena_bd = 'Qwerty4321.';

      try {
         $this->conexion = new PDO($dsn, $usuario_bd, $contrasena_bd);
         $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
         die('Error de conexión a la base de datos: ' . $e->getMessage());
      }
   }

   public static function obtenerInstancia()
   {
      if (!isset(self::$instancia)) {
         self::$instancia = new self();
      }
      return self::$instancia;
   }

   public function obtenerConexion()
   {
      return $this->conexion;
   }

   private function __clone()
   {
   }
   public function __wakeup()
   {
   }
}
?>