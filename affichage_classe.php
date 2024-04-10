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
            <h1>Tous les classes créer</h1>
        </div>
        <div class="links">
            <a href="eleve.php">Vers la page élève</a>
            <a href="creation_classe.php">Vers la creation de la classe </a>
        </div>
    </div>
       

       <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');
        $recuperation_classe = $bdd->query('SELECT * FROM classe' )->fetchAll();
            
        // var_dump($recuperation_classe->fetchAll());

        ?>
   

    <div class="containers">

   <?php foreach ($recuperation_classe as $resultat): 
     ?>
    
    <a href="./delete_classe.php?id=<?php echo $resultat['id']; ?>">
    <button>Supprimer</button>
</a>
<hr>


  <form action="insertion_classe.php" method="POST"> 
    <input name="id" value="<?php echo $resultat['id'] ?>" />

        <h2><?php echo $resultat['nom_classe']; ?></h2>
        <!-- Il reste 3 jours. -->
<?php endforeach; ?>

</div>


</body>
</html>