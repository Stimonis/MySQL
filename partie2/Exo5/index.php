<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <body>
    <fieldset>
      <legend>info sur le nouvel évènement</legend>
        <form class="" action="info.php" method="POST">
          <input type="text" name="titre" placeholder="Nom de l'event"> <br>
          <input type="text" name="artiste" placeholder="Nom de l'artiste"> <br>
          <input type="date" name="date" placeholder="Date de l'event"> <br>
          <input type="text" name="typeEvent" placeholder="Type d'event"> <br>
          <input type="text" name="genre1" placeholder="Genre de l'event"> <br>
          <input type="text" name="genre2" placeholder="Genre de l'event"> <br>
          <input type="time" name="duree" placeholder="Durée de l'event"> (durée de l'event) <br>
          <input type="time" name="debut" placeholder="Heure de l'event"> (heure de début) <br>
          <input type="submit" name="send">
        </form>
    </fieldset>
  </body>
</html>
