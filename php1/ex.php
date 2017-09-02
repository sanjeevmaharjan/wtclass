<?php
$a = 10;
$b = 7;

printnln ("10 + 7 = " . ($a + $b) );
printnln ("10 - 7 = " . ($a - $b) );
printnln ("10 * 7 = " . ($a * $b) );
printnln ("10 / 7 = " . ($a / $b) );
printnln ("10 % 7 = " . ($a % $b) );

function printnln ($msg) {
    echo $msg;
    echo "<br />";
}
