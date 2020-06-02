<?php
// Definición y uso

// La función array_column () devuelve los valores de una sola columna en la matriz de entrada.
// Una matriz que representa un posible conjunto de registros devuelto por una base de datos.
// array_column(array, column_key, index_key)
$a = array(
    array(
        'id'         => 5698,
        'first_name' => 'Peter',
        'last_name'  => 'Griffin',
    ),
    array(
        'id'         => 4767,
        'first_name' => 'Ben',
        'last_name'  => 'Smith',
    ),
    array(
        'id'         => 3809,
        'first_name' => 'Joe',
        'last_name'  => 'Doe',
    ),
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
echo '<hr/>';
$a = array(
    array(
        'id'         => 5698,
        'first_name' => 'Peter',
        'last_name'  => 'Griffin',
    ),
    array(
        'id'         => 4767,
        'first_name' => 'Ben',
        'last_name'  => 'Smith',
    ),
    array(
        'id'         => 3809,
        'first_name' => 'Joe',
        'last_name'  => 'Doe',
    ),
);
//  Solo espaera 3 parametros no mas
$last_names = array_column($a, 'last_name', 'id');
print_r($last_names);
