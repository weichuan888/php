<!-- 4. Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle.

Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre. -->

         <form action="exo4.php" method="post">
           <label for="age"> Quel est votre age ?</label>
           <input type="text" name="age" /></p>
           <br/>
           <label for="genre"> Genre :</label>
           <input name="genre" type="radio" value="homme">Homme
           <input name="genre" type ="radio" value="femme">Femme
           <br/>
           <br/>
           <label for="anglais"> Parles-tu anglais ?</label>
           <input type="radio" name="reponse" value="yes">Yes
           <input type="radio" name="reponse" value="no">No
           <br/>
           <div class="button"><button type="submit" name="ok">ok</button>
           </div>
         </form>

         <?php
         extract($_POST);

        //  if (isset($_POST["envoi"])) {
        //    echo $_POST["genre"];
        //    echo $_POST["reponse"];
        //  }


         if ($age <12) {
           if ($genre=='homme'){
             if ($reponse=="yes") {
                $saluer= "Hello Boy!";
             }else {
                $saluer= "Salut petit!";
             }
           }
           else if ($genre=='femme') {
             if ($reponse=="no") {
                $saluer= "Salut petite!";
             } else {
                $saluer= "Hello Girl!";
             }
           }
         }

        if ($age>=12 && $age <18) {
           if ($genre=='homme'){
             if($reponse=="yes") {
                $saluer= "Hello Teenage Boy!";
             } else {
                $saluer= "Salut l'ado!";
             }
           }
           else if ($genre=="femme") {
             if ($reponse=="no") {
               $saluer= "Salut l'adolescente!";
             } else {
               $saluer= "Hello Teenage Girl!";
             }
           }
        }

       if ($age>=18 && $age<115) {
         if ($genre =="homme") {
           if ($reponse=="yes") {
              $saluer = "Hello Sir!";
            } else {
              $saluer= "Salut l'adulte!";
            }
          }
          else if ($genre =="femme") {
            if ($reponse=="no") {
              $saluer = "Salut la vieille!";
            } else {
               $saluer= "Hello Lady";
            }
          }
        }

       if ($age>=115) {
           if ($genre=='homme') {
             if ($reponse=="yes") {
               $saluer="Wow, still alive, old man !";
             } else {
              $saluer= "Wow! Toujours vivant?";
             }
           }
           else if ($genre=="femme") {
             if ($reponse== "no"){
               $saluer ="Wow, a quand ta mort ?";
             } else {
               $saluer = "Wow, when are you going to died ?";
             }
           }
        }
         echo $saluer;

         ?>
