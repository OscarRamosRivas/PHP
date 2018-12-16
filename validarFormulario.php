<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Validación de un E-mail</title>
</head>
<body>
    <div class="container-fluid">
        
    
    <form action="<?php $PHP_SELF ?>" method="post">
    <div class="form-group">
      <label for="correo">Introduce tu correo electrónico:</label>
      <input type="text" name="email" id="correo" class="form-control" placeholder="e-mail" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Introduce tu e-mail</small>
    </div>
    <div class="row">
        
    
     <div class="col form-group">
       <label for="nombreUsuario">Nombre:</label>
       <input type="text" name="nombre" id="nombreUsuario" class="form-control" placeholder="nombre" aria-describedby="helpId">
       <small id="helpId" class="text-muted">Dinos tu nombre</small>
     </div>
    <div class="col form-group">
      <label for="apellidosUsuario">Apellidos:</label>
      <input type="text" name="surname" id="apellidosUsuario" class="form-control" placeholder="apellidos" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Ahora tus apellidos</small>
    </div>
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" name="pass" id="password" class="form-control" placeholder="contraseña" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Introduce una contraseña</small>
    </div>
    <div class="form-group">
        <label for="biografiaUsuario">Biografia</label>
        <textarea class="form-control" name="bio" id="biografiaUsuario" placeholder="cuentanos sobre ti" rows="3" required></textarea>
    </div> 
    <div class="form-group">
      <label for="tipoUsuario">Tipo de usuario:</label>
      <select name="nivel" id="tipoUsuario" class="form-control">
      <option value="0">Usuario</option>
      <option value="1">Medio</option>
      <option value="2">Avanzado</option>
      <option value="3">Jefe</option>
      </select>
    </div>

    <input type="submit" name="enviar" class="btn btn-primary" value="Enviar">
    </form>

    </div>
    <?php 
    if (isset($_POST['enviar'])) {
        if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            echo "Introduzca el e-mail correctamente.<br>";
        }

        /* Con strlen comprobamos la longitud del nombre que tiene que ser
        menor o igual a 30. Negamos la comprobación de si es numerico
        y por último, con una expresión regular: [0-9], comprobamos que no
        tenga ningun numero.
         */
        if (isset($_POST['nombre']) && strlen($_POST['nombre']) <= 30 &&
            !is_numeric($_POST['nombre']) && !preg_match("/[0-9]/", $_POST['nombre'])) {
            $nombre = $_POST['nombre'];
        } else {
            echo "Debe introducir un nombre con letras y menos de 30 caracteres.<br>";
        }

        /*
        Aqui sólo comprobamos que no sea numerico y no contenga numeros.
         */
        if (isset($_POST['surname']) && !is_numeric($_POST['surname']) && !preg_match("/[_0-9]/", $_POST['surname'])) {
            $apellido = $_POST['surname'];
        } else {
            echo "El apellido no debe contener numeros.<br>";
        }

        /*
        Creamos una expresión regular para que la contraseña cumpla una serie de condiciones:
         que tenga al menos un dígito, un carácter especial, una letra mayúscula, una letra minúscula
         y que tenga entre 8 y 16 caracteres.
         */
        if (isset($_POST['pass']) && strlen($_POST['pass']) >= 8 &&
            preg_match("/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/", $_POST['pass'])) {
            $pass = $_POST['pass'];
        } else {
            echo "La contraseña debe contener al menos un número, una letra minúscula, una letra mayúscula y un carácter especial.<br>";
        }

        $bio = $_POST['bio'];
        $nivel = $_POST['nivel'];

    }


    ?>
</body>
</html>