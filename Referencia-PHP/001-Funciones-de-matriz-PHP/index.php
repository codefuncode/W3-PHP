<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

$cars      = array("Volvo", "BMW", "Toyota");
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
