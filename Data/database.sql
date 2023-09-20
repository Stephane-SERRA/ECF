/*Création de la base de données*/
CREATE DATABASE garage_parrot;




/*ADMINISTRATEUR*/
/*Création de la table "admin"*/
CREATE TABLE admin
(
    id_admin INT PRIMARY KEY NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    log1n VARCHAR(20) NOT NULL,
    pa55word VARCHAR(256) NULL
);

/*Insertion des données administrateur pour la première connexion*/
INSERT INTO admin (id_admin, first_name, last_name, log1n, pa55word) VALUES ("1", "Stéphane", "SERRA", "admin", "4dm1n");

/*Modification de l'identifiant et du mot de passe administrateur*/
UPDATE admin SET log1n = 'newLogin', pa55word = 'newPassword' WHERE id_admin = 1;




/*EMPLOYES*/
/*Création de la table "employees"*/
CREATE TABLE employees
(
    id_employee INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    mail VARCHAR(256) NOT NULL,
    ident VARCHAR (50) NOT NULL,
    pa55word VARCHAR(256) NOT NULL
);

/*Création d'un employé par insertion des données*/
INSERT INTO employees (first_name, last_name, mail, ident, pas55word)
VALUES ("Nom", "Prénom", "adresse@mail", "identifiant", "Mot-de-passe");

/*Supression d'un employé par effacement des données*/
DELETE FROM employees WHERE ident = "identifiant";




/*UTILISATEURS AYANT POSTE UN AVIS OU AYANT FAIT UNE DEMANDE DE RENSEIGNEMENT*/
/*Création de la table "users"*/
CREATE TABLE users
(
    id_user INT PRIMARY AUTO_INCREMENT KEY NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    mail VARCHAR(256) NOT NULL,
    phone_number CHAR(10) NOT NULL
);

/*Création d'un utilisateur par insertion de données*/
INSERT INTO users (first_name, last_name, mail, phone_number)
VALUES ("Nom", "Prénom", "adresse@mail", 0612345678);

/*Consultation des données de l'utilisateur*/
SELECT first_name, last_name, mail, phone_number FROM employees WHERE first_name = "Nom" AND last_name = "Prénom";

/*Supression d'un utilisateur*/
DELETE FROM users WHERE mail = "adresse@mail";




/*LISTE DES VEHICULES D'OCCASION*/
/*Création de la table "usedcars"*/
CREATE TABLE usedcars
(
    id_usedCar INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    brand VARCHAR(30) NOT NULL,
    model VARCHAR(30) NOT NULL,
    power VARCHAR(20) NOT NULL,
    ye4r INT(4) NOT NULL,
    mileage INT(6) NOT NULL,
    d3scription TEXT(300) NULL,
    price INT(6) NULL,
    picture1 VARCHAR (100) NULL,
    picture2 VARCHAR (100) NULL,
    picture3 VARCHAR (100) NULL
);

/*Création d'un véhicule d'occasion / annonce*/
INSERT INTO usedcars (brand, model, power, ye4r, mileage, d3scription, price, picture1, picture2, picture3)
VALUES("Marque", "Modèle", "Energie", "Année", "Kilométrage", "Texte-descriptif", "Prix", "Fichier-img1", "Fichier-img2", "Fichier-img3");

/*Consultation des données d'un véhicule d'occasion*/
SELECT * FROM usedcars WHERE id_usedcar = "id";

/*Filtration de la recherche d'un véhicule par Année, Kilométrage et Prix*/
SELECT * FROM usedcars 
WHERE 
    ye4r >= "minSelected-year" 
    AND ye4r <= "maxSelected-year" 
    AND mileage >= "minSelected-mileage" 
    AND mileage <= "maxSelected-mileage" 
    AND price >= "minSelected-price" 
    AND price <= "maxSelected-price"
;

/*Modification d'un véhicule d'occasion / annonce*/
UPDATE usedcars 
    SET 
    brand = 'Marque', 
    model = 'Modèle', 
    power = 'Energie', 
    ye4r = 'Année', 
    mileage = 'Kilométrage',
    d3scription = 'Description',
    price = 'Prix',
    picture1 = 'Fichier-img1',
    picture2 = 'Fichier-img2',
    picture3 = 'Fichier-img3'
    WHERE id_usedcar = "id"
