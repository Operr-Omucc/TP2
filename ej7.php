<?php
$NUM = [3, 2, 1, 5, 4];

for ($i = 0; $i < count($NUM) - 1; $i++) {
    for ($j = 0; $j < count($NUM) - 1 - $i; $j++) {
        if ($NUM[$j] > $NUM[$j + 1]) {
            $temp = $NUM[$j];
            $NUM[$j] = $NUM[$j + 1];
            $NUM[$j + 1] = $temp;
        }
    }
}

echo "Arreglo ordenado: ";
for ($i = 0; $i < count($NUM); $i++) {
    echo $NUM[$i] . " ";
}
?>