<?php
$NUM= [ 3, 2, 1, 5, 4];
$aux = $NUM[1];
for ($i=0;$i<5;$i++){
    for ($i=0;$i<5;$i++){
        if ($aux>$NUM[$i]){
            $aux=$NUM[$i];
        }
    }
    
}
for ($i=0;$i<5;$i++){
print($NUM[$i]);
}
?>