;

/*Supression d'un véhicule d'occasion / annonce*/
DELETE FROM usedcars WHERE id_usedcar = "id";




/*LISTE DES AVIS DES INTERNAUTES (vus sur le site et modérés par les employé)*/
/*Création de la table "reviews"*/
CREATE TABLE reviews
(
    id_review INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    content TEXT(200) NOT NULL,
    notation INT NOT NULL,
    release_date DATE NOT NULL,
    user_name VARCHAR(50) NOT NULL
);

/*Ajouter un avis*/
INSERT INTO reviews (title, content, notation, user_name)
VALUES ("Titre", "Texte-de-l'avis", "Note", "Nom");

/*Consultation de la liste des avis dans l'ordre chronologique*/
SELECT * FROM reviews ORDER BY release_date DESC;

/*Consultation d'un avis en particulier*/
SELECT * FROM reviews WHERE id_review = "id";

/*Supression d'un avis*/
DELETE FROM reviews WHERE id_review = "id";




/*LISTE DES SERVICES ATELIER (modifiables par l'administrateur)*/
/*Création de la table "workshop_services"*/
CREATE TABLE workshop_services
(
    id_workshop_service INT NOT NULL PRIMARY KEY,
    type_service VARCHAR(50) NOT NULL,
    service_1 VARCHAR(100) NULL,
    service_2 VARCHAR(100) NULL,
    service_3 VARCHAR(100) NULL,
    service_4 VARCHAR(100) NULL,
    service_5 VARCHAR(100) NULL,
    service_6 VARCHAR(100) NULL
);

/*Insertion des données des services atelier*/
INSERT INTO workshop_services (
    id_workshop_service, 
    type_service, 
    service_1, 
    service_2, 
    service_3, 
    service_4, 
    )
VALUES (
    1, 
    "Service rapide", 
    "Remplacement des pneumatiques",
    "Révision périodique / vidange avec filtres",
    "Remplacement des plaquettes/disques de frein",
    "Contrôle technique"
    );

INSERT INTO workshop_services (
    id_workshop_service, 
    type_service, 
    service_1, 
    service_2, 
    service_3, 
    service_4,
    service_5,
    service_6 
    )
VALUES (
    2, 
    "Service mécanique", 
    "Amortisseurs/Bras de suspension",
    "Echappement",
    "Transmission/Embrayage/Boite de vitesse",
    "Distribution",
    "Climatisation",
    "Operations mecaniques complexes"
    );

INSERT INTO workshop_services (
    id_workshop_service, 
    type_service, 
    service_1, 
    service_2, 
    service_3, 
    service_4,
    service_5 
    )
VALUES (
    3, 
    "Remplacement de pare-brise", 
    "Eclairage/Signalisation",
    "Débosselage",
    "Transmission/Embrayage/Boite de vitesse",
    "Remplacement d'éléments de carrosserie",
    "Peinture",
    );

/*Modifier les services atelier*/
UPDATE workshop_services
    SET 
    type_service = "Type-service", 
    service_1 = "service ou null", 
    service_2 = "service ou null", 
    service_3 = "service ou null", 
    service_4 = "service ou null",
    service_5 = "service ou null",
    service_6 = "service ou null"
    WHERE id_services_schedule = "id"
;




/*HORAIRES DU SERVICE ATELIER*/
/*Création de la table "services_schedules"*/
CREATE TABLE services_schedules
(
    id_services_schedule INT NOT NULL PRIMARY KEY,
    day_schedule VARCHAR(25) NOT NULL,
    open_mrng_time VARCHAR(5) NOT NULL,
    close_mrng_time VARCHAR(5) NOT NULL,
    open_aftn_time VARCHAR(5) NOT NULL,
    close_aftn_time VARCHAR(5) NOT NULL,
    services_closed CHAR(5)
);

/*Insertion des horaires*/
INSERT INTO services_schedules 
(
    id_services_schedule, 
    day_schedule, 
    open_mrng_time, 
    close_mrng_time, 
    open_aftn_time, 
    close_aftn_time, 
    services_closed
)
VALUES 
(
    1, 
    "Du lundi au vendredi", 
    "8h00", 
    "12h00", 
    "14h00", 
    "18h00", 
    false
);

