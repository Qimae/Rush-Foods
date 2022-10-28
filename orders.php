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
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <header id="main">
        <!-- sidenav -->
        <div id="mySidenav" class="sidenav">
            <div class="profile">
                <a href="./components/Login/index.html">
                    <input type="button" value="Sign Up">
                    <input type="button" value="Sign In">
                </a>
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
            <a href="./components/Login/index.html"><input type="button" value="Sign Up"></a>
            <a href="./components/Login/index.html"><input type="button" value="Sign In"></a>
        </div><br>

        <!-- orders -->
        <span class="o-heading">Orders</span><br><br>
        <a href="">
            <div class="orders">
                <div class="o-img">
                    <img src="../../assets/1st Nov.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="o-text">
                    <span><b>Beef pilau with banana</b></span><br><br>
                    <span><b>Order:</b> 33567431</span><br><br>
                    <span>Open/Delivered</span><br><br>
                    <span><b>On 12-07</b></span>
                </div>
            </div>
        </a><br>
        <a href="">
            <div class="orders">
                <div class="o-img">
                    <img src="../../assets/1st Nov.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="o-text">
                    <span><b>Beef pilau with banana</b></span><br><br>
                    <span><b>Order:</b> 33567431</span><br><br>
                    <span>Open/Delivered</span><br><br>
                    <span><b>On 12-07</b></span>
                </div>
            </div>
        </a>

    </header>




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