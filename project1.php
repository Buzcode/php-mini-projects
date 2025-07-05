<?php

echo "Enter a number: ";
$input = readline();

if (is_numeric($input)) {
    
    $num = $input + 0; 

    $NegRes = ($num > 0) ? "Positive" : (($num < 0) ? "Negative" : "Zero");
    $OddRes = ($num % 2 == 0) ? "Even" : "Odd";

    if ($num == 0) {
        echo "The number 0 is Zero and Even.\n";
    } else {
        echo "The number $num is $NegRes and $OddRes.\n";
    }
} else {
    echo "Error: Please enter a valid number.\n";
}

?>