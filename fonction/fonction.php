<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = "Marc";
      echo '<p> Bonsoir ' . $name .'! </p>';
      echo '<hr>';
      $name = "Amandine";
      echo '<p> Bonsoir ' . $name .'! </p>';
      echo '<hr>';
      $name = "Jean";
      echo '<p> Bonsoir ' . $name .'! </p>';
      echo '<hr>';
    ?>

    <?php
      // function dis_salut($nom) {
      //   echo "<p> Salut" .$nom. "</p>";
      // }
      // dis_salut("Christ");
    ?>

    <!-- Bien mettre ces guillement et le point virgule !!!-->
    <?php
      // $chaine = "ornitorynque";
      // $chaine = str_shuffle($chaine);
      // echo $chaine;
    ?>

    <!-- Exercices  -->
    <!-- Utilise une fonction qui mette la première lettre de l'argument en majuscule.
    Par ex: si l'input de la fonction est "emile", l'output sera "Emile". -->

    <?php
      function premiere_lettre($input) {
      $input = "emile";
      echo ucfirst($input);
      }
      premiere_lettre();
      echo '<hr>';
   ?>

    <!-- Utilise la fonction fournie par PHP te permettant d'afficher l'année en cours. -->

    <?php
      $date = date('d-m-Y');
      echo ("Aujourd'hui, nous somme le $date");
      echo '<hr>';
    ?>

    <!-- Affiche à présent la date, l'heure, les minutes et les secondes,
     en utilisant la même fonction. -->

    <?php
      $DateTime = date('d-m-Y h:i:s');
      echo ("A cet instant, nous sommes le $DateTime");
      echo '<hr>';
    ?>

    <!-- Crée une fonction prenant deux arguments numériques et
    qui retourne la somme de ces deux arguments. -->

    <?php
      function addition ($num1, $num2) {
        echo $num1+$num2;
      }
      addition(3,2);
      echo '<hr>';
    ?>
     <!-- on crée une fonction addition, on ecrit nos 2 argument numériques
     on fait un appel echo, afin de lire le message de la fonction et qu'est qu'il va faire
     dans ce cas ci, on va utiliser le + pour additionner les argument numeriques
     ensuite on referme les crochets et on va appeller la fonction en ecrivant
     addition (3,4), celle ci va executer la fonction de l'echo, et utiliser les chiffres
     3 et 4 pour les additionner. -->


    <!-- Améliore la fonction précédente pour que si l'un des (ou les deux) arguments
    envoyés n'est pas une valeur numérique (int),
    la fonction retourne le message suivant: "Erreur, argument non numérique". -->

    <?php
      function addition1 ($num3, $num4) {
        if (is_int($num3)== true && is_int($num4)==true) {
          return $num3+$num4;
        }
        else {
          return ("Erreur, argument non numérique");
        }
      };
      echo addition1 (20,10);
      echo '<hr>';
     ?>

     <!-- is_int détermine si une variable est de type nombre entier. -->


    <!-- Crée une fonction qui prend en argument une chaîne de caractères (plusieurs mots)
    et qui retourne les initiales de chaque mot en majuscule.
    (Exemple: "In code we trust!" devient: ICWT). -->
    <?php
    // function initiales($nom){
    //     $n_mot = explode(" ",$nom);
    //     foreach($n_mot as $lettre){
    //         $nom_initiale .= $lettre{0}.'.';
    //     }
    //     return strtoupper($nom_initiale);
    // }
    // echo initiales('In we code trust');
    //
    //
    //
    // function initiales($chaine) {
    //   $chaine = "in we code trust";
    //   $word = explode("",$chaine);
    //   $initiale= '';
    //     foreach ($word as $w) {
    //       $initiale = $w[0];
    //     }
    //
    //     return strtoupper ($initiale);
    //
    //   // $chaine ="in we code trust";
    //   // $chaine = ucwords($chaine);
    //   // echo $chaine;
    // }
    // echo initiales($chaine);
    // pas finiiii !!!
     ?>

    <!-- Invente une fonction qui remplace les lettres "a" et "e" par le caractère "æ"
    dans chacune des chaînes suivantes:
     "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca". -->

   <?php
      $mot1 = "caecotrophie";
      $mot2 = "chaenichthys";
      $mot3 = "microsphaera";
      $mot4 = "sphaerotheca";

      function patate($lettre) {
        return str_replace("ae", "æ", $lettre);
      }
      function prout($remplacer) {
        return str_replace("æ", "ae", $remplacer);
      }
      echo prout(patate("$mot1, $mot2, $mot3, $mot4"));

      echo "<hr>";
   ?>

    <!-- Crée la fonction inverse, qui remplace le caractère "æ" par "ae"
    dans les chaines suivantes: cæcotrophie, chænichthys, microsphæra, sphærotheca -->

    <?php
    // $motA= "cæcotrophie";
    // $motB= "chænichthys";
    // $motC= "microsphæra";
    // $motD= "sphærotheca";
    //
    // function prout($remplacer) {
    //   return str_replace("æ", "ae", $remplacer);
    // }
    // echo prout("$motA, $motB, $motC, $motD");
    // echo "<hr>";
     ?>

  <!-- Crée une fonction te permettant de gérer des messages envers l'utilisateur
  grâce à deux arguments: le premier argument est le message,
  le second permet de spécifier un attribut de classe html qui sera utilisée
  par le CSS (par exemple: "info", "error", "warning").
  Grâce à cette fonction, on pourra écrire en php: -->
  <!-- echo feedback("adresse email incorrecte", "warning"); -->
  <!-- ce qui provoquera cette injection d'html: -->
  <!-- <div class="warning">Adresse email incorrecte.</div> -->

    <?php
      // echo feedback("adresse email incorrecte", "warning");
      $message= "erreur";
      $warning= "gyaaaaaaa";
      function feedback($message, $warning) {
        return "<div class=$warning>$message</div>";
      }
      echo feedback($message, $warning);
      echo "<hr>";
      //je crée 2 variables, et je l'incorpore dans ma fonction avec ces 2 arguments
      // je retourne la fonction en créeant une div, attention aux guillemet et point virugle!!!
      // en checkant avec l'inspector, on peut voir que la balise div s'est crée
      // J'appelle la fonction pour la tester
    ?>

    <!-- Trouve par toi-même dans la documentation php comment modifier
    ta fonction pour que, si le second argument n'est pas spécifié,
    sa valeur soit égale à "info". -->

    <?php
      $message2= "erreur";
      $warning2= "gyaaaaaaa";

      function feedback2($message2, $warning2 = "info") {
        return "<div class=$warning2>$message2</div>";
      }

      echo feedback2($message2,"lol");
      echo "<hr>";
    // Dans cette exercice, on crée 2 variables, et on crée une fonction avec 2 arguments
    // le second argument on lui met une valeur par défaut, en lui ajoutant info.
    // il retournera la fonction html dans l'inspector.
    // ensuite j'appelle la fonction $message, mais si je rajoute aussi "lol", la classe
    // va changer de nom en lol, sinon elle reprend la valeur par défaut.
    // Attention, on a mis des 2 partout c'est pour séparer de l'exercice précédent...
     ?>
  <!-- Crée un générateur de mots aléatoires, générant deux mots:
  un allant de 1 à 5 lettres, l'autre allant de 7 à 15 lettres.
  L'écran ne montrera que ceci:
  Un titre invitant l'utilisateur à générer un nouveau mot,
  ensuite: les deux mots générés,
  ensuite: un bouton permettant de rafraichir la page (et donc de recréer deux mots). -->
    <?php

    // function coq($letter) {
    //   $letter= "abcdefghijklmnopqrstuvwxy";
    //   $hello= str_shuffle($letter);
    //   $hello = substr($hello,0,5);
    //   return $hello;
    // }
    // echo coq()

  // Autre maniere plus simple, ci dessous, en incorporant une boucle !
  // .= signifie incorporer
  // chr reprend les valeurs decimale du tableau ascii du code afin d'afficher
  // les lettres aleatoires.
  // 97,122 represente les lettre de a à z selon le tableau de ASCII.
      function dinde() {
        $letter2= "";
        for ($i=0; $i <5 ; $i++) {
          $letter2 .= chr(rand(97,122));
        }
        return $letter2;
      }
      echo dinde();
      echo "<hr>";


    // Introduire le 2ieme mot aleatoire

    // function poule($letter3) {
    //   $letter3= "abcdefghijklmnopqrstuvwxy";
    //   $hello3= str_shuffle($letter3);
    //   $hello3 = substr($hello3,0,15);
    //   return $hello3;
    // }
    // echo poule()

      function poussin($letter4) {
        $letter4= "";
        for ($i=7; $i < 15; $i++) {
          $letter4 .= chr(rand(97,122));
        }
        return $letter4;
      }
      echo poussin();

    ?>
    <form class="bouton" action="fonction.php" method="post">
      <input type="submit" value="rafraichir">
    </form>

  <!-- Convertis la chaîne suivante:
  "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!" en lettres minuscules. -->

      <?php
        $phrase= "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
        $phrase= strtolower($phrase);
        echo $phrase;
        echo "<hr>";
      ?>
