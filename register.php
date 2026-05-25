<?php
include 'config.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $stmt = $conn->prepare(
        "INSERT INTO users(name,email,password)
         VALUES(?,?,?)"
    );

    $stmt->bind_param(
        "sss",
        $name,
        $email,
        $password
    );

    if($stmt->execute()){
        echo "Registration Successful";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST">

    <input type="text"
           name="name"
           placeholder="Enter Name"
           required>

    <br><br>

    <input type="email"
           name="email"
           placeholder="Enter Email"
           required>

    <br><br>

    <input type="password"
           name="password"
           placeholder="Enter Password"
           required>

    <br><br>

    <button type="submit"
            name="register">
        Register
    </button>

</form>

<a href="login.php">
    Login Here
</a>

</body>
</html>
