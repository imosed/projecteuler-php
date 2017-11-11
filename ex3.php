<?php
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
