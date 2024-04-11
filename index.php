<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Garde</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Bienvenue dans les formulaires d'inscription</h1>
        </div>
        <div class="links">
            <a href="create_eleve.php">Vers la page élève</a>
            <a href="creation_classe.php">Vers la creation de la classe</a>
        </div>
    </div>
       
    <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');
        $recuperation = $bdd->query('SELECT * FROM eleve');
    ?>

    <div class="containers">
        <?php foreach ($recuperation as $resultat): ?>
            <div class="eleve">
                <ul>
               <li> ID: <?php echo $resultat['id'] ?> </li>
                <li>Nom: <?php echo $resultat['nom']; ?></li>

                    <li>Prénom: <?php echo $resultat['prenom']; ?></li>
                    <li>Ville: <?php echo $resultat['ville']; ?></li>
                    <li>Sexe: <?php echo $resultat['sexe']; ?></li>
                    <li>Date de naissance: <?php echo $resultat['date_naissance']; ?></li>
                    <li>La classe: <?php echo $resultat['classe_id']; ?></li>
                    <li>Le diplôme: <?php echo $resultat['diplome_id']; ?></li>
                </ul>
                <div class="actions">
                    <a href="./delete_eleve.php?id=<?php echo $resultat['id']; ?>">
                        <button>Supprimer</button>
                    </a>
                    <a href="./modifier_eleve.php?id=<?php echo $resultat['id']; ?>" style="color: red;">
                        Modifier
                    </a>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>

</body>
</html>
