
<?php
include 'BDDLogin.php';

print_r($_POST);





$req = $PDO->prepare("INSERT INTO CV(  Nom,  Prenom,  Adresse,  DateNaissance, Telephone, Portable, Email, Profil) 
                      VALUES( :Nom, :Prenom, :Adresse, :DateNaissance, :Telephone, :Portable, :Email, :Profil)");

$req->execute(array(
            "Nom" => $_POST['Nom'], 
            "Prenom" => $_POST['Prenom'],
            "Adresse" => $_POST['Adresse'],
            "DateNaissance" => $_POST['DDN'],
            "Telephone"=> $_POST['Telephone'],
            "Portable"=> $_POST['Portable'],
            "Email"=> $_POST['Email'],
            "Profil"=> $_POST['Profil'],
            ));
?>