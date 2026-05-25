<?php

include 'config.php';

$sql = "SELECT * FROM medicines";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Medicines</title>
</head>
<body>

<h2>Medicine List</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Company</th>
    <th>Price</th>
    <th>Quantity</th>
</tr>

<?php

while($row = $result->fetch_assoc()){

?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>
<?php echo $row['medicine_name']; ?>
</td>

<td>
<?php echo $row['company']; ?>
</td>

<td>
<?php echo $row['price']; ?>
</td>

<td>
<?php echo $row['quantity']; ?>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>
