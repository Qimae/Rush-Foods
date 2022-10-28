<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="../../assets/Rush.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rush | Fast Online Food Delivery</title>
    <link rel="stylesheet" href="./style.css"">

</head>
<body>
    <main id="main">
    <!-- sidenav -->
    <div id="mySidenav" class="sidenav">
        <div class="profile">
            <input type="button" value="Sign Up">
            <input type="button" value="Sign In">
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Restaurants/index.html">Vendors</a>
        <a href="../Orders/index.html">Orders</a>
        <a href="../Account/index.html">Account</a>
        <a href="../../index.html">Logout</a>
    </div>
    <!-- nav -->
    <div class="header">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <span>Rush <b>Foods</b></span>

    </div><br>

    <!-- name -->
    <div class="content">
        <label for="firstname">First Name</label>
        <div id="firstname">k</div>
        <label for="lastname">Last Name</label>
        <div id="lastname">k</div>
        <label for="email">Email</label>
        <div id="email">e</div>
        <label for="gender">Gender</label>
        <div id="gender">m</div>
        <label for="phone">Phone Number</label>
        <div id="phone">07</div>


    </div>



    </main>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    </body>


</html>