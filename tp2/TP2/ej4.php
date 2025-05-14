<?php
$NATURALES_8 = [2, 6, 8, 9, 1, 3, 8, 22, 8, 54];

for ($i=1; $i<10; $i++){
    $aux = $NATURALES_8[1];
    for ($i=1; $i<10; $i++) {
    if ($aux>$NATURALES_8[$i]) {

        $aux=$NATURALES_8[$i];
            }
        }
     }
 print($aux);
?>