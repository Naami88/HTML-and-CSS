<html>
<body>
<?php
// Given array
$a = array(26, 56, 78, 59, 12, 5, 24);

// Sort the array in ascending order
sort($a);
echo "Sorted Array (Ascending Order): " . implode(", ", $a) . "<br>";

// Find the maximum and minimum values of the array
$minValue = min($a);
$maxValue = max($a);
echo "Minimum Value: " . $minValue . "<br>";
echo "Maximum Value: " . $maxValue . "<br>";

// Insert a new item in an array at a specific position
$newItem = 100; // New item to be inserted
$insertPosition = 3; // Position to insert the new item (0-based index)

array_splice($a, $insertPosition, 0, $newItem);

echo "Array after inserting " . $newItem . " at position " . $insertPosition . ": " . implode(", ", $a);
?>

</body>
</html>
