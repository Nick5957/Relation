<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date = $_POST["date"];
$nationalite = $_POST["nationalite"];
$Sport = $_POST["sport"];
$equipe = $_POST["equipe"];

include("connexion.php");

$enregistrement = $connexion -> prepare("INSERT INTO joueur(nom_joueur,
prenom_joueur,date_de_naissance,nationalite,sport_pratique,equipe) 
VALUES(:nom, :prenom, :naissance, :nationalite, :sport, :equipe)");
$enregistrement -> execute([
    "nom" => $nom,
    "prenom" => $prenom,
    "naissance" => $date,
    "nationalite" => $nationalite,
    "sport" => $Sport,
    "equipe" => $equipe
]);

header("location:formulaire.php");
?>