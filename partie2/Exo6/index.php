<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <body>
    <!-- cette technique encodera automatiquement les infos de la personne désirée -->
    <?php
      $sqlselect = "SELECT * FROM clients WHERE id = 5";
      $requestselect = $bdd->query($sqlselect);
      $row = $requestselect->fetch(PDO::FETCH_ASSOC);
    ?>
    <fieldset>
      <form action="info.php" method="POST">
        <input type="number" name="id" value="<?php echo $row['id']?>"> <br>
        <input type="text" name="lastName" value="<?php echo $row['lastName']?>"> <br>
        <input type="text" name="firstName" value="<?php echo $row['firstName']?>"> <br>
        <input type="date" name="birthDate" value="<?php echo $row['birthDate']?>"> <br>

        <?php

          if ($row['card'] == '1') {
            echo '<input checked type="radio" name="card" value="' . $row['card'] . '">Oui';
            echo '<input type="radio" name="card" value="' . $row['card'] . '">Non <br>';
          } else {
            echo '<input type="radio" name="card" value="' . $row['card'] . '">Oui';
            echo '<input checked type="radio" name="card" value="' . $row['card'] . '">Non <br>';
          }

         ?>

        <input type="number" name="cardNumber" value="<?php echo $row['cardNumber']?>"> <br>
        <input type="submit">
      </form>
    </fieldset>
  </body>
</html>
