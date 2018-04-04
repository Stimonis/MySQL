<?php


  if (!empty($_POST)) {

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $birthDate = $_POST['dateNaiss'];
      /*$lastName = $_POST['nom'];
      $firstName = $_POST['prenom'];
      $card = $_POST['carte'];
      if ($card == '1' && $_POST['numCarte'] != "") {
        $cardNumber = $_POST['numCarte'];
      } else {
        $cardNumber = 'NULL';
      };*/

      $myselection = "UPDATE clients SET birthDate = :birthDate WHERE lastName = 'Perry'";

      $requete = $bdd->prepare($myselection);

      // $requete->bindParam(':lastName',$lastName);
      //$requete->bindParam(':firstName',$firstName);
      $requete->bindParam(':birthDate',$birthDate);
      //$requete->bindParam(':card',$card);
      //$requete->bindParam(':cardNumber',$cardNumber);


      $requete->execute();
  }
  catch(PDOException $e)
  {
    echo "Error: " . $e->getMessage();
  }

  }
  header('Location: index.php');
 ?>
