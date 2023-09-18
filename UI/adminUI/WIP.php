<?php
//Saving data...
require '../../Data/connexion.php';
require './controlForm.php';

if ($formComplete == true) {
    $saveUcData = "INSERT INTO usedcars (`brand`, `model`, `power`, `ye4r`, `mileage`, `d3scription`, `price`, `picture1`, `picture2`, `picture3`)
                VALUES('$brand', '$model', '$power', '$year', '$mileage', '$description', '$price', '$file', '$file2', '$file3')";
    $sv = $db->prepare($saveUcData);
};

if (isset($_POST['publish-btn'])) {
    $sv->execute();
    echo 'Données sauvegardées';
} else {
    echo 'Echec de la sauvegarde';
};



//Saving data...
require '../../Data/connexion.php';
require './controlForm.php';

if ($formComplete == true) {
    $saveUcData = "INSERT INTO usedcars (`brand`, `model`, `power`, `ye4r`, `mileage`, `d3scription`, `price`, `picture1`, `picture2`, `picture3`)
                VALUES('$brand', '$model', '$power', '$year', '$mileage', '$description', '$price', '$file', '$file2', '$file3')";
    $db->exec($saveUcData);
    echo 'Données sauvegardées';
} else {
    echo 'Echec de la sauvegarde';
}
