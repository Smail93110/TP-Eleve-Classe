
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
); 