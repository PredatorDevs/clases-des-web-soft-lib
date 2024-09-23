<?php

//asi se escriben comentarios de una sola linea
$variableTexto = "Esto es un texto/string";
$variableNumerica = 19;

$variableDecimal = 199.99;

$variableBooleana = true;

$variableLista = [];

//$variableObjeto = className();

$variableNull = null;

//imprimir/mostrar variables en la web
echo $variableTexto;

//mezclando variables con etiquetas HTML
echo "<h1>Imprimiendo la variable con valor <span style='color:red;'>{$variableTexto}</span></h1>";

//Ejemplo de estructura if
$mayoriaEdad = 20;
if($mayoriaEdad >= 18){
    echo "Tu edad es {$mayoriaEdad}, eres mayor de edad.";
}else if($mayoriaEdad == 18){
    echo "Tu edad es {$mayoriaEdad}, posees la edad exacta.";
}else{
    echo "Tu edad es {$mayoriaEdad}, eres menor de edad.";
}

//Ejemplo de estructura switch
switch($mayoriaEdad){
    case 17:
        echo "Posees 17 años";
        break;
    case 18:
        echo "Posees 18 años";
        break;
    case 19:
        echo "Posees 19 años";
        break;
    default:
        echo "Tu edad no entra en ningún rango";
        break;
}

//ejemplo de estructura while
echo "<br>";

$variableContador = 1;

while($variableContador <= 18){
    echo "Numeros del 1 hasta el 18 con while: {$variableContador}<br>";
    $variableContador++;
}

//ejemplo de estructura for
for($i = 1; $i <= 18; $i++){
    echo "Numeros del 1 hasta el 18 con for: {$i}<br>";
}
?>
