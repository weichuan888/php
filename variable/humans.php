<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php variable</title>
  </head>
  <body>
      <h1>Bonjour <?php echo $_GET['Tran']; ?>!</h1>

<!-- Initie une variable décrivant ton prénom.
Ensuite, sur une seconde ligne, initie une variable qui représente ton âge.
Ensuite, à la ligne suivante, initie une variable qui décrive si tu as faim ou pas.
Ensuite, à la ligne suivante, initie une variable qui décrive la couleur de tes yeux.
Ensuite, à la ligne suivante, initie une variable qui décrive ta famille (avec une variable Tableau, dont chaque entrée est le prénom d'un membre de ta famille). -->
       $prenom= "weichuan";
       $age= 24;
       $hungry= true;
       $couleur_yeux= "black";
       $famille= array("Quang", "Tien", "Mei");
      <?php echo "yo" ?>
  </body>
</html>
