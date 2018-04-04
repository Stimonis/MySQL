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
      $myselection1 = 'SELECT * from bookings WHERE clientId = 24 OR clientId = 25';
      $requestSelect = $bdd->query($myselection1);
     ?>

     <fieldset>
       <form action="info.php" method="post">
          <?php
            while($donnees = $requestSelect->fetch(PDO::FETCH_ASSOC)) {

                echo 'Numéro de réservation : <input type="number" name="Id" value="' .$donnees['id'] .'"> <br>';
                echo 'Numéro de client : <input type="number" name="numClient" value="'.$donnees['clientId'] .'"> <br>';
                echo' <hr> <br>';

            }
          ?>
          <input type="submit" name="" value="Effacer">
       </form>
     </fieldset>
  </body>
</html>
