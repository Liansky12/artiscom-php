<?php
require_once("./funciones.php");
require_once("./conexion.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $name = $_POST["name"];
   $surname1 = $_POST["surname1"];
   $surname2 = $_POST["surname2"];
   $phone = $_POST["phone"];
   $email = $_POST["email"]; /* El email será el usuario */
   $pwd1 = $_POST["pwd1"];
   $pwd2 = $_POST["pwd2"];
   $address = $_POST["address"];
   $postal_code = $_POST["postal_code"];
   $country = $_POST["country"];
   $interests = $_POST["interests"] ?? null;
   $suggestions = $_POST["suggestions"];
   $use_ads = $_POST["use_ads"] ?? null;

   $conexionSingleton = ConexionBD::obtenerInstancia();
   $conexion = $conexionSingleton->obtenerConexion();

   $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE u_name = :u_name");
   $consulta->execute([':u_name' => $email]);

   // Obtener resultados
   $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

   if (empty($resultados)) {
      registrarUsuario($conexion, $email, $name, $pwd1, $surname1, $surname2, $phone, $address, $postal_code, $country, $interests, $suggestions, $use_ads);
      setcookie("registro", $name, time() + 1);
   } else {
      setcookie("errores", "El usuario ya está registrado", time() + 1);
   }

   $conexion = null;
   header("Location: registro.php");
}
?>