<html>
<body>
<?php

$rows = 5;

for ($i = 1; $i <= $rows; $i++)  {
	 for ($j = 1; $j <= $rows; $j++)  {
			echo "* ";
	}
	echo "<br>";
}

echo "<br>";
echo "<br>";

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
     for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
  
    echo "<br>";
}

echo "<br>";
echo "<br>";

$rows = 5;

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    
    echo "<br>";
}


?>

</body>
</html>
