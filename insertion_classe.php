<?php

$bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

$classe_nom = $_POST['nom_classe'] ?? '';

// Préparation de la requête pour l'insertion dans la table 'classe'
$requeteClasse = $bdd->prepare("INSERT INTO classe (id, nom_classe) VALUES (NULL, :nom_classe)");
$requeteClasse->bindParam(':nom_classe', $classe_nom, PDO::PARAM_STR);

// Exécution de la requête d'insertion
$resultat = $requeteClasse->execute();

if ($resultat) {
    header('Location: affichage_classe.php');
    exit();
} else {
    echo "La redirection n'a pas fonctionné.";
}

?>;