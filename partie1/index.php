<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $i = 1;
  echo '<h1>Exercise 1 :</h1>';
  $maselection = 'SELECT lastName, firstName FROM clients';
  $requete = $bdd->query($maselection);
  while ($donnees = $requete -> fetch()) {
    echo '<p>' .$i .'. ' .$donnees['lastName'] .' ' .$donnees['firstName'] .'</p>';
    $i++;
  }

  echo '<h1>Exercise 2 :</h1>';
  $maselection2 = 'SELECT type FROM showTypes';
  $requete2 = $bdd->query($maselection2);
  while ($donnees = $requete2 -> fetch()) {
    echo '<p>' .$donnees['type'] .'</p>';
  }

  echo '<h1>Exercise 3 :</h1>';
  $maselection3 = 'SELECT lastName, firstName FROM clients LIMIT 20';
  $requete3 = $bdd->query($maselection3);
  $j = 1;
  while ($donnees = $requete3 -> fetch()) {
    echo '<p>' .$j .'. ' .$donnees['lastName'] .' ' .$donnees['firstName'] .'</p>';
    $j++;
  }

  echo '<h1>Exercise 4 :</h1>';
  $maselection4 = 'SELECT lastName, firstName FROM clients WHERE card=1';
  $requete4 = $bdd->query($maselection4);
  $k = 1;
  while ($donnees = $requete4 -> fetch()) {
    echo '<p>' .$k .'. ' .$donnees['lastName'] .' ' .$donnees['firstName'] .'</p>';
    $k++;
  }

  echo '<h1>Exercise 5 :</h1>';
  $maselection5 = 'SELECT lastName, firstName FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC';
  $requete5 = $bdd->query($maselection5);
  while ($donnees = $requete5 -> fetch()) {
    echo '<p> Nom : ' .$donnees['lastName'] .'</p> ';
    echo '<p> Prénom : ' .$donnees['firstName'] .'</p>';
    echo '<p>-------------------------</p>';
  }

  echo '<h1>Exercise 6 :</h1>';
  $maselection6 = 'SELECT * FROM shows ORDER BY title ASC';
  $requete6 = $bdd->query($maselection6);
  $l = 1;
  while ($donnees = $requete6 -> fetch()) {
    echo '<p>' .$l .'- ' .$donnees['title'] .' par ' .$donnees['performer'] .', le ' .$donnees['date'] .' à ' .$donnees['startTime'] .'</p>';
    $l++;
  }

  echo '<h1>Exercise 7 :</h1>';
  $maselection7 = 'SELECT * FROM clients';
  $requete7 = $bdd->query($maselection7);
  while ($donnees = $requete7 -> fetch()) {
    echo '<fieldset>';
    echo 'Nom : ' .$donnees['lastName'] .'<br>';
    echo 'Prénom : ' .$donnees['firstName'] .'<br>';
    echo 'Date de naissance : ' .$donnees['birthDate'] .'<br>';
    if ($donnees['card'] == 1) {
      echo 'Carte de fidélité : oui ' .'<br>';
    } else {
      echo 'Carte de fidélité : non ' .'<br>';
    };
    if ($donnees['cardNumber'] !== null) {
      echo 'Numéro de carte : ' .$donnees['cardNumber'];
    } else {
      echo 'Numéro de carte : / ';
    }
    echo '</fieldset>';
  }
  ?>
