<?php //gérer l'upload de fichiers
function random_1($car) {
    $string = "";
    $chaine = "abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++) {
    $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
    }
    $target_dir = "uploads/";
    $imageFileType = strtolower(pathinfo($_FILES["CIN"]["name"],PATHINFO_EXTENSION));
    $target_file = $target_dir . random_1(20).".".$imageFileType;
    move_uploaded_file($_FILES["CIN"]["tmp_name"], $target_file);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Détails Commande</title>
  </head>
  <body>
    <table border="5px">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Type Sandwitch</th>
        <th>Supplément</th>
        <th>Prix Unitaire</th>
        <th>Quantité</th>
        <th>Prix Total</th>
      </tr>
      <tr>
        <td><?php 
        echo strip_tags( $_POST["nom"]);?></td>
        <td><?php 
        echo strip_tags( $_POST["prénom"]);?></td>
        <td><?php 
        echo strip_tags( $_POST["adresse"]);?></td>
        <td>
        <?php
        echo htmlspecialchars($_POST["type_sandwitch"]) ;?>
        </td>
        <td>
        <?php 
        foreach($_POST['supplement']as $a){
          echo strip_tags($a)." ";
        };
        ?>
        </td>
        <td>4dt</td>
        <td><?php 
        echo strip_tags($_POST["nb_sandwitchs"]);?></td>
        <td><?php 
        if($_POST["nb_sandwitchs"]<11)
        echo $_POST["nb_sandwitchs"]*4 ."dt";
        else {
          echo $_POST["nb_sandwitchs"]*3.6 ."dt";
        }?>
        </td>
      </tr>
    </table>
  </body>
</html>