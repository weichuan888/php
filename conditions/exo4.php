<!-- 4. Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle.

Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre. -->
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

         if (isset($_POST["envoi"])) {
           echo $_POST["genre"];
         }

         if ($age <12) {
           if($genre=='homme'){
           $saluer= "Salut petit!";
           }
           else{
             $saluer= "Salut petite!";
           }
         }

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
