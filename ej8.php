<?php
$NUM= [ 3, 2, 1, 5, 4];
$n = count($NUM);

for ($i = 1; $i < $n; $i++) {
    $key = $NUM[$i];
    $j = $i - 1;


    while ($j >= 0 && $NUM[$j] > $key) {
        $NUM[$j + 1] = $NUM[$j];
        $j--;
    }
    $NUM[$j + 1] = $key;
}

for ($i = 0; $i < $n; $i++) {
    echo $NUM[$i]. ",";
}

?>