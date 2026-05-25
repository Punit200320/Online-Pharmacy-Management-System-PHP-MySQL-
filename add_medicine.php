<?php

session_start();

include 'config.php';

if(isset($_POST['add'])){

    $medicine =
        $_POST['medicine_name'];

    $company =
        $_POST['company'];

    $price =
        $_POST['price'];

    $quantity =
        $_POST['quantity'];

    $stmt = $conn->prepare(
        "INSERT INTO medicines
        (medicine_name,company,price,quantity)
        VALUES(?,?,?,?)"
    );

    $stmt->bind_param(
        "ssdi",
        $medicine,
        $company,
        $price,
        $quantity
    );

    if($stmt->execute()){

        echo "Medicine Added";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
</head>
<body>

<h2>Add Medicine</h2>

<form method="POST">

<input type="text"
       name="medicine_name"
       placeholder="Medicine Name"
       required>

<br><br>

<input type="text"
       name="company"
       placeholder="Company"
       required>

<br><br>

<input type="number"
       step="0.01"
       name="price"
       placeholder="Price"
       required>

<br><br>

<input type="number"
       name="quantity"
       placeholder="Quantity"
       required>

<br><br>

<button type="submit"
        name="add">
Add Medicine
</button>

</form>

</body>
</html>


