<?php
// Ejercicio de ejemplo 1: Estructura condicional if solo PHP
$listadoFrutas = ["Manzana", "Pera"];

// La función count es propia/nativa de PHP, retorna la cantidad de elementos en un array/objeto
if(count($listadoFrutas) == 0){
    echo "Tu listado posee 0 valores.";
}else{
    echo "Tu listado posee " . count($listadoFrutas) . " valores."; // Concatenación de valores con el signo .
}

echo "<br>";

// Ejercicio de ejemplo 2: Estructura repetitiva for

// Se da un valor de inicio, una condición y un aumento/suma a la variable iterativa
for($i = 0; $i <= 10; $i++){
    echo "<br>10 por " . $i . " es igual a " . ($i * 10);
}

echo "<br>";

// Se da un valor de inicio, una condición y un decremento/resta a la variable iterativa
for($i = 10; $i >= 1; $i--){
    echo "<br>10 por " . $i . " es igual a " . ($i * 10);
}
?>
