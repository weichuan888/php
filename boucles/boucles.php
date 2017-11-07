<!-- Exercices
    Voici un array :
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
Construis une boucle qui affiche chaque élément de l'array à l'aide de foreach
Ensuite, dans ta boucle, conjuge le verbe "coder" en fonction du pronom.
(utilise une condition pour cela) -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>boucle exo PHP</title>
  </head>
  <body>
    <?php
    $pronoms_personnels = array( ' Je ', ' Tu ', ' Il/Elle ', ' Nous ', ' Vous ', ' Elles/Ils ');
    foreach ($pronoms_personnels as $value) {
      echo $value;
      if ($value== ' Je ') {
        echo "code";
      }
      if ($value== ' Tu ') {
        echo "codes";
      }
      if ($value==' Il/Elle ') {
        echo "code";
      }
      if ($value== ' Nous ') {
        echo "codons";
      }
      if ($value== ' Vous ') {
        echo "codez";
      }
      if ($value== ' Elles/Ils ') {
        echo "codent . <br />";
      }

    }
     ?>
     <!-- Exercices -->
<!-- Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  while
Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  for -->
 <?php
 // $nombre_de_lignes = 1;
 // while ($nombre_de_lignes <= 120) {
 //   echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand je fais du PHP.<br />';
 //
 //   $nombre_de_lignes++;
 // }
 //
 // for ($nombre_de_lignes=1; $nombre_de_lignes<= 120 ; $nombre_de_lignes++) {
 //   echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
 // }
  ?>
  <!-- Crée un tableau contenant tous les prénoms des personnes composant ta classe.
   Affiche ces prénoms à l'aide d'une boucle.-->

   <?php
   $nom_de_la_classe = ['Alex ', ' Marie-Ange ', ' Ornella ', ' Laureen ', ' Mehdi ', ' Omar ', ' Valerian ', ' Syl ', ' Nicolas ', ' Jimmy ', ' Gaetan ', ' Stephane ', ' Delphine ', ' Kevin ', ' Nicolas ', ' Antoine ', ' Kevin ', ' Vincent ', ' Illias ', ' Thomas ', ' Marvin '];
   foreach ($nom_de_la_classe as $value) {
     echo $value;
     echo '<br/>';
   }
     ?>
<!-- Crée un tableau contenant au moins 10 pays du monde.
Une fois fait, utilise une boucle pour générer du html correspondant
à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html. -->

  <select class="formulaire" name="pays">
    <option value="Chine">Chine</option>
    <option value="Belgique">Belgique</option>
  </select>
  <?php
  $pays = [
    'Chine',
    'Belgique',
    'France',
    'Pays-Bas', 
    'Allemagne',
    'Suisse',
    'Angleterre',
    'Estonie',
    'Japon',
    'Mexique'];
  foreach ($pays as $name => $value) {
    echo "$value <br>";
  }


   ?>


<!-- A présent, modifie ton tableau contenant les pays pour qu'il soit
un tableau associatif:
la clef est le code ISO du pays,
la valeur étant le nom du pays:
par exemple: $pays = array('BE'=>'Belgique');
au lieu de simplement $pays = array('Belgique');.
Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html. -->


















  </body>
</html>
