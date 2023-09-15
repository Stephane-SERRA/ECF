<?php
require '../../Data/connexion.php';

if (isset($_FILES['FormControlDownload1'])) {
    $tmpName = $_FILES['FormControlDownload1']['tmp_name'];
    $name = $_FILES['FormControlDownload1']['name'];
    $size = $_FILES['FormControlDownload1']['size'];
    $error = $_FILES['FormControlDownload1']['error'];
}

if (isset($_FILES['FormControlDownload2'])) {
    $tmpName2 = $_FILES['FormControlDownload2']['tmp_name'];
    $name2 = $_FILES['FormControlDownload2']['name'];
    $size2 = $_FILES['FormControlDownload2']['size'];
    $error2 = $_FILES['FormControlDownload2']['error'];
}

if (isset($_FILES['FormControlDownload3'])) {
    $tmpName3 = $_FILES['FormControlDownload3']['tmp_name'];
    $name3 = $_FILES['FormControlDownload3']['name'];
    $size3 = $_FILES['FormControlDownload3']['size'];
    $error3 = $_FILES['FormControlDownload3']['error'];
}

$tabExtension = explode('.', $name);
$tabExtension2 = explode('.', $name2);
$tabExtension3 = explode('.', $name3);
$extension = strtolower(end($tabExtension));
$extension2 = strtolower(end($tabExtension2));
$extension3 = strtolower(end($tabExtension3));
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
$maxSize = 400000;

if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
    $uniqueName = uniqid('', true);
    $file = $uniqueName . "." . $extension;
} else {
    echo "La taille ou l'extension du fichier 1 est refusée ou le fichier est manquant</br>";
}

if (in_array($extension2, $extensions) && $size <= $maxSize && $error == 0) {
    $uniqueName = uniqid('', true);
    $file2 = $uniqueName . "." . $extension2;
} else {
    echo "La taille ou l'extension du fichier 2 est refusée ou le fichier est manquant</br>";
}

if (in_array($extension3, $extensions) && $size <= $maxSize && $error == 0) {
    $uniqueName = uniqid('', true);
    $file3 = $uniqueName . "." . $extension3;
} else {
    echo "La taille ou l'extension du fichier 3 est refusée ou le fichier est manquant</br>";
}

imagejpeg($file);
