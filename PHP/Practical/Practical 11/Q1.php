<html>
<body>

<?php
// Define two variables
$number1 = 20;
$number2 = 5;

// Addition
$sum = $number1 + $number2;
echo "Addition: " . $number1 . " + " . $number2 . " = " . $sum . "<br>";

// Subtraction
$diff = $number1 - $number2;
echo "Subtraction: " . $number1 . " - " . $number2 . " = " . $diff . "<br>";

// Multiplication
$product = $number1 * $number2;
echo "Multiplication: " . $number1 . " * " . $number2 . " = " . $product . "<br>";

// Division
if ($number2 != 0) {
    $quotient = $number1 / $number2;
    echo "Division: " . $number1 . " / " . $number2 . " = " . $quotient . "<br>";
} else {
    echo "Division by zero is not allowed.";
}
?>

</body>
</html>
