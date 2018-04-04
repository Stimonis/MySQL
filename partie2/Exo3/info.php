<?php

  try {
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
  }

  $maselection = 'INSERT INTO shows (title, performer, date, showTypesId, firstGenresId, secondGenreId, duration, startTime)
                  VALUES (:title, :performer, :date, :showTypesId, :firstGenresId, :secondGenreId, :duration, :startTime)';
  $requete = $bdd->prepare($maselection);

  $requete->bindParam(':title', $title);
  $requete->bindParam(':performer', $performer);
  $requete->bindParam(':date', $date);
  $requete->bindParam(':showTypesId', $showTypesId);
  $requete->bindParam(':firstGenresId', $firstGenresId);
  $requete->bindParam(':secondGenreId', $secondGenreId);
  $requete->bindParam(':duration', $duration);
  $requete->bindParam(':startTime', $startTime);

  $title = $_POST['titre'];
  $performer = $_POST['artiste'];
  $date = $_POST['date'];
  $showTypesId = $_POST['typeEvent'];
  $firstGenresId = $_POST['genre1'];
  $secondGenreId = $_POST['genre2'];
  $duration = $_POST['duree'];
  $startTime = $_POST['debut'];

  $requete->execute();
  
  header('Location: index.php');
 ?>
