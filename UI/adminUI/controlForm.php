<?php

/*AD CREATION FORM CONTROLLER*/

if (
    !empty($_POST['FormControlSelect0'])
    || !empty($_POST['FormControlinput0'])
    || !empty($_POST['FormControlTextarea1'])
    || !empty($_POST['FormControlSelect1'])
    || !empty($_POST['FormControlInput1'])
    || !empty($_POST['FormControlSelect2'])
    || !empty($_POST['FormControlInput2'])
) {
    $brand = $_POST['FormControlSelect0'];
    $model = $_POST['FormControlinput0'];
    $description = $_POST['FormControlTextarea1'];
    $power = $_POST['FormControlSelect1'];
    $mileage = $_POST['FormControlInput1'];
    $price = $_POST['FormControlInput2'];
    $year = $_POST['FormControlSelect2'];
    $formComplete = true;
} else {
    $formComplete = false;
};
