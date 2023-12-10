CREATE TABLE IF NOT EXISTS categorie(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    categorie VARCHAR(255) NOT NULL
);

INSERT INTO categorie(categorie) 
    VALUES ("Developper"),
           ("Entrepreneur"),
           ("Recruté");


CREATE TABLE IF NOT EXISTS contact(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom CHAR(255) NOT NULL,
    categorie_id INT  NOT NULL,
    CONSTRAINT fk_categorie
        FOREIGN KEY (categorie_id)
        REFERENCES categorie(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

INSERT INTO contact(nom,prenom,categorie_id) 
    VALUES ("DIALLO","Ousmane",3),
           ("DIALLO","Sidi",1),
           ("OUEDRAOGO","Moussa",2);