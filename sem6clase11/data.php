<?php
$animalSelectList = $_POST["animalSelectList"] ?? "";
if($animalSelectList != ""){
    echo "<pre>";
    print_r($animalSelectList);
    echo "</pre>";
    echo "<br>" . gettype($animalSelectList);
}

$animalCheckBox = $_POST["animalCheckBox"] ?? "";
if($animalCheckBox != ""){
    echo "<pre>";
    print_r($animalCheckBox);
    echo "</pre>";
    echo "<br>" . gettype($animalCheckBox);
}
?>