INSERT INTO services_schedules 
(
    id_services_schedule, 
    day_schedule, 
    open_mrng_time, 
    close_mrng_time, 
    open_aftn_time, 
    close_aftn_time, 
    services_closed
)
VALUES 
(
    2, 
    "Le samedi", 
    "8h00", 
    "12h00", 
    "14h00", 
    "18h00", 
    true
);

/*Modification des horaires*/
UPDATE services_schedules 
    SET 
    day_schedule = "Jour", 
    open_mrng_time = "Horaire-d'ouverture-matin", 
    close_mrng_time = "Horaire-de-fermeture-matin", 
    open_aftn_time = "Horaire-d'ouverture-aprèsMidi", 
    close_aftn_time = "Horaire-de-fermeture-aprèsMidi",
    services_closed = "True/False"
    WHERE id_services_schedule = 1
;




/*HORAIRES DU SERVICE COMMERCIAL*/
/*Création de la table "sales_schedules"*/
CREATE TABLE sales_schedules
(
    id_sales_schedule INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    day_schedule VARCHAR(25) NOT NULL,
    open_mrng_time VARCHAR(5) NOT NULL,
    close_mrng_time VARCHAR(5) NOT NULL,
    open_aftn_time VARCHAR(5) NOT NULL,
    close_aftn_time VARCHAR(5) NOT NULL,
    sales_closed CHAR(5)
);

/*Insertion des horaires*/
INSERT INTO sales_schedules 
(
    id_sales_schedule, 
    day_schedule, 
    open_mrng_time, 
    close_mrng_time, 
    open_aftn_time, 
    close_aftn_time, 
    sales_closed
)
VALUES 
(
    1, 
    "Du lundi au vendredi", 
    "8h30", 
    "12h00", 
    "14h00", 
    "19h00", 
    false
);

INSERT INTO sales_schedules 
(
    id_sales_schedule, 
    day_schedule, 
    open_mrng_time, 
    close_mrng_time, 
    open_aftn_time, 
    close_aftn_time, 
    sales_closed
)
VALUES 
(
    2, 
    "Le samedi", 
    "9h00", 
    "12h00", 
    "14h00", 
    "18h00", 
    true
);

/*Modification des horaires*/
UPDATE sales_schedules 
    SET 
    day_schedule = "Jour", 
    open_mrng_time = "Horaire-d'ouverture-matin", 
    close_mrng_time = "Horaire-de-fermeture-matin", 
    open_aftn_time = "Horaire-d'ouverture-aprèsMidi", 
    close_aftn_time = "Horaire-de-fermeture-aprèsMidi",
    sales_closed = "True/False"
    WHERE id_services_schedule = 1
;




/*AVIS POSTES EN ATTENTE D'ETRE CONTROLES*/
/*Création de la table "user_reviews"*/
CREATE TABLE users_reviews
(
    id_user_review INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    content TEXT(200) NOT NULL,
    release_date DATE(10) NOT NULL,
    notation INT NOT NULL,
    user_name VARCHAR(50) NOT NULL
);

/*Consultation de la liste des avis dans l'ordre chronologique*/
SELECT * FROM user_reviews ORDER BY release_date DESC;

/*Consultation d'un avis en particulier*/
SELECT * FROM user_reviews WHERE id_user_review = "id";

/*Supression d'un avis*/
DELETE FROM user_reviews WHERE id_user_review = "id";




/*DEMANDES DE RENDEZ-VOUS ATELIER*/
/*Création de la table "workshop_appointments"*/
CREATE TABLE workshop_appointments
(
    id_appointment INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    workshop_service_name VARCHAR(20) NOT NULL,
    request_date DATE NOT NULL,
    user_message TEXT(300) NOT NULL,
    user_phone_number CHAR(10) NOT NULL,
    user_email VARCHAR(256) NOT NULL
);

/*Consultation de la liste des rendez-vous*/
SELECT * FROM workshop_appointments;

/*Consultation d'un avis en particulier*/
SELECT * FROM workshop_appointments WHERE id_appointment = "id";

/*Supression d'un avis*/
DELETE FROM workshop_appointments WHERE id_appointment = "id";