<?php

$bdd = new PDO('mysql:host=localhost;dbname=tp', 'root', '');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation du Diplome</title>
    <link rel="stylesheet" href="./formulaire.css">
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
    <h1 style="color: white;"> Insertion des Diplomes Fournies </h1>
    <form method="POST" action="insertion.php">
        <div class="user-box">
            <input type="text" name="diplome" required="">
            <label>Ajout du diplome</label>
        </div>
        
        <input type="submit" value="Envoyer le formulaire"  class="bouton-personnalise" />
    </form>
</div>



</body>
</html>

