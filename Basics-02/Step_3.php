<?php
$var1 = 10;
$var2= 50;
print " \n -....................-"
     ."\n       Before Swap".
    " \n _..................._ \n";

print "var 1 = " . $var1 ." \n". "var 2 = " . $var2;

print " \n -....................-"
     ."\n       After Swap".
    " \n _..................._ \n";

    $swap = $var1;
    $var1 = $var2;
    $var2 = $swap;
    print "var 1 = " . $var1 ." \n". "var 2 = " . $var2;

?>