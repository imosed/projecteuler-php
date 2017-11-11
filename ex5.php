<?php
    /***************************************************************************
    *   If we list all the natural numbers below 10 that are multiples of 3 or 5,
    *   we get 3, 5, 6 and 9. The sum of these multiples is 23.
    *
    *   Find the sum of all the multiples of 3 or 5 below 1000.
    ***************************************************************************/

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
