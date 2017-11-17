<!-- 9. La structure "ternaire".

J'imagine que comme moi, vous n'aviez jamais entendu ce mot bizarre: "ternaire".
En fait, c'est pas très compliqué:
c'est une manière rapide de déterminer la valeur d'une variable en fonction d'une condition.

Exemple:

$age = 24;
$majeur = ($age >= 18) ? true : false;

Ce qui revient à écrire en php:

$age = 24;
if ($age >= 18)
{

	$majeur = true;

} else {

	$majeur = false;
}

10. Exercice ternaire

Dans un script ternaire.php déclare à l'aide d'une expression ternaire,
une variable $bonjour dont la valeur est un message de salutation
selon qu'une autre variable $genre soit 'H' ou 'F'.
Termine par afficher la valeur de $bonjour. -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo9-10</title>
  </head>
  <body>

    <?php
    $genre = "H";
    $bonjour = ($genre =="H") ? 'Bonjour Monsieur' : 'Bonjour Madame';
    echo $bonjour;
     ?>
   </body>
</html>

<!-- on crée une variable genre = "H" pour définir le genre qu'on veut
H signifie homme
ensuite on crée une deuxieme variable où on va insérer une sorte de condition avec
true ou false remplacé par bonjour monsieur et bonjour Madame
$bonjour = ($genre=="H") ?
signifie que la variable bonjour correspond-il a la variable genre qui elle est egale
à H ?
$bonjour = ($genre=="H") ? true : false;
on remplace true et false par d'autres phrases, mais sa valeur true ou false est
toujours utilisé!!!
et on finit par echo pour lire la variable. -->
