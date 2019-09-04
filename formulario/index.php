
<?php 
    include_once './credenciales.php';
    if(!empty($_POST)) {
      $titulo = $_POST['titulo'];
      $contenido = $_POST['contenido'];
      $enlace = $_POST['enlace'];

      $sql = "INSERT INTO posts(title, contenido, enlace) VALUES (:loquesea, :content, :link)";

      $query = $pdo->prepare($sql);

$query->execute([
        'loquesea' => $titulo,
        'content' => $contenido,
        'link' => $enlace
      ]);
    }
  // Variables super Globales son variables que existen en PHP y nos ayudan acceder a ciertas partes
  // Ejemplo: Nos permiten acceder a ; 
    // - Sesión, -Cookies, -Parametros, -Valores del servidor
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario</title>
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
  <?php 
    // Variables super Globales son variables que existen en PHP y nos ayudan acceder a ciertas partes
    // Ejemplo: Nos permiten acceder a ; 
      // - Sesión, -Cookies, -Parametros, -Valores del servidor
      var_dump($_POST);
      var_dump($_GET);
      // echo 'Hola :=)'
  ?>
</div>
  <section class="formulario">
      <div class="form__container">
        <h2>Realiza un Post</h2>
        <h3>Comparte un video interesante para la comunidad</h3>
        <form action="" class="form__container--form" method="POST">
          <div class="form__container--item">
            <input name="titulo" autofocus autocomplete="off" type="text" class="input" placeholder="Titulo">
            <textarea 
              name="contenido" 
              id="" cols="30" rows="5" 
              placeholder="¿Qué estas pensando?, Comparte :)"
              ></textarea>
          </div>
          <div class="form__container--item">
            <input 
              name="enlace"
              autocomplete="off" 
              type="text" class="input" 
              placeholder="Enlace de video...">
            <button class="button" type="submit">Enviar</button>
          </div>
        </form>
      </div>
  </section>

  <section class="records">
    <h2>Publicaciones de la comunidad</h2>
    <div class="records__container">
      <article class="records__item">
        <p>Titulo:</p>
        <div class="start">
          <a>*</a>
          <a>*</a>
          <a>*</a>
          <a>*</a>
          <a>*</a>
        </div>
        <div class="item__container--video">
            <iframe width="460" height="215" 
            src="https://www.youtube.com/embed/1Wm96I0pRws" 
            frameborder="0" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>
        <div class="item__description">
          <p>Esto es una description</p>
        </div>
        <div class="btn__container">
            <button>Eliminar</button>
        </div>
      </article>

      <article class="records__item">
        <p>Titulo:</p>
        <div class="start">
          <a>*</a>
          <a>*</a>
          <a>*</a>
          <a>*</a>
          <a>*</a>
        </div>
        <div class="item__container--video">
            <iframe width="460" height="215" 
            src="https://www.youtube.com/embed/1Wm96I0pRws" 
            frameborder="0" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>
        <div class="item__description">
            <p>Esto es una description</p>
          </div>
          <div class="btn__container">
              <button>Eliminar</button>
          </div>
      </article>
    </div>
  </section>
</body>
</html>