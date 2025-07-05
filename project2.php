<?php

echo "Enter the temperature value: ";
$temp = readline();

echo "Enter the unit: ";
$unit = strtoupper(readline()); 

if (is_numeric($temp)) {
    if ($unit == 'C') {
        $fahrenheit = ($temp * 9/5) + 32;
        echo "$temp Celsius is equal to $fahrenheit Fahrenheit.\n";
    } elseif ($unit == 'F') {
        $celsius = ($temp - 32) * 5/9;
        echo "$temp Fahrenheit is equal to $celsius Celsius.\n";
    } else {
        echo "Error: Invalid unit. Please enter 'C' or 'F'.\n";
    }
} else {
    echo "Error: Please enter a valid number for the temperature.\n";
}

?>