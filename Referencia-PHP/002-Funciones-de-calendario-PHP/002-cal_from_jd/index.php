 <?php

$d = unixtojd(mktime(0, 0, 0, 6, 3, 2020));

print_r(cal_from_jd($d, CAL_GREGORIAN));

$matriz = cal_from_jd($d, CAL_GREGORIAN);

echo '<hr/>';

foreach ($matriz as $key => $value) {

    echo $key;
    echo ' => ';
    echo $value;
    echo '<br/>';

}

?>
