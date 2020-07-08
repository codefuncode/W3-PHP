 <?php

// Definición y uso

// La función array_chunk () divide una matriz en trozos de nuevas matrices.

$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
print_r(array_chunk($cars, 2));

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "Harry" => "50");
print_r(array_chunk($age, 3, true));
