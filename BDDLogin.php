<?php
$PDO = null;
try {
    $PDO = new PDO('mysql:host=localhost;dbname=CVs', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>