<!-- EXERCICE 6. La structure "Switch".

Dans le switch, on indique au début sur quelle variable on travaille.
On dit à PHP : Je vais analyser la valeur de $note.
Après, on utilise des case pour analyser chaque cas (case 0,case 10, etc.).
Cela signifie : Dans le cas où la valeur est 0… Dans le cas où la valeur est 10…

Avantage : on n'a plus besoin de mettre le double égal !
Défaut : ça ne marche pas avec les autres symboles (< > <= >= !=).
En clair, le switch ne peut tester que l'égalité.

Lis la documentation sur la structure switch.

Puis, crée un nouveau fichier conditions-switch.php et
refais l'exercice précédent mais en remplaçant ta structure if/else
par une structure switch. -->

<form class="interro" action="conditions-switch.php" method="post">
  <label for="points">Vérifie ta note ici</label>
  <input type="text" name="note">
  <button type="submit" name="envoi">Vérification</button>

  <?php
    extract($_POST);

    switch ($note) {
      case 0:
        echo "Ce travail est nul.";
        break;
      case 1:
        echo "Ce travail est nul.";
        break;
      case 2:
        echo "Ce travail est nul.";
        break;
      case 3:
        echo "Ce travail est nul.";
        break;
      case 4:
        echo "Ce travail n'est pas terrible.";
        break;
      case 5:
        echo "Ce travail n'est pas terrible.";
        break;
      case 6:
        echo "Ce travail n'est pas terrible.";
        break;
      case 7:
        echo "Ce travail n'est pas terrible.";
        break;
      case 8:
        echo "Ce travail n'est pas terrible.";
        break;
      case 9:
        echo "Ce travail n'est pas terrible.";
        break;
      case 10:
        echo "Tout juste!";
        break;
      case 11:
        echo "C'est pas mal.";
        break;
      case 12:
        echo "C'est pas mal.";
        break;
      case 13:
        echo "C'est pas mal.";
        break;
      case 14:
        echo "C'est pas mal.";
        break;
      case 15:
        echo "Bravo!";
        break;
      case 16:
        echo "Bravo!";
        break;
      case 17:
        echo "Bravo!";
        break;
      case 18:
        echo "Bravo!";
        break;
      case 19:
        echo "Police! Arrêter ce tricheur!";
        break;
      case 20:
        echo "Police! Arrêter ce tricheur!";
        break;
      }
   ?>
</form>
