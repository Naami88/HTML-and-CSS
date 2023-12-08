<html>
<body>

<?php
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

// Example usage:
$number1 = 10;
$number2 = -5;
$number3 = 0;

echo "Number 1 is " . checkNumber($number1) . "<br>";
echo "Number 2 is " . checkNumber($number2) . "<br>";
echo "Number 3 is " . checkNumber($number3) . "<br>";
?>

</body>
</html>