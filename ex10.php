<?php
    /***************************************************************************
    *   The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
    *
    *   Find the sum of all the primes below two million.
    ***************************************************************************/
    define('MAX_NUM', 2000000);

    // Function to find out whether a number is prime
    function is_prime($n) {
        if ($n < 2) {
            return 0;
        }
        // For quicker loops
        $max_loops = $n;
        if ($n > 5000) {
            $max_loops = (int)($n / 2);
        }
        for ($i = 2; $i < $max_loops; $i++) {
            if ($n % $i == 0) {
                return 0;
            }
        }
        return $n;
    }

    $t = 0;
    $sum = 0;
    while ($t < MAX_NUM) {
        $t++;
        $sum += is_prime($t);
    }
    echo $sum;
?>
