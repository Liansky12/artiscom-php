<?php
session_start();
require_once("./funciones.php");
require_once("./conexion.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $conexionSingleton = ConexionBD::obtenerInstancia();
   $conexion = $conexionSingleton->obtenerConexion();

   // Recoger datos del formulario
   $usuario = $_POST['user'];
   $contrasena = $_POST['pwd'];

   $query = verificarUsuario($conexion, $usuario, $contrasena);
   if ($query) {
      setcookie("login", true, time() + 1);
      $_SESSION["login"] = $usuario;
   } else {
      setcookie("errores", "Error al iniciar sesión", time() + 1);
   }
   header("Location: login.php");

   // Cerrar la conexión a la base de datos
   $conexion = null;
}
?>