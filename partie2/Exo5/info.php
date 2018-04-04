<?php
  if (!empty($_POST)) {

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $date = $_POST['date'];
      $startTime = $_POST['debut'];
      $performer = $_POST['artiste'];
      $title = $_POST['titre'];

      $myselection = "UPDATE shows SET date = :date, startTime = :startTime, performer = :performer
                      WHERE title = :title";

      $requete = $bdd->prepare($myselection);

      $requete->bindParam(':date', $date);
      $requete->bindParam(':startTime', $startTime);
      $requete->bindParam(':performer', $performer);
      $requete->bindParam(':title', $title);

      $requete->execute();

    }
    catch(PDOException $e)
    {
      echo "Error: " . $e->getMessage();
    }

  }

  header('Location: index.php');

 ?>
