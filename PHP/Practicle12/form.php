<?php
    
    include ("./CreateConnection.php");
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>

<link type="StyleSheet" rel="form.css">
</head>


<body>

<h1><u>Registration Form</u></h1>


<form action="insertData.php" method="post">
  <fieldset>
    <legend>User Information</legend>

    <div class="user-information">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
<br>
    <div class="user-information">
      <label for="nic">NIC:</label>
      <input type="text" id="nic" name="nic" required>
    </div>
<br>

    <div class="user-information">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
<br>

    <div class="user-information">
      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea>
    </div>
<br>

    <div class="user-information">
      <label for="gender">Gender:</label>
      <input type="radio" id="male" name="gender" value="male" checked>
      <label for="male">Male</label>

      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
    </div>
<br>
</fieldset>

<br>

<fieldset>
	 <legend>Password</legend>	

    <div class="password">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
<br>

    <div class="password">
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>
    </div>
<br>

    
  </fieldset>
  <br>

  <div class="submit-reset">
      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
    </div>

</form>
<br>
	

</body>
</html>