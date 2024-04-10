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
            <a href="creation_classe.php">Vers la page diplôme</a>
        </div>
    </div>
       
       <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');
        $recuperation = $bdd->query('SELECT * FROM eleve');
            

        ?>
   

    <div class="containers">

   <?php foreach ($recuperation as $resultat): ?>
    <a href="./delete_eleve.php?id=<?php echo $resultat['id']; ?>">
    <button>Supprimer</button>
</a>
<hr>


<a href="./modifier_eleve.php?id=<?php echo $resultat['id']; ?>" style="color: red;">modifier</a>




  <form action="insertion.php" method="POST"> 
    <input name="id" value="<?php echo $resultat['id'] ?>" />

        <h2><?php echo $resultat['nom']; ?></h2>
        <h3><?php echo $resultat['prenom']; ?></h3>
        <h3><?php echo $resultat['ville']; ?></h3>
        <h3><?php echo $resultat['sexe']; ?></h3>
        <h3><?php echo ($resultat['date_naissance']); ?></h3>
        <h3><?php echo $resultat['classe_id']; ?></h3>
        <h3><?php echo $resultat['diplome_id']; ?></h3>
        <!-- Il reste 3 jours. -->
<?php endforeach; ?>

</div>


</body>
</html>
