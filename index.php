

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de login</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <h1>Registrarse</h1>
    <form action="register.php" method="post" class="form_registro">
      <h2 class="form_titulo">Crear una cuenta</h2>
      <div class="container">
        <input type="text" name="nombre" placeholder="nombre" class="input-48" required>
        <input type="text" name="apellidos" placeholder="apellidos" class="input-48" required>
        <input type="email" name="correo" placeholder="correo electronico" class="input-100" required>
        <input type="text" name="usuario" placeholder="usuario" class="input-48" required>
        <input type="password" name="contraseña" placeholder="contraseña" class="input-48" required>
        <input type="submit" value="Guardar" class="button_enviar">
        <p class="form_link" >¿Tienes una cuenta? <a   href="form_InicioSesion.php"> Iniciar Sesion</a></p>
      </div>
    </form>
  </body>
</html>
