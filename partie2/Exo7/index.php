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
      $mypreselect1 = 'SELECT * FROM clients WHERE id = 24';
      $requestpreselect1 = $bdd->query($mypreselect1);
      $row1 = $requestpreselect1->fetch(PDO::FETCH_ASSOC);

      $mypreselect2 = 'SELECT * FROM clients WHERE id = 25';
      $requestpreselect2 = $bdd->query($mypreselect2);
      $row2 = $requestpreselect2->fetch(PDO::FETCH_ASSOC);
     ?>

     <fieldset>
       <form class="" action="info.php" method="POST">
        Numéro de client : <input type="number" name="id" value="<?php echo $row1['id'];?>"> <br>
        Nom : <input type="text" name="nom" value="<?php echo $row1['lastName'];?>"> <br>
        Prénom : <input type="text" name="prenom" value="<?php echo $row1['firstName'];?>"> <br>
        Date de naissance : <input type="date" name="dateNaiss" value="<?php echo $row1['birthDate'];?>"> <br>
        Carte de fidélité : <input type="checkbox" name="carte" value="<?php echo ($row1['card'] == 1) ? 'checked' : ''?>"> <br>  <!-- opérateur ternaire : on utilise le ? pour faire la comparaison même effet que le if juste en-dessous -->
        <?php
          // if ($row2['card'] == '1') {
          //   echo '<input type="checkbox" name="carte" checked> <br>';
          // } else {
          //   echo '<input type="checkbox" name = "carte"> <br>';
          // }
        ?>
        Numéro de carte de fidélité : <input type="number" name="carteNum" value="<?php echo $row1['cardNumber']?>"> <br>

        <hr>

        Numéro de client : <input type="number" name="id" value="<?php echo $row2['id'];?>"> <br>
        Nom : <input type="text" name="nom" value="<?php echo $row2['lastName'];?>"> <br>
        Prénom : <input type="text" name="prenom" value="<?php echo $row2['firstName'];?>"> <br>
        Date de naissance : <input type="date" name="dateNaiss" value="<?php echo $row2['birthDate'];?>"> <br>
        Carte de fidélité : <input type="checkbox" name="carte" value="<?php echo ($row2['card'] == 1) ? 'checked' : ''?>"> <br>
        Numéro de carte de fidélité : <input type="number" name="carteNum" value="<?php echo $row2['cardNumber']?>"> <br>
        <input type="submit" name="" value="Effacer">

      </form>
     </fieldset>
  </body>
</html>
