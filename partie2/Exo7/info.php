<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$myselection = 'DELETE FROM clients WHERE id = "24" OR id = "25"'; //OR and no AND !!!

$bdd->exec($myselection);





header('Location: index.php');

 ?>
