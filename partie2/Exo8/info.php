<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$myselection = 'DELETE FROM bookings WHERE clientId = 24 OR clientId = 25';

$bdd->exec($myselection);

header('Location: index.php')


 ?>
