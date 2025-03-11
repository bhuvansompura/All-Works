<?php

// Initialize arrays for even and odd numbers
$evenNumbers = [];
$oddNumbers = [];

// Loop through numbers from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        // If the number is even, add to the evenNumbers array
        $evenNumbers[] = $i;
    } else {
        // If the number is odd, add to the oddNumbers array
        $oddNumbers[] = $i;
    }
}

// Print the even numbers array
echo "Even Numbers: ";
print_r($evenNumbers);

// Print the odd numbers array
echo "Odd Numbers: ";
print_r($oddNumbers);



?>