<?php 
include "BDDLogin.php" ;
include '../HELPERS/Helpers.php';
$CV_table = $PDO->query("SELECT * FROM `CV`")->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="milligram.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1 class="t-center">Bienvenue, sur <b>CVCREATOR</b></h1>
        <h3>Liste des CV existant : </h3>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <tr>
            <?php
            foreach ($CV_table as $CV){ 
                echo '<tr>';
               HELPERS::echoHtml('td',$CV["Nom"]);
               HELPERS::echoHtml('td',$CV["Prenom"]);
               HELPERS::echoHtml('td',$CV["Adresse"]);
               HELPERS::echoHtml('td',$CV["Email"]);
               HELPERS::echoHtml('td',"<a href='cv.php?id=".$CV["Id"]."'><i class='material-icons'> open_in_browser  </i></a>");
               HELPERS::echoHtml('td'," <i class='material-icons'>build</i>");
               HELPERS::echoHtml('td',"<i class='material-icons'>delete</i>");
}  echo '</tr>';
?>
</tr>
            </tbody>
        </table>

        <h3>Crée une nouveau CV : </h3>
        <form action="CreateCv.php" method="post">
            
                <div class="row">
                    <div class="column">
                        <label for="Nom">Nom</label>
                        <input type="text" placeholder="Nom" id="Nom" name="Nom">
                    </div>
                    <div class="column">
                        <label for="PrenomField">Prenom</label>
                        <input type="text" placeholder="Prenom" id="PrenomField" name="Prenom">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="AdresseField">Adresse</label>
                        <input type="text" placeholder="Adresse" id="AdresseField"name="Adresse">
                    </div>
                    <div class="column">
                        <label for="DDNField">Date de naissance</label>
                        <input type="text" placeholder="Date de naissance" id="DDNField" name="DDN">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="TelephoneField">Telephone</label>
                        <input type="text" placeholder="Telephone" id="TelephoneField" name="Telephone">
                    </div>
                    <div class="column">
                        <label for="PortableField">Portable</label>
                        <input type="text" placeholder="Portable" id="PortableField" name="Portable">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="EmailField">Email</label>
                        <input type="text" placeholder="Email" id="EmailField" name="Email">
                    </div>
                    <div class="column">
                        <label for="ProfilField">Profil</label>
                        <input type="text" placeholder="Profil" id="ProfilField" name="Profil">
                    </div>
                </div>
                <input class="button-primary w-100" type="submit" value="Cree">
          
        </form>
    </div>
</body>

</html>