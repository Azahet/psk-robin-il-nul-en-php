<?php 
include "BDDLogin.php" ;
include '../HELPERS/Helpers.php';
$CV_table = $PDO->query("SELECT * FROM `CV` WHERE Id = ".$_GET['id'] )->fetch();

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
<div class="container t-center">
<h1><?php echo  $CV_table['Prenom']."  ".$CV_table['Nom'] ?></h1>
                <div class="row">
                    <div class="column">
                    <?php echo  $CV_table['Adresse']?>
                    </div>
                    <div class="column">
                    <?php echo  $CV_table['DateNaissance']?>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                    <?php echo  $CV_table['Telephone']?>
                    </div>
                    <div class="column">
                    <?php echo  $CV_table['Portable']?>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                    <?php echo  $CV_table['Email']?>
                    </div>
                    <div class="column"> <?php echo  $CV_table['Profil']?>
                    </div>
                </div>

                <h1>Experience</h1>
                <table>
            <thead>
                <tr>
                    <th>Annee debut</th>
                    <th>Annee Fin</th>
                    <th>Institution</th>
                    <th>Poste</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $CV_table = $PDO->query("SELECT * FROM `Experience` WHERE CV_Id =".$_GET['id'])->fetchAll();

            foreach ($CV_table as $CV){ 
             echo '<tr>';
                HELPERS::echoHtml('td',$CV["Annee_Debut"]);
                HELPERS::echoHtml('td',$CV["Annee_Fin"]);
                HELPERS::echoHtml('td',$CV["Institution"]);
                HELPERS::echoHtml('td',$CV["Poste"]);
                HELPERS::echoHtml('td',$CV["Description"]);
                HELPERS::echoHtml('td'," <i class='material-icons'>build</i>");
                HELPERS::echoHtml('td',"<i class='material-icons'>delete</i>");
            echo '</tr>';
            }
?>
          
            <tr>
            <td><input id="ExpAnneDebut" type="text" placeholder="Annee Debut"></td>
            <td><input id="ExpAnneFin" type="text" placeholder="Annee Fin"></td>
            <td><input id="ExpInstitution" type="text" placeholder="Institution"></td>
            <td><input id="ExpPoste" type="text" placeholder="Poste"></td>
            <td><input id="ExpDescription" type="text" placeholder="Description"></td>
            <td><input class="button-primary w-100 ExpSubmit" type="Submit"  value="Cree"></td>
            <td></td>
</td>
            </tr>
            </tbody>
            </table>
                <h1>Formation</h1>
                <h1>Interet</h1>
                <h1>Langue</h1>
                <h1>Logiciel</h1>


</div>
</body>
<script type="text/javascript" src="app.js"></script>
</html>
