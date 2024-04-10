<?php

$objectpdo = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

//preparation de la requete
$pdo = $objectpdo->prepare('UPDATE eleve SET nom=:nom, prenom=:prenom, ville=:ville, sexe=:sexe,
 date_naissance=:date_naissance, classe_id=:classe_id, diplome_id=:diplome_id WHERE id=:id LIMIT 1');

//liaison du parametre 
$pdo->bindValue(':id', $_POST['id'], PDO::PARAM_INT);

//liaison des autres parametres 
$pdo->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdo->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdo->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
$pdo->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);
$pdo->bindValue(':date_naissance', $_POST['date_naissance'], PDO::PARAM_STR);
$pdo->bindValue(':classe_id', $_POST['classe_id'], PDO::PARAM_INT);
$pdo->bindValue(':diplome_id', $_POST['diplome_id'], PDO::PARAM_INT);

$execute = $pdo->execute();

if ($execute) {
    $message = 'Le contact a été mis à jour.';
} else {
    $message = 'Échec lors de la mise à jour.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification: résultat</title>
</head>
<body>
    
    <h1><?= $message ?></h1>

</body>
</html>
