<?php
class MathOperations {
    // Function for addition
    public function add($a, $b) {
        return $a + $b;
    }

    // Function for subtraction
    public function subtract($a, $b) {
        return $a - $b;
    }

    // Function for multiplication
    public function multiply($a, $b) {
        return $a * $b;
    }
}

// Create an instance of MathOperations
$math = new MathOperations();

// Example Usage
$num1 = 10;
$num2 = 5;

// Addition
$sum = $math->add($num1, $num2);
echo "Addition: $num1 + $num2 = $sum\n";

// Subtraction
$difference = $math->subtract($num1, $num2);
echo "Subtraction: $num1 - $num2 = $difference\n";

// Multiplication
$product = $math->multiply($num1, $num2);
echo "Multiplication: $num1 * $num2 = $product\n";
?>
