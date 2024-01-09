<?php 
    //Definition des contantes 
      const PI=3.14;
      define("PII",3.14);   //Cours
    //Variables de type simples
       $x=12;//entier
       $x=13.5;//reel
       $x="Bonjour"; //Chaine
       $x='Bonjour'; //Chaine  ou string 
       $x=true; //bool
       $x=null;//Vide 

   // Tableau 
      //Par defaut les tableaux sont numeriques i.e ils ont des index numeriques 
      //qui commencent par 0
      $tab=[1,13.5,"Bonjour",'Bonjour',true,null,[1,13.5,"Bonjour"]];
      $y=$tab[0];// $y=1
      $ok=$tab[4];
       //Parcours d'un tableau => boucle foreach()
          //Boucle a lecture seule 

       //Simple 
           foreach ($tab as  $value) {
               //  $value => 1,13,5.....
             }
       //General
       foreach ($tab as $key => $value) {
          //$key =>index  0  1     
          //    $value => 1,13,5.....
        }

      // Fonction 
         //Procedure ==> void
         //fonction   ==> Type de retour different de void
      //Par defaut les arguments d'une fonction sont des donnees
       
    //Php Version < 8
      function estPair($nbre){
        return $nbre%2==0;  
      }
      function somme($x,$y){
        $s=$x+$y;
        echo("La somme est $s");
      }
      //Php Version 8
      function estPair1(int $nbre):bool{
            return $nbre%2==0;   
      }

      function somme1(int $x,float $y):void{
          $s=$x+$y;
        echo("La somme est $s");
      }


      //Exercice 

        /*
         *  Exercice 1 :
         *   Definir et initialier un tableau de numerique (reel ou entier)
         *   Fonctions 
         *     --Affiche le tableau
         *     --Compte le nombre de valeurs paires
         *     --Tranferer dans tableau T1 tous les entiers
         *     --Tranferer dans tableau T2 tous les reels mais sans doublons
         */

         /*
         *  Exercice 2 :
         *   Definir une Matrice de O ou 1  
         *   Fonctions 
         *     --Affiche la Matrice
         *     --Compte le nombre de valeurs  de la Matrice
         *     --Tranferer le minimun de chaque ligne dans le tableau  T1 
         *     --Remplacer tous 1 par une valeur generer aleatoire entre 2 et 10
         */

?>



