<?php
    /***************************************************************************
    *   A palindromic number reads the same both ways. The largest palindrome
    *   made from the product of two 2-digit numbers is 9009 = 91 x 99.
    *
    *   Find the largest palindrome made from the product of two 3-digit numbers.
    ***************************************************************************/

    $palindrome_products = array();
    $product = 0;
    $i1 = 100;
    while ($i1 < 999) {
        $i2 = 100;
        while ($i2 < 999) {
            $product = $i1 * $i2;
            if ((string)$product == strrev((string)$product)) {
                array_push($palindrome_products, $product);
            }
            $i2 += 1;
        }
        $i1 += 1;
    }
    echo max($palindrome_products);
?>
