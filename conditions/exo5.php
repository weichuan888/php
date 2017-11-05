<!-- 5. Retour à l'école de l'échec et du jugement

Crée un petit formulaire qui réagit à la note de l'étudiant.
Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
Si la note est égale à 10, affiche "Tout juste!"
Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
Si la note est 15, 16, 17, ou 18, affiche "Bravo!".
Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!". -->

<!-- <!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>exo5 conditions php</title>
  </head>
  <body>
    <div class="etudiant"> -->
      <form class="note" action="exo5.php" method="post">
        <label for="points">Vérifie ta note ici</label>
        <input type="text" name="notes">
        <button type="submit" name="envoi">Vérification</button>

        <?php
        extract($_POST);

        

          if ($notes<=3) {
            $affiche="Ce travail est nul.";
          }
          if ($notes>3 && $notes<=9) {
            $affiche ="Ce travail n'est pas terrible";
          }
          if ($notes==10){
            $affiche = "Tout juste!";
          }
          if ($notes>10 && $notes<=14) {
            $affiche = "C'est pas mal.";
          }
          if ($notes>14 && $notes<=18) {
            $affiche = "Bravo!";
          }
          if ($notes==19 || $notes==20) {
            $affiche = "Police! Arrêtez ce tricheur!";
          }

          echo $affiche;
         ?>


      </form>
    <!-- </div>
</body>
</html> -->
