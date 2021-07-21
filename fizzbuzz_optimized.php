<?php

echo "Enter three numbers\n";
$handle = fopen ("php://stdin","r");
$number1  = fgets($handle);
$number2  = fgets($handle);
$number3  = fgets($handle);

for ($i=1; $i<=$number3; $i++){
    echo (($i % $number1 == 0) && ($i % $number2) == 0 ? "FB ": ($i % $number1 == 0 ? "F ": ($i % $number2 == 0 ?"B ": $i." ")));
}
