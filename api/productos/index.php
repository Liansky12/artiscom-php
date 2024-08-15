<?php
require_once '../../conexion.php';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET");
header("Allow: GET");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
   die();
}

header("Content-Type: application/json");

try {
   $conexionSingleton = ConexionBD::obtenerInstancia();
   $conexion = $conexionSingleton->obtenerConexion();

   $consulta = $conexion->prepare("SELECT * FROM muestrario");
   $consulta->execute();
   $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

   echo json_encode($resultados);
} catch (PDOException $e) {
   // Manejo de errores
   http_response_code(500); // Internal Server Error
   echo json_encode(["error" => $e->getMessage()]);
} finally {
   $conexion = null;
}
