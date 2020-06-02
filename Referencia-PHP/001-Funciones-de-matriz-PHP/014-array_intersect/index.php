<?php
// Definición y uso

// La función array_intersect () compara los valores de dos (o más) matrices y devuelve las coincidencias.

// Esta función compara los valores de dos o más matrices y devuelve una matriz que contiene las entradas de matriz1 que están presentes en matriz2, matriz3, etc.
//  Devolverá  las coincidencias

$a1 = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow");

$a2 = array(
    "e" => "red",
    "f" => "green",
    "g" => "blue");

$result = array_intersect($a1, $a2);
print_r($result);

// ===========================================
$a1 = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow");

$a2 = array(
    "e" => "red",
    "f" => "black",
    "g" => "purple");

$a3 = array(
    "a" => "red",
    "b" => "black",
    "h" => "yellow");

$result = array_intersect($a1, $a2, $a3);
print_r($result);
// ===========================================

// ===========================================

//  Devolverá los valores que no son coincidencia
$a1 = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow");

$a2 = array(
    "e" => "red",
    "f" => "green",
    "g" => "blue");

$result = array_diff($a1, $a2);
print_r($result);
