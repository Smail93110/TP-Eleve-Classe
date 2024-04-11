<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Garde</title>
    <link rel="stylesheet" href="affichage_classe.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Toutes les classes créées</h1>
        </div>
        <div class="links">
            <a href="index.php">Vers la page élève</a>
            <a href="creation_classe.php">Vers la création de la classe</a>
        </div>
    </div>
       
    <div class="containers">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');
        $recuperation_classe = $bdd->query('SELECT * FROM classe');

        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Libellé</th> 
                <th>Actions</th>
            </tr>
            <?php foreach ($recuperation_classe as $resultat): ?>
                <tr>
                    <td><?php echo $resultat['id'] ?></td>
                    <td><?php echo $resultat['nom_classe'] ?></td>
                    <td>
                        <a href="delete_classe.php?id=<?php echo $resultat['id']; ?>">
                            <button>Supprimer</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
