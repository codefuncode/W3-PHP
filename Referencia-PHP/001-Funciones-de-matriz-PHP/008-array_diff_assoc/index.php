<?php
// Definición y Uso de

// La array_diff_assoc() función compara las claves y los valores de dos (o más) de las matrices, y devuelve las diferencias.

// Esta función compara las claves y los valores de dos (o más) de las matrices, y devuelve un array que contiene las entradas de array1 que no están presentes en matriz2 o array3, etc.

$a1 = array("a" => "red", "b" => "green", "y" => "blue", "d" => "yellow");
$a2 = array("x" => "red", "b" => "green", "c" => "blue");

$result = array_diff_assoc($a1, $a2);
print_r($result);
