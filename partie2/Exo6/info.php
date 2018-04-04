<?php
  if (!empty($_POST)) {

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $lastName = $_POST['lastName'];
      $firstName = $_POST['firstName'];
      if ($_POST['cardNumber'] != '') {
        $cardNumber = $_POST['cardNumber'];
      } else {
        $cardNumber = NULL;
      }


      $myselection = "UPDATE clients SET lastName = :lastName, firstName = :firstName, cardNumber = :cardNumber
                      WHERE id = 5";

      $requete = $bdd->prepare($myselection);

      $requete -> bindParam(':lastName', $lastName);
      $requete -> bindParam(':firstName', $firstName);
      $requete -> bindParam(':cardNumber', $cardNumber, PDO::PARAM_INT);


      // var_dump($_POST['cardNumber']);
      $requete->execute();

    }
    catch(PDOException $e)
    {
      echo "Error: " . $e->getMessage();
    }

  }

  header('Location: index.php');

 ?>
