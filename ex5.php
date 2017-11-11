<?php
    $i1 = 1;
    $i2 = 1;
    while (true) {
        for ($i2 = 1; $i2 < 21; $i2++) {
            if (($i1 % $i2) > 0) {
                $i1 += 1;
                break;
            }
            if ($i2 == 20) {
                break 2;
            }
        }
    }
    echo $i1;
?>
