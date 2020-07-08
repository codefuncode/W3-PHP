<?php

// Array ( [months] => Array ( [1] => January [2] => February [3] => March [4] => April [5] => May [6] => June [7] => July [8] => August [9] => September [10] => October [11] => November [12] => December ) [abbrevmonths] => Array ( [1] => Jan [2] => Feb [3] => Mar [4] => Apr [5] => May [6] => Jun [7] => Jul [8] => Aug [9] => Sep [10] => Oct [11] => Nov [12] => Dec ) [maxdaysinmonth] => 31 [calname] => Gregorian [calsymbol] => CAL_GREGORIAN )

echo '<hr/>';
print_r(cal_info());
echo '<hr/>';
$informacion = cal_info(0);
$conter      = 0;
$counterin   = 0;
$numero      = 0;
foreach ($informacion as $key => $value) {
    print_r($key);
    echo '<br/>';
    print_r($value);
    echo '<hr/>';
    $conter++;
    $numero = $conter++;
    echo $numero;
    echo '<br/>';
}

foreach ($informacion as $key1 => $value1) {
    echo '<hr/>';
    echo '===================== 1<br/> ';
    echo '<hr/>';
    print_r($key1);
    echo '=>';
    print_r($value1);
    echo '<hr/>';
    if (is_array($value1)) {

        foreach ($value1 as $key2 => $value2) {
            echo '<hr/>';
            echo '===================== 2<br/> ';
            echo '<hr/>';
            print_r($key2);
            echo '=>';
            print_r($value2);
            echo '<hr/>';

        }
    }
}
echo '=============================================================================<br/>';
$informacion = cal_info(1);
$conter      = 0;
$counterin   = 0;
$numero      = 0;
foreach ($informacion as $key => $value) {
    print_r($key);
    echo '<br/>';
    print_r($value);
    echo '<hr/>';
    $conter++;
    $numero = $conter++;
    echo $numero;
    echo '<br/>';
}

foreach ($informacion as $key1 => $value1) {
    echo '<hr/>';
    echo '===================== 1<br/> ';
    echo '<hr/>';
    print_r($key1);
    echo '=>';
    print_r($value1);
    echo '<hr/>';
    if (is_array($value1)) {

        foreach ($value1 as $key2 => $value2) {
            echo '<hr/>';
            echo '===================== 2<br/> ';
            echo '<hr/>';
            print_r($key2);
            echo '=>';
            print_r($value2);
            echo '<hr/>';

        }
    }
}
echo '=============================================================================<br/>';
$informacion = cal_info(2);
$conter      = 0;
$counterin   = 0;
$numero      = 0;
foreach ($informacion as $key => $value) {
    print_r($key);
    echo '<br/>';
    print_r($value);
    echo '<hr/>';
    $conter++;
    $numero = $conter++;
    echo $numero;
    echo '<br/>';
}

foreach ($informacion as $key1 => $value1) {
    echo '<hr/>';
    echo '===================== 1<br/> ';
    echo '<hr/>';
    print_r($key1);
    echo '=>';
    print_r($value1);
    echo '<hr/>';
    if (is_array($value1)) {

        foreach ($value1 as $key2 => $value2) {
            echo '<hr/>';
            echo '===================== 2<br/> ';
            echo '<hr/>';
            print_r($key2);
            echo '=>';
            print_r($value2);
            echo '<hr/>';

        }
    }
}
echo '=============================================================================<br/>';
$informacion = cal_info(3);
$conter      = 0;
$counterin   = 0;
$numero      = 0;
foreach ($informacion as $key => $value) {
    print_r($key);
    echo '<br/>';
    print_r($value);
    echo '<hr/>';
    $conter++;
    $numero = $conter++;
    echo $numero;
    echo '<br/>';
}

foreach ($informacion as $key1 => $value1) {
    echo '<hr/>';
    echo '===================== 1<br/> ';
    echo '<hr/>';
    print_r($key1);
    echo '=>';
    print_r($value1);
    echo '<hr/>';
    if (is_array($value1)) {

        foreach ($value1 as $key2 => $value2) {
            echo '<hr/>';
            echo '===================== 2<br/> ';
            echo '<hr/>';
            print_r($key2);
            echo '=>';
            print_r($value2);
            echo '<hr/>';

        }
    }
}
