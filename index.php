<?php
  require_once __DIR__ . "/Movie.php";
  require_once __DIR__ . "/db.php";
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movies</title>
  </head>
  <body>
    <?php foreach ($movies as $movie) : 
      $new_film = new Movie($movie["title"], $movie["genre"], $movie["duration"], $movie["lobby"], $movie["description"])   
    ?>
      <h1>Titolo: <?php echo $new_film->title; ?></h1>
      <h2>Genere: <?php echo $new_film->genre ?></h2>
      <h2>Durata: <?php echo $new_film->duration ?></h2>
      <h3>Sala: <?php echo $new_film->lobby ?></h3>
      <h3>Trama:</h3>
      <p><?php echo $new_film->getTrimDescription(60) ?></p>
    <?php endforeach ?>
  </body>
</html>
