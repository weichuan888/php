<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tableau exo 1 php</title>
  </head>
  <body>


        <!-- Crée un array représentant ta famille.
        Affiche son contenu avec la fonction print_r
        Crée un array décrivant tes plats préférés.
        Affiche son contenu avec la fonction print_r
        Crée un array listant tes films et séries préférés.
        En utilisant cet array, affiche uniquement ton film/série préféré


     -->
    <?php
    $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
     echo $pays[2];
     echo '<br/>';

    $famille = ["Père", "Mère", "Soeur"];
    print_r ($famille);
    echo '<br/>';

    $plats= ["raclette", "steak", "pho", "poulet"];
    print_r ($plats);
    echo '<br/>';

    $films_series= ["Big Bang Theory", "How I met your mother", "Friends", "Titanic"];
    echo $films_series [0];
    echo '<br/>';

     ?>
     <!-- Exercice : tableaux associatif

    Décris-toi dans une tableau associatif: $moi.
    Utilise au moins deux valeurs de chaque type:
    texte (par exemple prenom),
    booléenne (par exemple aime_le_foot) et
    Int (par exemple: age, renvoie un chiffre). -->

    <?php
    $moi = [
      'prenom' => 'Weichuan',
      'age' => 24,
      'aime_la_nourriture' => 'true',
    ];
    print_r ($moi);
    echo '<br/>';
    echo $moi ['aime_la_nourriture'];
    echo '<br/>';
    echo '<br/>';
     ?>
     <!-- Exercices : tableau multi-dimensionnels

    Rajoute tes hobbies sous forme de tableau dans ton tableau $moi
    Crée un deuxième tableau similaire au tien, qui décrive ton papa
    (ou une personne de ta famille): $papa.
    Assure-toi d'y avoir également décrit ses hobbies
    Ensuite, à ton tableau $moi,
    ajoute un élément dont la clef est 'papa' et la valeur équivaut à $papa.
    Affiche le contenu de $moi via la fonction print_r().
    (Utilise la balises html <pre> pour rendre cela plus lisible).
    Relis ton code pour t'assurer de comprendre ce qui se passe à chaque ligne. -->

    <?php
    $papa = [
      'prenom' => 'Quang',
      'age' => 70,
      'aime_la_nourriture' => 'true',
      'hobbies' => array("IT", "lire", "photos")
    ];
    $moi = [
      'prenom' => 'Weichuan',
      'age' => 24,
      'aime_la_nourriture' => 'true',
      'hobbies' => array("musique", "jeux de société", "gastronomie"),
      'papa' => $papa,
    ];
    echo '<pre>';
    print_r ($moi);
    echo '<pre>';
    echo $moi['hobbies'][1];
    echo '<br/>';
    echo $moi ['papa']['hobbies'][1];
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';
     ?>

     <!-- Manipulation des array : Compter

Tu veux savoir combien de hobbies a ton père.
Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.
Compte tes propres hobbies
Additionne les deux et affiche le résultat
Ajouter
Un ami t'a fait découvrir les joies de la taxidermie.
Trouve la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".
Remplacer
Tu te disputes avec ton père et tu décides de changer de nom de famille.
Ta contestation n'a d'autre objet que de faire chier le système et
de faire parler de toi dans les médias. Tu choisis donc de porter le nom de Dieudonné.
Comment mettre à jour ton tableau pour refléter ce changement de nom de famille? -->
  <h2>Manipulation des array!</h2>
    <?php
    $papa = [
      'nom_de_famille'=> 'Tran',
      'prenom' => 'Quang',
      'age' => 70,
      'aime_la_nourriture' => 'true',
      'hobbies' => array("IT", "lire", "photos")
    ];
    $moi = [
      'nom_de_famille' => 'Tran',
      'prenom' => 'Weichuan',
      'age' => 24,
      'aime_la_nourriture' => 'true',
      'hobbies' => array("la musique", "les jeux de société", "la randonnée"),
      'papa' => $papa
    ];
    // $sousTableau = array_splice($moi ['nom_de_famille']0);
    // print_r($sousTableau);
    // $moi = ['nom_de_famille' => 'Dieudonné'];
    // $sousTableau = array_splice($moi ['nom_de_famille']0);
    // print_r($sousTableau);
    // array_push($moi ['hobbies'], 'taxidermie'); autre maniere d'ajouter un element
    $moi ['hobbies'][] = "taxidermie";
    $moi ['prenom'] = 'Dieudonné';
    // il suffit d'écrire le prenom par dessus...de la variable...
    echo '<pre>';
    print_r ($moi);
    echo '<pre>';

    $result = count ($moi ['hobbies']);
    echo ($result);
    echo '<br/>';
    $result2 = count($papa ['hobbies']);
    echo ($result2);
    echo '<br/>';
    echo $result + $result2;
    echo '<br/>';

    $toi = [
      'nom_de_famille' => "Ling",
      'prenom' => "Mi",
      'age' => 22,
      "hobbies" => array("Le chant", "la poésie", "la randonnée"),
    ];
    print_r($toi);
    $fusionTableau = array_merge_recursive ($moi, $toi);
    print_r($fusionTableau);

    $inter = array_intersect_assoc($moi, $toi);
    print_r($inter);

     ?>

 <!-- Créer un tableau à partir de deux tableaux (ou plus)

Un jour, tu rencontres ton $ame_soeur.
Décris-la sous forme d'un Tableau $toi .
Quels seront le ou les hobbies que votre enfant aura?

Il se trouve que tu as vu un documentaire à la télé
dans lequel un spécialiste en génétique héréditaire, expliquait qu'il y a 2 possibilités:

soit l'intersection (les hobby communs aux deux array),
soit la fusion (tous les hobby de chaque array).
 Devine le nom des 2 fonctions PHP correspondantes dans la documentation de PHP
(indice: elles commencent toutes deux par array_)
et teste leur syntaxe. Affiche le résultat de chacune via la fonction print_r().
Voir ci dessus!-->

<?php
  $web_developpement = [
    'frontend'
    'backend'
  ]
























 ?>



















  </body>
</html>
