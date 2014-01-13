<?php
    //Euclids Algorithm 
    //to Find the GCD Between 2 numbers 
    // --Such that (m>n)
    function run($m, $n){
        $calc = ceil($m%$n);
        if($calc==0) return $n;
        return run($n, $calc);
    }
    echo run(1234, 76 );
?>