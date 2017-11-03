<!-- 3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.
Complète le formulaire de l'exercice précédent en ajoutant une deuxième question : "Homme ou Femme?" (champ de type Radio). Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
Idem pour les autres tranches d'âge.
Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions. -->
 <p>
      <form action="exo3.php" method="post">
        <p>Quel est votre âge ?<input type="text" name="age" /></p>
        <p>Genre:</p>
        <input name="genre" type="radio" value="homme">Homme
        <input name="genre" type ="radio" value="femme">Femme
        <p><input name ="envoi" type="submit" value="ok"></p>
      </form>
      <?php
      $age=$_POST["age"];
      $genre=$_POST["genre"];
      // extract($_POST); => reprend toutes les variables du name de input comme genre et age
      // il est utilisé comme un raccourci pour toutes ces variables.

      if (isset($_POST["envoi"])) {
        echo $_POST["genre"];
      }
      // Ce if permet de reprendre le genre qu'on peut cocher et de la renvoyer pour le bouton radio.

      if ($age <12) {
        if($genre=='homme'){
        $saluer= "Salut petit!";
        }
        else{
          $saluer= "Salut petite!";
        }
      }
//
// il existe 2 manieres, soit on integre une condition dans une autre condition comme ecris en haut
// // ou on crée un else apres le if mais à l extérieur de la premiere condition .
// Ne pas indiquer 2x la meme chose, cela ne sert a rien ! bien faire attention a genre
// on n utilise pas genre pour demander un true ou false, mais ici dans ce cas-ci c'est
// homme ou femme qu'on veut renvoyer !
    if ($age>=12 && $age <18) {
        if($genre=='homme'){
        $saluer= "Salut l'ado!";
        }
        else {
          $saluer= "salut l'adolescente!";
      }
    }
    if ($age>=18 && $age<115 && $genre =="homme") {
          $saluer= "Salut l'adulte!";
          }
          else {
            $saluer= "Salut la vieille";
      }
    if ($age>=115) {
        if ($genre=='homme'){
          $saluer= "Wow! Toujours vivant?";
          }
          else {
            $saluer = "Wow! A quand ta mort?";
          }
      }
      echo $saluer;

      ?>
  </p>
