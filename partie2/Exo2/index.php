<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <form class="" action="info.php" method="POST">
        <fieldset>
          <legend>Info clients</legend>
          <input type="text" name="nom" placeholder="Nom">
          <input type="text" name="prenom" placeholder="Prénom"> <br>
          <input type="date" name="dateNaiss" placeholder="Date de naissance"> <br>
          <label for="">carte de fidélité?</label>
          <input type="radio" name="carte" value="1">oui <input type="radio" name="carte" value="0">non  <br>
          <input type="text" name="numCarte" placeholder="Numéro carte de fidélité"> <br>
        </fieldset>

        <fieldset>
          <legend>Info Cartes</legend>
          <input type="number" name="numCarte2" placeholder="Numéro carte de fidélité"> <br>
          <input type="number" name="typeCarte" placeholder="Type de carte">
        </fieldset>
        <br>
        <input type="submit" name="">

      </form>

    <br><br>
  </body>
</html>
