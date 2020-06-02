<?php
// Definición y uso

// La función array_combine () crea una matriz utilizando los elementos de una matriz de 'claves' y una matriz de 'valores'.

// Nota: ¡Ambas matrices deben tener el mismo número de elementos!

$fname = array("Peter", "Ben", "Joe");
$age   = array("35", "37", "43");

$c = array_combine($fname, $age);
print_r($c);
