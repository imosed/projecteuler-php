<?php
    $i = 0;
    $s = 0;
    while ($i < 1000) {
        if ($i % 3 == 0 or $i % 5 == 0) {
            $s += $i;
        }
        $i += 1;
    }
    echo $s;
?>
