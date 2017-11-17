<!-- 8. La réécrire, mais sans ELSE.

Il est possible de réaliser exactement la même chose,
mais avec une simple instruction if (sans else). Essaye. -->

<form class="condition" action="exo7.php" method="post">
  <label for="age">Veuillez indiquer votre âge :</label>
  <input type="text" name="age">
  <br/>

  <label for="sexe">Veuillez indiquer votre sexe :</label>
  <input type="radio" name="sexe" value="femme">F
  <input type="radio" name="sexe" value="homme">H
  <br/>
  <button type="submit" name="envoi">envoi</button>
</form>
<div>
  <?php
  extract($_POST);
  // raccourci sur les variables.
  // $age=$_POST["age"];
  // $sexe=$_POST["sexe"];


  if ($age>=21 && $age<=40 && $sexe=="femme") {
      echo "Bonjour, bienvenue parmi nous!";
  }
  if ($age<21 && $age>40){
    if ($sexe=="femme" || $sexe=="homme") {
    echo "Désolé, vous ne remplissez pas les critères de sélection.";
  }

   ?>
<div/>
