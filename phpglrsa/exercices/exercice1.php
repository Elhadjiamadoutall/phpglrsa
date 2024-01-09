<?php
       include_once("fonctions.php");
         /*
         *  Exercice 1 :
         *   Definir et initialier un tableau de numerique (reel ou entier)
         *   Fonctions 
         *     --Affiche le tableau
         *     --Compte le nombre de valeurs paires
         *     --Tranferer dans tableau T1 tous les entiers
         *     --Tranferer dans tableau T2 tous les reels mais sans doublons
         */

  
         
        //--Compte le nombre de valeurs paires
        function compteValPaire(array $t ):int{
            $cpt=0;
            foreach ($t as  $value) {
                   if(is_int($value) && $value%2==0){
                       $cpt++;
                   }
             }
             return  $cpt;
           }

           //--Tranferer dans tableau T1 tous les entiers

           function tranfertInt(array $t ):array{
            $tabInt=[];
            foreach ($t as  $value) {
                   if(is_int($value) ){
                    $tabInt[]=$value;
                   }
             }
             return  $tabInt;
           }

           // --Tranferer dans tableau T2 tous les reels mais sans doublons

           function isPresent(array $t,int|float $val ):bool{
            foreach ($t as  $value) {
                   if($value==$val ){
                       return true;
                   }
             }
             return  false;
           } 
           
           function tranfertFloat(array $t,array &$tabFloat):void{
              foreach ($t as  $value) {
                   if(is_float($value) &&  !isPresent($tabFloat, $value) ){
                        $tabFloat[]=$value;
                   }
               }
           }

           //Appel des Fonctions 
           $tab=[1,1.4,34,12.56,0,12.56];
           showTab($tab);
           echo ("<br>===Compteur=====<br>");
             $cpt= compteValPaire($tab);
            echo("<br>Le nombre de valeurs Paires est  $cpt<br>");
              echo ("<br>===Tableau Entier=====<br>");
                 $tabInt=tranfertInt($tab);
                  showTab($tabInt);
                  $tabFloat=[];
               tranfertFloat($tab,$tabFloat);
                echo ("<br>============<br>");
               showTab($tabFloat);


?>

