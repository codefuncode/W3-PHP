 <?php

// Definición y Uso de

// La array_diff() la función de comparar los valores de dos (o más) de las matrices, y devuelve las diferencias.

// Esta función compara los valores de dos (o más) de las matrices, y devuelve un array que contiene las entradas de array1 que no están presentes en matriz2 o array3, etc.

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_diff($a1, $a2);
print_r($result);
echo '<hr/>';
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "black", "g" => "purple");
$a3 = array("a" => "red", "b" => "black", "h" => "yellow");

$result = array_diff($a1, $a2, $a3);
print_r($result);
