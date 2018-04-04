<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$myselection = 'DELETE FROM tickets WHERE bookingsId = 24 OR bookingsId = 25';

$bdd->exec($myselection);

header('Location: index.php');
 ?>
