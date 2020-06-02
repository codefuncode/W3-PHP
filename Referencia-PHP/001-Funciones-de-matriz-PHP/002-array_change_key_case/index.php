<?php
// Definición y uso

// La función array_change_key_case () cambia todas las claves de una matriz a minúsculas o mayúsculas.

$pets1 = array("a" => "Cat", "B" => "Dog", "c" => "Horse", "b" => "Bird");
$pets2 = array("a" => "Cat", "B" => "Dog", "c" => "Horse", "d" => "Bird");

echo '<br/>';
$collection = $pets1;
foreach ($collection as $key => $value) {
    echo 'Key => ' . $key . ' Valor=> ' . $value;
    echo '<br/>';
}
echo '<br/>';

$collection = array_change_key_case($pets1, CASE_UPPER);
foreach ($collection as $key => $value) {
    echo 'Key => ' . $key . ' Valor=> ' . $value;
    echo '<br/>';
}
echo '<br/>';
echo '==================================================';
echo '<br/>';
echo '<br/>';
$collection = $pets2;
foreach ($collection as $key => $value) {
    echo 'Key => ' . $key . ' Valor=> ' . $value;
    echo '<br/>';
}

echo '<br/>';
$collection = array_change_key_case($pets2, CASE_UPPER);
foreach ($collection as $key => $value) {
    echo 'Key => ' . $key . ' Valor=> ' . $value;
    echo '<br/>';
}
