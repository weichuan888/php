<!-- 7. Écrire une expression conditionnelle...

... utilisant les variables $age et $sexe dans une instruction if/else
pour sélectionner une personne de sexe féminin dont l’age est compris entre 21 et 40 ans
et afficher un message de bienvenue approprié.

    Message si OK: "Bonjour, bienvenue parmi nous!"
    Message si KO: "Désolé, vous ne remplissez pas les critères de sélection." -->

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
  // extract($_POST); raccourci sur les variables.
  $age=$_POST["age"];
  $sexe=$_POST["sexe"];


  if ($age>=21 && $age<=40) {
    if ($sexe=="femme")
      echo "Bonjour, bienvenue parmi nous!";
  } else {
    echo "Désolé, vous ne remplissez pas les critères de sélection.";
  }

   ?>
<div/>
