<?php

session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if (isset($_SESSION['username'])) {
    header("Location: restaurants.php");
};

if (isset($_POST['save'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO profreg (firstname, lastname, gender, phone) VALUES ('$firstname', '$lastname', '$gender', '$phone')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert(Thank you, registration complete.)</script>";
        $firstname = "";
        $lastname = "";
        $gender = "";
        $phone = "";
    } else {
        echo "<script>alert(Something is wrong!!)</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="./assets/Rush.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rush | Fast Online Food Delivery</title>
    <link rel="stylesheet" href="./profregistration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>


    <div class="form">
        <h4>Tell us more about yourself..</h4>
        <form action="" method="POST" class="form-inputs">
            <label for="firstname">First Name:</label><br><br>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname" required><br><br>
            <label for="lastname">Last Name:</label><br><br>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname" required><br><br>
            <label for="gender">Gender:</label><br><br>
            <select name="gender" id="gender" required>
                <option value="select">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br><br>
            <label for="phone">Phone:</label><br><br>
            <input type="tel" name="phone" id="phone" placeholder="Phone" required><br><br>
            <input type="submit" name="save" value="Next" style="color: white; background: #87c6fe; padding: 10px; font-weight: bold; font-size: 1rem; cursor: pointer;">

        </form>
    </div>
</body>

</html>