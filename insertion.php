<?php
$bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

$nom = $_POST['Nom'] ?? '';
$prenom = $_POST['Prenom'] ?? '';
$ville = $_POST['Ville'] ?? '';
$sexe = $_POST['sexe'] ?? '';
$date = $_POST['date'] ?? '';
$classe_nom = $_POST['classe_id'] ?? ''; 
$diplome_nom = $_POST['diplome_id'] ?? ''; 

// Préparation de la requête pour l'insertion dans la table 'eleve'
$requeteEleve = $bdd->prepare("INSERT INTO eleve VALUES (NULL, :nom, :prenom, :ville, :sexe, :date_naissance, :classe_id, :diplome_id)");
$requeteEleve->bindParam(':nom', $nom);
$requeteEleve->bindParam(':prenom', $prenom);
$requeteEleve->bindParam(':ville', $ville);
$requeteEleve->bindParam(':sexe', $sexe);
$requeteEleve->bindParam(':date_naissance', $date);
$requeteEleve->bindParam(':classe_id', $classe_id);
$requeteEleve->bindParam(':diplome_id', $diplome_id);

// Préparation de la requête pour l'insertion dans la table 'classe'
$requeteClasse = $bdd->prepare("INSERT INTO classe (nom_classe) VALUES (:nom_classe)");
$requeteClasse->bindParam(':nom_classe', $classe_nom);

// Préparation de la requête pour l'insertion dans la table 'diplome'
$requeteDiplome = $bdd->prepare("INSERT INTO diplome (nom_diplome) VALUES (:nom_diplome)");
$requeteDiplome->bindParam(':nom_diplome', $diplome_nom);

// Exécution des requêtes
$insertISok = $requeteClasse->execute() && $requeteDiplome->execute() && $requeteEleve->execute();

// $message = ($insertISok) ? 'Les données ont été ajoutées dans la base de données' : 'Erreur lors de l\'ajout des données';
?>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

$recuperation = $bdd->query('SELECT * FROM eleve');



$recuperation->execute();

if ($recuperation) {
header('Location: index.php');
exit();
} else {
echo "la redirection na pas marché";
}


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1><?php echo $message; ?></h1>

</body>
</html> -->








<!-- USE tp;

CREATE TABLE diplome (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_diplome VARCHAR(255) NOT NULL
);

CREATE TABLE classe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_classe VARCHAR(255) NOT NULL
);

CREATE TABLE eleve (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    sexe VARCHAR(1) NOT NULL,
    date_naissance DATE NOT NULL,
    classe_id INT,
    diplome_id INT,
    FOREIGN KEY (classe_id) REFERENCES classe(id),
    FOREIGN KEY (diplome_id) REFERENCES diplome(id)
); -->