<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login |GlobosConfetti|</title>
        <link rel="stylesheet" href="Css/LoginEstilo.Css">
    </head>
    <body>
<php
print "bienvenidos"<br>;


</php>;

      <div class="contenedor-form">
          <div class="toggle">
              <span>Crear Cuenta</span>
          </div>
          <div class="Formulario">
              <h2>Iniciar Sesion</h2>
              <form action="#">
                  <input type="text" placeholder="Usuario" required>
                  <input type="password" placeholder="Contraseña" required>
                  <input type="submit" id="entrarSistema" value="Iniciar Sesión">
              </form>
          </div>

          <div class="Formulario">
            <h2 href="registro.php" class="btn btn-danger">Crear Cuenta</h2>
            <form action="#">
                <input type="text" placeholder="Usuario" required>
                <input type="password" placeholder="Contraseña" required>
                <input type="Nombre" placeholder="Nombre" required>
                <input type="Apellido" placeholder="Apellido" required>
                <input type="email" placeholder="Correo Electronico" required>
                <input type="telefono" placeholder="Telefono" required>
                <input type="Direccion" placeholder="Direccion" required>
                <input type="Estado" placeholder="Estado" required>
                <input type="submit" id="registrarNuevo" value="Registrarse">
            </form>
        </div>

        <div class="Reset-Password">
            <a href="#">Olvide mi contraseña</a>
        </div>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/MainLogin.js"></script>
      </div>  
    </body>
</html>

<script type="text/javascript">
$(document).ready(function){

});
</script>