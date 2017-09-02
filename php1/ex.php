<?php
    $a = 10;
    $b = 7;

    printnln ("$a + $b = " . ($a + $b) );
    printnln ("$a - $b = " . ($a - $b) );
    printnln ("$a * $b = " . ($a * $b) );
    printnln ("$a / $b = " . ($a / $b) );
    printnln ("$a % $b = " . ($a % $b) );

    function printnln ($msg) {
        echo $msg;
        echo "<br />";
    }
?>