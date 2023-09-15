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

/*Employés*/

CREATE TABLE employees
(
    id_employee INT PRIMARY KEY NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    mail VARCHAR(256) NOT NULL,
    pa55word VARCHAR(256) NULL
);

/*Utilisateurs ayant postés un avis ou ayant fait une demande de renseignements*/

CREATE TABLE users
(
    id_user INT PRIMARY KEY NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    log1n VARCHAR(20) NOT NULL,
    phone_number CHAR(10) NOT NULL
);

/*Liste des véhicules d'occasion*/

CREATE TABLE usedCars
(
    id_usedCar INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    brand VARCHAR(30) NOT NULL,
    model VARCHAR(30) NOT NULL,
    power VARCHAR(20) NOT NULL,
    ye4r INT(4) NOT NULL,
    mileage INT(6) NOT NULL,
    d3scription TEXT(300) NULL,
    price INT(6) NULL
);

/*Liste des avis des utilisateurs (vus sur le site et modérés par les employé)*/

CREATE TABLE reviews
(
    id_review INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    content TEXT(200) NOT NULL,
    notation INT NOT NULL,
    release_date DATE NOT NULL,
    user_name VARCHAR(50) NOT NULL
);

/*Liste des services atelier (modifiables par l'administrateur)*/

CREATE TABLE workshop_services
(
    id_workshop_service INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    type_service VARCHAR(50) NOT NULL,
    service_1 VARCHAR(100) NOT NULL,
    service_2 VARCHAR(100) NOT NULL,
    service_3 VARCHAR(100) NOT NULL,
    service_4 VARCHAR(100) NOT NULL,
    service_5 VARCHAR(100) NOT NULL,
    service_6 VARCHAR(100) NOT NULL
);

/*Horaires du service atelier*/

CREATE TABLE services_schedules
(
    id_services_schedule INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    day_schedule CHAR(10) NOT NULL,
    open_mrng_time TIME NOT NULL,
    close_mrng_time TIME NOT NULL,
    open_aftn_time TIME NOT NULL,
    close_aftn_time TIME NOT NULL,
    services_closed CHAR(5)
);

/*Horaires du service commercial*/

CREATE TABLE sales_schedules
(
    id_sales_schedule INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    day_schedule CHAR(10) NOT NULL,
    open_mrng_time TIME NOT NULL,
    close_mrng_time TIME NOT NULL,
    open_aftn_time TIME NOT NULL,
    close_aftn_time TIME NOT NULL,
    sales_closed CHAR(5)
);

/*Avis postés en attente d'être contrôlés*/

CREATE TABLE users_reviews
(
    id_user_review INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    content TEXT(200) NOT NULL,
    release_date DATE(10) NOT NULL,
    notation INT NOT NULL,
    user_name VARCHAR(50) NOT NULL
);

/*Demandes de rendez-vous atelier*/

CREATE TABLE workshop_appointments
(
    id_appointment INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    workshop_service_name VARCHAR(20) NOT NULL,
    request_date DATE NOT NULL,
    user_message TEXT(300) NOT NULL,
    user_phone_number CHAR(10) NOT NULL,
    user_email VARCHAR(256) NOT NULL
);