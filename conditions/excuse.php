<!-- Dans un fichier "excuse.php",
crée un "générateur d'excuses" pour faciliter la vie des parents d'enfants en école primaire.

Il te faut un formulaire avec trois questions:

    nom de l'enfant
    nom de l'institutrice
    une raison de l'absence à choisir parmi des options (input de type "radio"):
        maladie
        décès de l'animal de compagnie (ou d'un membre de la famille)
        activité extra-scolaire importante
        toute autre excuse de ton choix

Pour chaque option, invente une excuse adaptée en fonction de l'option choisie.
Utilise une condition pour afficher la bonne excuse.

Génère le mot d'excuse utilisant les trois réponses au formulaire.

Le parent n'aura plus qu'à copier-coller la réponse pour rédiger sa lettre d'excuses.

Critères de perfectionnement

    ajoute la date du jour (format "Day, le dd Month YYYY")
    ajoute la formule de politesse.
    pas de faute d'orthographe.
    UX soignée: en faire un vrai produit? ( CSS + typographie + logo ) -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cas pratique 1 condition php</title>
  </head>
  <body>
    <form class="formulaire" action="excuse.php" method="post">
        <label for="enfant">Veuillez inscrire le nom de votre enfant :</label>
        <input type="text" name="nom1">
        <br/>

        <label for="institutrice">Veuillez inscrire le nom de votre institutrice :</label>
        <input type="text" name="nom2">
        <br/>
        <label for="raison"> Veuillez indiquer la raison de l'absence de votre enfant :</label>
        <br/>
        <input type="radio" name="excuse" value="maladie">maladie
        <input type="radio" name="excuse" value="décès">décès de l'animal de compagnie (ou d'un membre de la famille)
        <input type="radio" name="excuse" value="activité">activité extra-scolaire importante
        <input type="radio" name="excuse" value="autre">toute autre excuse
        <br/>
        <button type="submit" name="button">envoi</button>
    </form>
    <?php

    extract($_POST);
    $date = date("d-m-Y");

    if ($excuse=="maladie") {
      echo "$date Chère madame " . $nom2 . ", mon enfant " . $nom1 . " était malade ce jour là, il avait attrapé la grippe.";

    }
    else if ($excuse=="décès") {
      echo "$date Chère madame " . $nom2 . ", le petit poisson rouge de mon enfant est décédé hier soir, " . $nom1 . " voulait absolument faire son deuil.";
    }
    else if ($excuse=="activité") {
      echo "$date Chère madame " . $nom2 . ", mon enfant " . $nom1 . " devait disputé la finale des jeux d'échecs!";
    }
    else if ($excuse=="autre") {
      echo "$date Chère madame " . $nom2 . " pour des raisons privé " . $nom1 . " devait s'absenter ce jour-là.";
    }







     ?>
  </body>
</html>
