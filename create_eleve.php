


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./formulaire.css">
  <title>Creation de l'eleve</title>
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
  <form method="POST"  action="insertion_eleve.php">
    <h1 style="color: white;">Creation de l'eleve</h1>
    <div class="user-box">
      <input type="text" name="Nom" >
      <label>Nom</label>
    </div>
    <div class="user-box">
      <input type="text" name="Prenom" >
      <label>Mot de passe</label>
    </div>
    <div class="user-box">
      <input type="text" name="Ville" >
      <label>Ville</label>
    </div>
    <div class="user-box">
      <input type="text" name="sexe" >
      <label>Sexe</label>
    </div>
    <div class="user-box">
      <input type="date" name="date" > 
    </div>
    <div class="user-box">
      <div class="classe">
        <label>Choisie ta classe</label>
      </div>
      <select name="classe_id">
        <option value=""> </option>
      </select>
    </div>
   
    <div class="user-box">
      <div class="diplomes">
        <label>Choisie ton diplome</label>
      </div>
      <select name="diplome_id">
        <option value=""> </option>
      </select>
    </div>
    
    <center>


    <input type="submit" value="Envoyer le formulaire"  class="bouton-personnalise" />



    </center>
    <span></span>

  


  </form>
</div>


</body>
</html>



