<html>
<body>

<?php
function checkOddEven($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

// Example usage:
$numberToCheck = 25;

echo "The number " . $numberToCheck . " is " . checkOddEven($numberToCheck) . ".";
?>


</body>
</html>