<!-- Afin qu'il te laisse tranquille, crée une fonction volume_dun_cone,
qui va calculer le volume du cône en fonction du rayon et de la hauteur.
Cette fonction ne va rien afficher,
on veut juste qu'elle nous renvoie le volume qu'on cherche.
Voici un schéma, pour bien t'embrouiller
(Ben oui, en réalité, les informations utiles à cette mission sont dans le code ci-dessus...) -->
      <?php

        function VolumeCone($rayon = '3', $hauteur = '4') {
        $volume= $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
           return $volume; // indique la valeur à renvoyer, ici le volume
      }
      echo VolumeCone();
      echo "<hr>";
       ?>
<!-- Invente une fonction reverse_string( $stringToReverse)
qui réécrit une chaine de caractères à l'envers. -->

      <?php
      echo strrev ("weichuan");
      ?>
<!-- En Wallonie, les mouvements de jeunesse ont une chanson populaire intitulée
"Buvons un coup ma serpette est perdue".
Utilise la fonction str_replace avec
 $substitutions = array( E, I, O, U, OU, É, È, OI, UI, OUI, AN, IN, ON, UN, OIN);
 pour transformer automatiquement les voyelles du couplet selon chaque élément
 de l'array et ainsi générer les paroles complètes de la chanson
 (le couplet avec chaque diphtongue remplacée). -->

      <?php
      $phras= "Bavas a ca ma sarpata a parda, Ma la macha ma la macha Bavas a ca ma sarpata a parda
Ma la macha a ravana.";
      $substitution = [E, I, O, U, OU, É, È, OI, UI, OUI, AN, IN, ON, UN, OIN];
        for ($i=0; $i < count($substitution) ; $i++) {
          echo str_replace("a", $substitution[$i], $phras);
          echo "<hr>";
        }
// on cree une variable contenant la phrase,
// on crée un tableau contenant les lettres a changer
// on crée une boucle pour que chaque lettre soit changer dans la phrase
// count($substitution) cest comme le length, la taille du tableau
// ensuite on utilise la fonction str_replace pour remplacer
// la voyelle par la variable de $substitution[$i] dans la phras


      echo count($substitution);
       ?>
















  </body>
</html>
