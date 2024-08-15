<?php
/**
 * @param PDO $conexion
 * @param string $user
 * @param string $name
 * @param string $pwd
 * @param string $surname1
 * @param string $surname2
 * @param number $phone
 * @param string $address
 * @param integer $postal_code
 * @param string $country
 * @param array $interests
 * @param string $suggestions
 * @param string $use_ads
 */
function registrarUsuario(
   $conexion,
   $user,
   $name,
   $pwd,
   $surname1,
   $surname2,
   $phone,
   $address,
   $postal_code,
   $country,
   $interests,
   $suggestions,
   $use_ads
) {
   // Hash de la contraseña
   $hashContrasena = password_hash($pwd, PASSWORD_DEFAULT);

   // Insertar nuevo usuario en la base de datos
   $consulta = $conexion->prepare("INSERT INTO usuarios (
      u_user,
      u_name,
      pwd,
      surname1,
      surname2,
      phone,
      u_address,
      postal_code,
      country,
      interests,
      suggestions,
      use_ads,
      creation)
   VALUES (
      :u_user,
      :u_name,
      :pwd,
      :surname1,
      :surname2,
      :phone,
      :u_address,
      :postal_code,
      :country,
      :interests,
      :suggestions,
      :use_ads,
      :creation)
   ");
   $consulta->execute([
      ':u_user' => $user,
      ':u_name' => $name,
      ':pwd' => $hashContrasena,
      ':surname1' => $surname1,
      ':surname2' => $surname2 ?? null,
      ':phone' => $phone ?? null,
      ':u_address' => $address ?? null,
      ':postal_code' => $postal_code ?? null,
      ':country' => $country,
      ':interests' => !empty($interests) ? implode(", ", $interests) : null,
      ':suggestions' => !empty($suggestions) ? $suggestions : null,
      ':use_ads' => $use_ads ?? 0,
      ':creation' => date("Y-m-d H:i:s"),
   ]);
}

function verificarUsuario($conexion, $usuario, $contrasena)
{
   // Consulta a la base de datos para verificar las credenciales
   $consulta = $conexion->prepare("SELECT pwd FROM usuarios WHERE u_user = :usuario");
   $consulta->execute([':usuario' => $usuario]);

   if ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
      // Verificar la contraseña
      return password_verify($contrasena, $fila['pwd']);
   }

   return false;
}

function obtenerDatos($conexion, $usuario)
{
   $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE u_user = :u_user");
   $consulta->execute([':u_user' => $usuario]);

   // Obtener los resultados como un array asociativo
   $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

   // Verificar si se encontró un usuario con el ID proporcionado
   return $resultado ?? null;
}
?>