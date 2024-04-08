<?php
// Vérifie si l'ID à supprimer est passé en paramètre
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

    // Préparation de la requête de suppression
    $delete = $bdd->prepare('DELETE FROM eleve WHERE id=:id');

    // Liaison de la valeur de l'ID à supprimer
    $delete->bindValue(':id', $_GET['id']);

    // Exécution de la requête de suppression
   $delete->execute();


   // Vérifie si la suppression a réussi
   if ($delete) {
    header('Location: ./index.php');
    exit; 
} else {
    echo "La suppression n'a pas fonctionné.";
}


?>;