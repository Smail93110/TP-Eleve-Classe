<?php

$bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

$classe_nom = $_POST['nom_classe'] ?? '';

// Préparation de la requête pour l'insertion dans la table 'classe'
$requeteClasse = $bdd->prepare("INSERT INTO classe (nom_classe) VALUES (:nom_classe)");
$requeteClasse->bindParam(':nom_classe', $classe_nom);

// Exécution de la requête d'insertion


$recuperation = $bdd->query('SELECT * FROM classe');


$resultat = $recuperation->execute();


if ($resultat) {
    header('Location: affichage_classe.php');
    exit();
} else {
    echo "La redirection n'a pas fonctionné.";
}

?>;