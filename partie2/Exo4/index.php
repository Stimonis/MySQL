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
      <form action="info.php" method="POST">
        <input type="text" name="nom" placeholder="Perry"> <br>
        <input type="text" name="prenom" placeholder="Gabriel"> <br>
        <input type="date" name="dateNaiss" placeholder="Date de naissance"> <br>
        carte de fidélité? <input type="radio" name="carte" value="1">oui <input type="radio" name="carte" value="0">non <br>
        <input type="number" name="carteNum" placeholder="2775"> <br>
        <input type="submit" name="send">
      </form>
    </fieldset>
  </body>
</html>
