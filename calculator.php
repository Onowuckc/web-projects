<?php
// Function to perform calculation
function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return ($num2 != 0) ? ($num1 / $num2) : "Cannot divide by zero!";
        default:
            return "Invalid operation";
    }
}

// Main program
echo "Welcome to the Simple Calculator Program\n";
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$operation = readline("Enter the operation (+, -, *, /): ");

$result = calculate($num1, $num2, $operation);

echo "Result: $result\n";
?>
