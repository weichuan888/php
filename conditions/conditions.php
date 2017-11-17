<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Conditions</title>
  </head>
  <body>
    <p>
      <!-- 0. Représente en code le fait de devoir ranger sa chambre si elle est sale.

      Astuce: Initialise une variable booléenne $chambre_est_sale puis teste là dans une condition. Si elle est vraie, affiche "Range ta chambre, on dirait la cage d'un bonobo!". Sinon, affiche "Ta chambre est trop propre, vis un peu!".

      Fait? Bravo. A présent, modifie ton script pour représenter plutôt comment tes parents s'exprimeraient.

      Ensuite, rendons le script un peu plus subtil en permettant une gradation. Ta chambre pourrait être soit "dégoutante", "sale", "en ordre", "immaculée", "maniaque". Utilise une structure if/ elseif / else pour cela. Invente les messages à afficher en fonction de chaque cas de figure.   -->

      <?php
        $chambre_est_sale = false;
        if ($chambre_est_sale=="true") {
            $evenement = "Range ta chambre, on dirait la cage d'un bonobo!";
        } else {
            $evenement = "Ta chambre est trop propre, vis un peu!";
        }
        echo $evenement;
      ?>
    </p>
    <p>
      <?php
        $chambre_est_mal_rangé = true;
        if ($chambre_est_mal_rangé=="true") {
            $evenement = "Range ta chambre, ou sinon plus d'internet!";
        } else {
            $evenement = "va faire la vaiselle !";
        }
        echo $evenement;
      ?>
    </p>
    <p>
      <?php
        $chambre_est_en_ordre= false;
        if ($chambre_est_déguelasse==true) {
            $evenement = "Range ta chambre, c'est devenu une poubelle ici!";
         }else  if ($chambre_est_en_ordre== true)
        {
            $evenement = "va faire la vaiselle !";
         }else {
            $evenement = "ta chambre est en désordre! Range moi ca!";
        }

        echo $evenement;
      ?>

    </p>
    <p>
<!-- 1. Affiche un message de salutation différent selon l'heure courante. -->
    <?php
      $heure = 16;
      if ($heure >= 5.00 && $heure <= 9) {
          $salutation = "Bonjour!";
      }
      else if ($heure > 9.01 && $heure <= 12) {
          $salutation = "Bonne journée!";
      }
      else if ($heure > 12 && $heure <=16) {
          $salutation = "Bon après-midi!";
      }
      else if ($heure > 16 && $heure <= 21) {
          $salutation = "Bonne soirée!";
      }
      else if ($heure > 21 && $heure <5) {
          $salutation = "Bonne nuit!";
      }
      echo $salutation;
      ?>
    </p>

    <!-- 2. Affiche une salutation différente selon l'âge de l'utilisateur.

    Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).
    Méthode: GET Affiche un message différent selon la réponse au formulaire.

        Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
        Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
        Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
        Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?" -->


<!-- Pour crée un formulaire, j'utilise la balise <form> </form> pour intégrer un formulaire avant le php
Dans cette balise, j'integre une action qu'on appelle conditions.php pour pouvoir renvoyer la meme page!
method = post c'est pour afficher dans la page, il existe la methode GET pour l'afficher dans URL.
je rajoute un input pour definir le type et le nom que je souhaite obtenir dans le formulaire.

Ensuite je crée une balise php et j'integre la variable egale au post et j'encadre la variable age entre guillemets
afin qu'il puisse lire le chiffre et applique les conditions. -->
      <form action="conditions.php" method="post">
        <p>Quel est votre âge ?
        <input type="text" name="age" /></p>
        <p><input type="submit" value="OK"></p>
      </form>
      <?php
      $age=$_POST["age"];
      if ($age <12) {
        $saluer= "Salut petit!";
      }
      else if ($age>=12 && $age <18) {
        $saluer= "Salut l'ado!";
      }
      else if ($age>=18 && $age<115) {
          $saluer= "Salut l'adulte!";
      }
      else if ($age>=115) {
          $saluer= "Wow! Toujours vivant?";
      }
      echo $saluer;
       ?>
    </p>





























  </body>
</html>
