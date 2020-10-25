<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulario Sesion</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <h1>Ingrese su usario</h1>
    <form action="login.php" method="post" class="form_login">
      <h2 class="form_titulo2">Iniciar sesion</h2>
      <div class="container2">
        <input type="text" name="usuario" placeholder="usuario" class="input-48" required>
        <input type="password" name="contraseña" placeholder="contraseña" class="input-48" required>
          <input type="submit" value="Ingresar" class="button_ingresar">
          <p class="form_link" >¿No tienes cuenta? <a   href="index.php"> Registrate</a></p>
      </div>
    </form>
  </body>
</html>
