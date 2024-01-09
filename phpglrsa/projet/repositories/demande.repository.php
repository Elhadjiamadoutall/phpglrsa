
   <!-- //definir un tableau de 5  demandes
     //une demande est caracterise
        //numero, chaine genere aleatoirement
         //date 
         //Etat(Encours,Accepte,Refuse)
         //Type (Suspension ou Annulation)
         //motif
         //etudiant (matricule,nom,prenom,
                //dateNaiss(Date php),
                //classe(filiere,niveau,code))

// fonction qui retourne le tableau de demande
// fonction qui retourne le tableau de demande par type
// fonction qui retourne le tableau de demande par etat -->
<?php
    function getAllClasses() : array {
        return[
            [
                "id"=>1,
                "filiere"=>"GLRS",
                "niveau"=>"L2",
                "nom"=>"L2 GLRS A",
            ],
            [
                "id"=>2,
                "filiere"=>"CDSD",
                "niveau"=>"L2",
                "nom"=>"L2 CDSD",
            ],
            [
                "id"=>3,
                "filiere"=>"MAIE",
                "niveau"=>"L2",
                "nom"=>"L2 MAIE",
            ]
        ];
    }

    function getAllAnnees() : array {
        return[
            [
                "id"=>1,
                "nom"=>"2023-2024",
                "etat"=>1,
            ],
            [
                "id"=>2,
                "nom"=>"2022-2023",
                "etat"=>0,
            ],
            [
                "id"=>3,
                "nom"=>"2021-2022 ",
                "etat"=>0,
            ],
        ];
    }

    function getALLEtudiants() : array {
        return[
            [
                "id"=>1,
                "matricule"=>"MA001",
                "nom"=>"Yaya",
                "prenom"=>"Sow",
                "login"=>"etudiant@gmail.com",
                "password"=>"passer123",
                "classe_id"=>1,
            ],
            [
                "id"=>2,
                "matricule"=>"MA001",
                "nom"=>"Wan",
                "prenom"=>"Baila",
                "login"=>"etudiant2@gmail.com",
                "password"=>"passer123",
                "classe_id"=>2,
            ],
            [
                "id"=>3,
                "matricule"=>"MA001",
                "nom"=>"Niang",
                "prenom"=>"Aly",
                "login"=>"etudian3t@gmail.com",
                "password"=>"passer123",
                "classe_id"=>3,
            ]
        ];
    }

    function getAllDemandes() : array {
        
        return fromJsonToArray("demande");
        
    }

    function connexion(string $login,string $password) : array|null {
        $etudiants=getALLEtudiants();
        foreach ($etudiants as $value){
            if ($value["login"]==$login && $value["password"]==$password) {
                return $value;
            };
        }
        return null;
    };

    function getAnneeEncours() : array|null {
        $annees=getAllAnnees();
        foreach ($annees as $value){
            if ($value["etat"]==1) {
                return $value;
            };
        }
        return null;
    }

    function getDemandeByEtudiantAndAnneeEncours(int $etudianId,int $anneeId, $etat="All") : array|null {
        $demandes=getAllDemandes();
        $demandeEtu=[];
        foreach ($demandes as $value){
            if($etat=="All"){
                if($value["etudiant_id"]==$etudianId && $value["annee_id"]==$anneeId) {       
                    $demandeEtu[]=$value;
                }
            }else{
                if($value["etudiant_id"]==$etudianId && $value["annee_id"]==$anneeId && $value["etat"]==$etat){
                    $demandeEtu[]=$value;
                }
            }
        }
        return $demandeEtu;   
    } 
    function addDemande(array $demande):void{
        fromArrayToJson("demande",$demande);
    }
?>
