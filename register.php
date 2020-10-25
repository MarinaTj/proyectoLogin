<?php
//la llave para dar acceso
include 'conexion.php';

//Recibir los datos y almacenar en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

// cifrando la contraseña
define('AES_256_CBC', 'aes-256-cbc');
$llave_encriptacion = openssl_random_pseudo_bytes(12);
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

$encriptado = openssl_encrypt($contraseña, AES_256_CBC, $llave_encriptacion, 0, $iv) ;

$encriptado = $encriptado . '.' . base64_encode($iv);
$proceso_desencrip = explode('.', $encriptado);

$desencriptado = openssl_decrypt($proceso_desencrip[0], AES_256_CBC, $llave_encriptacion,0, base64_decode($proceso_desencrip[1]));


//consultar para insertar
$insertar = "INSERT INTO usuario(nombre, apellidos, correo, usuario, contraseña, encriptada, desencriptada)
VALUES ('$nombre','$apellidos','$correo','$usuario','$contraseña', '$encriptado', '$desencriptado')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='$usuario'");
if (mysqli_num_rows ($verificar_usuario)>0)
{
  echo  '<script>
          alert ("El usuario ya existe");
          window.location ="index.php" ;
         </script>';
  exit;
}
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo ='$correo'");
if (mysqli_num_rows ($verificar_correo)>0)
{
  echo '<script>
          alert ("El correo ya existe");
          window.location ="index.php" ;
         </script>';

  exit;
}

//ejecutar la consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado)
{
  echo '<script>
          alert ("Error al Registrarse");
          window.location ="index.php";
         </script>';
}
else {

  echo '<script>
          alert ("Registrado exitosamente");
          window.location ="gridview.php"
         </script>';
}

//cerrar la Conexion
mysqli_close($conexion);
