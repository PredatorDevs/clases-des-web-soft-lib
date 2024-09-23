<?php

$animales = ["Perro", "Gato", "Elefante", "León", "Tigre", "Jirafa", "Zebra", "Oso", "Pingüino", "Canguro"];

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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select y checkbox</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-4">
    <form action="index.php" method="post">
      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="text-white">Manejo de select y checkbox</h3>
        </div>
        <div class="card-body">
          <div class="col-md-12">
            <select name="animalSelectList" class="form-select">
              <option selected disabled>-- Select an option --</option>
              <?php
              foreach ($animales as $animal) {
                if ($animal == $animalSelectList) {
              ?>
                  <option selected value="<?= $animal ?>"><?= $animal ?></option>
              <?php
                } else {
              ?>
                  <option value="<?= $animal ?>"><?= $animal ?></option>
              <?php
                }
              }
              ?>
            </select>
          </div>
          <div class="col-md-12">
            <?php
            foreach ($animales as $animal) {
            ?>
              <div class="form-check">
                <input class="form-check-input" name="animalCheckBox[]" type="checkbox" value="<?= $animal ?>">
                <label class="form-check-label" for="flexCheckDefault">
                  <?= $animal ?>
                </label>
              </div>
            <?php
            }
            ?>
          </div>

          <div class="col-md-12 mt-2 d-flex justify-content-center">
            <button class="btn btn-primary w-50" type="submit">Enviar</button>
          </div>

        </div>
      </div>
    </form>
  </div>
</body>
</html> 