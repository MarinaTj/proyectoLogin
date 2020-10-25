<?php
  session_start();
  include 'conexion.php';

  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];

  $validacion_login =mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='$usuario' and contraseña = '$contraseña'");
  $_session["usuario"]= $usuario;
  if(mysqli_num_rows($validacion_login) > 0)
  {
    header("location: gridview.php");
    exit;
  }else{
    echo ' <script>
            alert ("El usuario no existe en la base de datos");
            window.location ="index.php";
            </script>';
            exit;
  }


 ?>
