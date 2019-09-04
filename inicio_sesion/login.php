<?php 
include_once '../formulario/credenciales.php';
if(!empty($_POST)) {
  $names = $_POST['names'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";

  $query = $pdo->prepare($sql);

  $query->execute([
    'name' => $names,
    'email' => $email,
    'password' => $password,
  ]);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <img  class="header__img" src="../assets/_lego.png" alt="logo">
        <div class="header__menu">
          <div class="header__menu--profile">
            <img tabindex="0" src="../assets/profile-2.png" alt="profile">
            <p>Perfil</p>
          </div>
          <ul>
            <li><a href="/">Cuenta</a></li>
            <li><a href="/">Cerrar Sesión</a></li>
          </ul>
        </div>
    </header>

    <section class="login">
      <div class="login__container">
        <h2 tabindex="0">Registrarse</h2>
        <form class="login__container--form" action="" method="post">
          <input aria-label="Names" class="input" type="text" name="names" placeholder="Nombres">
          <input aria-label="Correo" class="input" type="email" name="email" placeholder="Correo">
          <input aria-label="Contraseña" class="input" type="password" name="password" placeholder="Contraseña">
          <button class="button"  type="submit">Registrarse</button>
          <div class="login__container--remember-me">
            <label >
              <input type="checkbox" name="box1" value="checkbox">Recuerdame
            </label>
            <a href="/">Olvide mi Contraseña</a>
          </div>
        </form>
        <section class="social-media">
          <div class="media__img"><img width="40px" src="../assets/google.png" alt="Google">Inicia sesión con Google</div>
          <div class="media__img"><img width="40px" src="../assets/twitter.png" alt="Twitter">Inicia sesión con Twitter</div>
        </section>
        <p class="login__container--register">
          No tienes niguna cuenta. <a href="/">Regístrate</a>
        </p>
      </div>
    </section>
    <footer class="footer">
      <a href="/">Terminos de uso</a>
      <a href="/">Declaración de privacidad</a>
      <a href="/">Centro de ayuda</a>
    </footer>
</body>
</html>