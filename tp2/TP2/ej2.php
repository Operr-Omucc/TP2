<?php
$cont=0;
$NATURALES_8 = [ 2, 6, 8, 9, 1, 3, 8, 22, 8, 54];

for ($i=1;$i<10;$i++){
    if ($NATURALES_8[$i]==8) {
        $cont++;
    }
}
print("hay ". $cont. " ochos");
?>