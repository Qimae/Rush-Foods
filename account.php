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
            <?php
            if (isset($_SESSION['username'])) : ?>
                <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="profile_picture" width="100px" height="100px" style="border-radius: 100%;">
                <?php echo "<h3>" . $_SESSION['username'] . "</h3>"; ?>
            <?php endif ?>
            <?php
            if (!isset($_SESSION['username'])) : ?>
                <a href=""><input type="button" value="Sign Up">
                    <input type="button" value="Sign In"></a>
            <?php endif ?>

        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./restaurants.php">Vendors</a>
        <a href="./orders.php">Orders</a>
        <a href="./account.php">Account</a>
        <?php
        if (isset($_SESSION['username'])) : ?>
            <a href="./logout.php">Logout</a>
        <?php endif ?>
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