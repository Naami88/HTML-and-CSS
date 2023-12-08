<!DOCTYPE html>
<html>
<body>

<h2>Enter Your Details</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>

    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age"><br><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="text" id="phone" name="phone"><br><br>

    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <label for="university">University Name:</label><br>
    <input type="text" id="university" name="university"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $university = $_POST['university'];

    // Displaying the entered data
    echo "<h2>Entered Details:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Phone Number: " . $phone . "<br>";
    echo "Email Address: " . $email . "<br>";
    echo "University Name: " . $university . "<br>";
}
?>

</body>
</html>
