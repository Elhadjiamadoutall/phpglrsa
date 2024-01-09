<?php
// var_dump($_POST);


    define("WEBROOT","http://localhost:8000/");
    define("DB","../bd/ges_inscription.json");
    require_once("../bd/convert.php");
    fromJsonToArray();
    require_once("../repositories/demande.repository.php");
    $anneeEncours=getAnneeEncours();
    $etudiantConnect=connexion("etudiant@gmail.com","passer123");
    $etat="All";
    $demandeEtu=getDemandeByEtudiantAndAnneeEncours($etudiantConnect["id"],$anneeEncours["id"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande</title>
    <link rel="stylesheet" href="<?=WEBROOT?>style.css">
    <link rel="stylesheet" href="<?=WEBROOT?>style2.css">
</head>
<body>
    <?php
    require_once("../views/partial/menu.html.php");
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="add") {
            require_once("../views/add.demande.html.php");
        }elseif ($_REQUEST["action"]=="liste") {
            $demandeEtu=getDemandeByEtudiantAndAnneeEncours($etudiantConnect["id"],$anneeEncours["id"]);
            require_once("../views/liste.demande.html.php");
        }
        elseif ($_REQUEST["action"]=="form-filtre-demande") {
            $etat=$_REQUEST["etat"];
            $demandeEtu=getDemandeByEtudiantAndAnneeEncours($etudiantConnect["id"],$anneeEncours["id"],$etat);
            require_once("../views/liste.demande.html.php");
          }
          elseif ($_REQUEST["action"]=="detail") {
            $demandeEtu=getDemandeByEtudiantAndAnneeEncours($etudiantConnect["id"],$anneeEncours["id"],$etat);
            require_once("../views/liste.demande.html.php");
          }
          elseif ($_REQUEST["action"]=="form-add-demande") {
           
            $newDemande=
            [
                "id"=>2,
                "type"=>$_REQUEST['type'],
                "date"=>"12/01/2023",
                "motif"=>$_REQUEST['motif'],
                "etudiant_id"=>$etudiantConnect["id"],
                "annee_id"=>$anneeEncours["id"],
                "etat"=>"Encours"
            ];
            addDemande($newDemande);
            $demandeEtu=getDemandeByEtudiantAndAnneeEncours(1,$anneeEncours["id"]);
            require_once("../views/liste.demande.html.php");
          }
    }
    else{
        $demandeEtu =getDemandeByEtudiantAndAnneeEncours(1,$anneeEncours["id"]);
        require_once("../views/liste.demande.html.php");
        }
   


    ?>

</body>
</html>
