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
    <?php
      $myselection1 = 'SELECT * from tickets WHERE bookingsId = 24 OR bookingsId = 25';
      $requestSelect = $bdd->query($myselection1);
     ?>

     <fieldset>
       <form action="info.php" method="post">
          <?php
            while($donnees = $requestSelect->fetch(PDO::FETCH_ASSOC)) {

                echo 'Numéro de billet : <input type="number" name="Id" value="' .$donnees['id'] .'"> <br>';
                echo 'Prix : <input type="number" name="numClient" value="'.$donnees['price'] .'"> <br>';
                echo 'Numéro de réservation : <input type="number" name="numClient" value="'.$donnees['bookingsId'] .'"> <br>';
                echo' <hr> <br>';

            }
          ?>
          <input type="submit" name="" value="Effacer">
       </form>
     </fieldset>
  </body>
</html>
