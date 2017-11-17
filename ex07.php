<?php
    /***************************************************************************
    *   By listing the first six prime numbers: 2, 3, 5, 7, 11,  and 13, we can
    *   see that the 6th prime is 13.
    *
    *   What is the 10 001st prime number?
    ***************************************************************************/
    
    function is_prime($n) {
        if ($n > 1) {
            if ($n > 200) { $ml = round($n / 2) + 1; }
            else { $ml = $n - 1; }
            for ($i = 2; $i < $ml; $i++) {
                if ($n % $i == 0) {
                    return 0;
                }
            }
            return 1;
        } else {
            return 0;
        }
    }

    $primes = 0;
    $t = 0;
    while ($primes < 10001) {
        $t += 1;
        $primes += is_prime($t);
    }
    echo $t;
?>
