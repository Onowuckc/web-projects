<?php

// Collect User's Information
if (!isset($_POST['calculate'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Scientific Calculator</title>
        <style>
            body {
                background-color: lightgrey;
                font-family: Arial, sans-serif;
            }
            h2 {
                color: blue;
                font-size: 24px;
            }
            form {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
            }
            label {
                font-weight: bold;
                margin-bottom: 5px;
                color: black;
            }
            input[type=text], input[type=number], select, textarea {
                padding: 5px;
                margin-bottom: 10px;
                width: 100%;
            }
            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .result {
                color: blue;
                font-weight: bold;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <h2>Scientific Calculator</h2>
        <form method="post">
            <label for="num1">Enter first number:</label>
            <input type="text" name="num1" required><br><br>
            <label for="operation">Select operation:</label>
            <select name="operation">
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
                <option value="log">Logarithm (log)</option>
                <option value="exp">Exponential (exp)</option>
                <option value="square">Square (x^2)</option>
                <option value="sqrt">Square Root (√)</option>
                <option value="cube">Cube (x^3)</option>
                <option value="cbrt">Cube Root (³√)</option>
                <!-- Add more operations here if needed -->
            </select><br><br>
            <label for="num2">Enter second number:</label>
            <input type="text" name="num2"><br><br>
            <input type="submit" name="calculate" value="Calculate">
        </form>
    </body>
    </html>
    <?php
} else {
    // Process Calculation
    $num1 = $_POST['num1'];
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
            break;
        case 'log':
            $result = log($num1);
            break;
            
            case 'exp':
                $result = pow($num1, $num2); // Exponential operation: raise num1 to the power of num2
                break;
            
        case 'square':
            $result = $num1 * $num1;
            break;
        case 'sqrt':
            $result = sqrt($num1);
            break;
        case 'cube':
            $result = $num1 * $num1 * $num1;
            break;
        case 'cbrt':
            $result = pow($num1, 1/3);
            break;
        default:
            $result = "Invalid operation";
    }

    echo "<div class='result'>Result: $result</div>";
}

?>
