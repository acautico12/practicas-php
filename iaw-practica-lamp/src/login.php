<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login Proyecto IAW</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="checklogin.php" method="post">
  <img class="mb-4" src="../assets/logo.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Formulario de Login</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; Proyecto Miguel Angel Vargas IAW</p>
</form>
</body>
</html>