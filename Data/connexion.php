<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=garage_parrot', 'root', "");
} catch (PDOException $e) {
    die('Erreur connexion : ' . $e->getMessage());
}
