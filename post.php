<?php
print_r($_POST);
include 'BDDLogin.php';


switch ($_POST['table']) {

    case "Experience":
        $req = $PDO->prepare("INSERT INTO Experience( Annee_Debut,  Annee_Fin, Institution,  Poste, Description, CV_Id) 
        VALUES( :Annee_Debut, :Annee_Fin, :Institution, :Poste, :Description, :CV_Id)");
        $req->execute(array(
        "Annee_Debut" => $_POST['Annee_Debut'], 
        "Annee_Fin" => $_POST['Annee_Fin'],
        "Institution" => $_POST['Institution'],
        "Poste" => $_POST['Poste'],
        "Description"=> $_POST['Description'],
        "CV_Id" => $_POST['id']
        ));
        header('Location: http://localhost:8888/PHP/CV/cv.PHP?id='.$_POST["id"]);
        exit();

        case "DeleteExperience":
        

}


?>