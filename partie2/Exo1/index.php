

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <fieldset>
      <form class="" action="index.php" method="POST">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom"> <br>
        <input type="date" name="dateNaiss" placeholder="Date de naissance"> <br>
        carte de fidélité? <input type="radio" name="carte" value="1">oui <input type="radio" name="carte" value="0">non  <br>
        <input type="text" name="numCarte" placeholder="Numéro carte de fidélité"> <br>
        <input type="submit" name="send">
      </form>
    </fieldset>
  </body>
</html>

<?php
if (!empty($_POST)) {

  try {

    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $maselection = "INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber)
                    VALUES (:lastName,:firstName,:birthDate,:card,:cardNumber)";

    $lastName = $_POST['nom'];
    $firstName = $_POST['prenom'];
    $birthDay = $_POST['dateNaiss'];
    $card = $_POST['carte'];
    if ($card == '1' && $_POST['numCarte'] != "") {
      $cardNumber = $_POST['numCarte'];
    } else {
      $cardNumber = 'NULL';
    }

    $requete = $bdd->prepare($maselection);

    $requete->bindParam(':lastName',$lastName);
    $requete->bindParam(':firstName',$firstName);
    $requete->bindParam(':birthDate',$birthDay);
    $requete->bindParam(':card',$card);
    $requete->bindParam(':cardNumber',$cardNumber);


    $requete->execute();
    //$requete->execute(array($lastName, $firstName, $birthDay, $card, $cardNumber));
  }
  catch(PDOException $e)
  {
    echo "Error: " . $e->getMessage();
  }

}

?>
