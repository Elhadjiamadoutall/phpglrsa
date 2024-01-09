<?php 
     require_once("fonctions.php");
 /*
         *  Exercice 2 :
         *   Definir une Matrice de O ou 1  
         *   Fonctions 
         *     --Affiche la Matrice
         *     --Compte le nombre de valeurs  de la Matrice
         *     --Tranferer le minimun de chaque ligne dans le tableau  T1 
         *     --Remplacer tous 1 par une valeur generer aleatoire entre 2 et 10
         */
        $mat=[
            [1,0,0,0,1,0,0],
            [0,1,1]
        ];

        

           function showMat(array $m ):void{
              foreach ($m as  $value) {
                showTab($value);
                echo"<br>";
              }
           }


           showMat($mat);
           




?>