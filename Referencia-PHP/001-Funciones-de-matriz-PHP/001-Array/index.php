<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

$cars = array("Volvo", "BMW", "Toyota");

$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

// A two-dimensional array:
$cars = array
    (
    array("================Uno", 100, 96, 4, 100, 96, 4, 100, 96, 4, 100, 96, 4),
    array("================Dos", 60, 59, 60, 59, 60, 59, 60, 59),
    array("================Tres", 110, 100, 110, 100),
    array("================Cuatro", 110, 100),
    array("================Cinco", 60, 59, 60, 59, 60, 59, 60, 59),
    array("================Seis", 60, 59, 60, 59, 60, 59, 60, 59, 60, 59, 60, 59, 60, 59, 60, 59),
);

foreach ($cars as $x => $x_value) {

    foreach ($x_value as $value) {
        echo $value;
        echo '<br/>';
    }
}

for ($row = 0; $row < 4; $row++) {

    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";

    for ($col = 0; $col < 3; $col++) {

        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
$fila = count($cars);
$a    = array();

for ($i = 0; $i < $fila; $i++) {

    $fila = count($cars[$i]);

    array_push($a, $fila);

}
echo 'El tamaño de la matriz bidimencional es ' . $fila . '<br/>';
for ($i = 0; $i < count($a); $i++) {

    echo "La posicion {$i} tiene " . $a[$i] . " de tamaño";

    echo '<br/>';
}

$fruits = array(
    "fruits"  => array(
        "a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(
        1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third"),
);
echo '<hr/>';
foreach ($fruits as $key => $value) {
    echo $key;
    echo '<br/>';
    foreach ($value as $key2 => $value2) {
        echo $key2;
        echo ' ';
        echo $value2;
        echo '<br/>';
    }

}
echo '<hr/>';
$firstquarter = array(2 => 'January', 'February', 'March');
foreach ($firstquarter as $key => $value) {
    echo $key;
    echo ' ';
    echo $value;
    echo '<br/>';
}
//  print_r lanza información de una variable  y con el parámetro true se puede almacenar en una variable
$result = print_r($firstquarter, true);
echo $result;
