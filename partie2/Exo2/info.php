<?php

  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $maselection1 = 'INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber) VALUES (:lastName,:firstName,:birthDate,:card,:cardNumber)';

  $requete1 = $bdd->prepare($maselection1);

  $requete1->bindParam(':lastName',$lastName);
  $requete1->bindParam(':firstName',$firstName);
  $requete1->bindParam(':birthDate',$birthDay);
  $requete1->bindParam(':card',$card);
  $requete1->bindParam(':cardNumber',$cardNumber);

  $lastName = $_POST['nom'];
  $firstName = $_POST['prenom'];
  $birthDay = $_POST['dateNaiss'];
  $card = $_POST['carte'];
  if ($card == '1' && $_POST['numCarte'] != "") {
      $cardNumber = $_POST['numCarte'];
    } else {
      $cardNumber = 'NULL';
  };

  $requete1->execute();

  $maselection2 = 'INSERT INTO cards (cardNumber, cardTypesId) VALUES (:cardNumber, :cardTypesId)';

  $requete2 = $bdd->prepare($maselection2);

  $requete2->bindParam(':cardNumber', $cardNumber2);
  $requete2->bindParam(':cardTypesId', $cardTypesId);

  $cardNumber2 = $_POST['numCarte2'];
  $cardTypesId = $_POST['typeCarte'];

  $requete2->execute();

  header('Location: index.php');
 ?>
