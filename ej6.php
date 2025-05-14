<?php
$NUM= [ 3, 2, 1, 5, 4];
$aux = $NUM[1];
for ($i=0;$i<5;$i++){
    $aux=$i;
    for ($j=0;$j<5;$j++){
        if ($NUM[$j] < $NUM[$aux]){
            $aux=$NUM[$j];
        }
    }
}
if ($aux != $i){
            $temp = $NUM[$i];
            $NUM[$i] = $NUM[$aux];
            $NUM[$aux] = $temp;
            }
for ($i=0;$i<5;$i++){
print($NUM[$i]);
}
?>