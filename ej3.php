<?php
$cont=0;
$RESULTADO_SIN_EL_8 = [ 2, 6, 8, 9, 1, 3, 8, 22, 8, 54];

for ($i=1;$i<10;$i++){
    if ($RESULTADO_SIN_EL_8[$i]!=8) {
        $cont++; 
    }
}
print("cantidad de todos los numeros: ". $cont. " menos los ocho");
?>