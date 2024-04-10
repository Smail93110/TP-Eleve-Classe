<?php

$bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

$pdo = $bdd->prepare('SELECT * FROM eleve WHERE id=:id ');


$pdo->bindValue(':id', $_GET['id']);


//execution de la requete
$execute = $pdo->execute();


//on recupere le resultat

$contact = $pdo->fetch();
// var_dump($contact);


?>;





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./formulaire.css">
  <title>Modification eleve</title>
  <style>
    .bouton-personnalise {
      background-color: #4CAF50; /* Vert */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
</head>
<body>



<div class="login-box">
  <form method="POST"  action="insertion_modifier_eleve.php">
    <h1 style="color: white;">Mofication de l'eleve </h1>
    <div class="user-box">

    <input type="hidden" name="id" value="<?php echo $contact['id'] ?>" />

      <input type="text" name="nom" value=" <?= $contact['nom']   ?>" >
      <label>Nom</label>
    </div>
    <div class="user-box">
      <input type="text" name="prenom"  value="<?= $contact['prenom']   ?>">
      <label>Mot de passe</label>
    </div>
    <div class="user-box">
      <input type="text" name="ville"  value="<?= $contact['ville']   ?>">
      <label>Ville</label>
    </div>
    <div class="user-box">
      <input type="text" name="sexe"  value="<?= $contact['sexe']   ?>">
      <label>Sexe</label>
    </div>
    <div class="user-box">
      <input type="date" name="date_naissance"  value="<?= $contact['date_naissance']   ?>"> 
    </div>
    <div class="user-box">
      <div class="classe">
        <label>Choisie ta classe</label>
      </div>
      <select name="classe_id">
        <option value="<?= $contact['classe_id']   ?>"> </option>
      </select>
    </div>
   
    <div class="user-box">
      <div class="diplomes">
        <label>Choisie ton diplome</label>
      </div>
      <select name="diplome_id">
        <option value="<?= $contact['diplome_id']   ?>"> </option>
      </select>
    </div>
    
    <center>


    <input type="submit" value="Enregistrer les Modification"  class="bouton-personnalise" />



    </center>
    <span></span>

  


  </form>
</div>


</body>
</html>



