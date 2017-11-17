<?php
    /***************************************************************************
    *   The prime factors of 13195 are 5, 7, 13 and 29.
    *
    *   What is the largest prime factor of the number 600851475143?
    ***************************************************************************/

    define('NUM', 600851475143);

    $i = 1;
    $factors = 1;
    while ($i < 1000000) {
        if (NUM % (int)$i == 0) {
            $factors *= $i;
        }
        if ($factors == NUM) {
            echo $i;
            break;
        }
        $i += 1;
    }
?>
