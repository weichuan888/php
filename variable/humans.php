<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php variable</title>
  </head>
  <body>
    <h1>Bonjour
      <?php
        echo $_GET['Tran'];
      ?>
    </h1>
    <p>
      <?php
         $prenom= "weichuan";
         $age= 24 ;
         $hungry= true;
         $couleur_yeux= "black";
         $famille= array("Quang", "Tien", "Mei");
         echo ("je m'appelle " . $prenom . " et j'ai " . $age . " ans ")
      ?>
    </p>
  </body>
</html>
