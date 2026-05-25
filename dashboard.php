<?php

session_start();

if(!isset($_SESSION['user'])){

    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>
Welcome
<?php
echo $_SESSION['user'];
?>
</h2>

<a href="add_medicine.php">
Add Medicine
</a>

<br><br>

<a href="medicines.php">
View Medicines
</a>

<br><br>

<a href="logout.php">
Logout
</a>

</body>
</html>
