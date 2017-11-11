<?php
    $result = 0;
    $prev = 0;
    $next = 1;
    $inter = 0;
    while ($next < 4000000) {
        $inter = $next;
        $next = $prev + $next;
        $prev = $inter;
        if ($next % 2 == 0) {
            $result += $next;
        }
    }
    echo $result;
?>
