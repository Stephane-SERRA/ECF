
<?php

$firstName = $_POST['modal-firstName'];
$lastName = $_POST['modal-lastName'];
$userEmail = $_POST['modal-email'];
$phoneNUmber = $_POST['modal-phone'];

try {
    $pdo = new PDO("mysql:dbname=garage_parrot;host=localhost", "root", "");

    $pdo->exec('INSERT INTO users (first_name, last_name, email, phone_number) VALUES ($firstName, $lastName,$userEmail,$phoneNumber)');
    echo "Nouveaux enregistrement ajoutés avec succés";
} catch (PDOException $e) {
    echo 'Erreur' . "<br>" . $e->getMessage();
}
$pdo = null;

?>
