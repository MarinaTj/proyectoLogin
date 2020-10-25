<?php
$conexion =mysqli_connect('localhost','root','','bd_login');

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Morstrar Grid</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <a href="cerrar_session.php" style="color:white;">Cerrar sesion <br> </a>
    <br>
      <table>
        <caption> <strong>GRID DE USUARIOS</strong></caption>
        <tr>
          <th>id</th>
          <th>nombre</th>
          <th>apellidos</th>
          <th>correo</th>
          <th>contraseña</th>
          <th>encriptada</th>
          <th>desencriptada</th>
        </tr>

          <?php
          $sql="SELECT * from usuario ";
          $result=mysqli_query($conexion,$sql);

          while ($mostrar = mysqli_fetch_array($result))
          {
           ?>

        <tr>
          <td><?php echo $mostrar['id'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo $mostrar['apellidos'] ?></td>
          <td><?php echo $mostrar['correo'] ?></td>
          <td><?php echo $mostrar['contraseña'] ?></td>
          <td><?php echo $mostrar['encriptada'] ?></td>
          <td><?php echo $mostrar['desencriptada'] ?></td>
        </tr>

      <?php } ?>

      </table>

  </body>
</html>
