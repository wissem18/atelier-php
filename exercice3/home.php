<?php
session_start();
if (!isset($_SESSION['notes'])) {
  $_SESSION['notes'] = array();
}
if (isset($_POST['titre'])) {
  $taille = count($_SESSION['notes']);
  $titre = $_POST['titre'];
  $content = $_POST['comment'];
  $donnee = $titre . '/' . $content;
  $_SESSION['notes'][$taille] = $donnee;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="stylesheet.css" />
  <title>Google keep</title>
</head>

<body>
  <form action="home.php" method="post">
    <div class="form-group">
      <input type="text" name="titre" placeholder="Titre" required />
    </div>
    <br />
    <div class="form-group">
      <textarea name="comment" placeholder="créer une note ..." cols="85" rows="10" required></textarea>
    </div>
    
    <input type="submit" value="Valider" class="btn btn-dark centerbtn">
  </form>
  <a href="notes.php" class="btn btn-success centerbtn">Voir notes</a>
  <a href="deconnecter.php" class="btn btn-danger ">Se déconnecter</a>
</body>

</html>