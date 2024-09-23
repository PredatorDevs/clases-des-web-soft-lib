<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $listadoFrutas = [];

  if (count($listadoFrutas) == 0) {
    echo "<h3 style='color:red;'>Tu listado posee 0 valores</h3>";
  } else {
    echo "<h3 style='color:blue;'>Tu listado posee <span style='color:green;'>" . count($listadoFrutas) . "</span></h3>";
  }
  ?>
  <ol>
    <?php for ($i = 0; $i <= 10; $i++) { ?>
      <li style="color: black"><?= "10 por {$i} = <span style='color:green'>" . ($i * 10) . "</span>" ?></li>
    <?php } ?>
  </ol>

  <ul>
  <?php
  // se da un valor de inicio, una condición y un decremento/resta a la variable iterativa
  for ($i = 10; $i >= 1; $i--) {
    echo "<li>10 por " . $i . " es igual a <span style='color:red'>" . $i * 10 . "</span></li>";
  }
  ?>
</ul>
</body>
</html>
