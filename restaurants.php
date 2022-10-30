<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="./assets/Rush.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rush | Restaurants</title>
    <link rel="stylesheet" href="./restaurants.css"">

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
        <!-- <a href="./logout.php">Logout</a> -->

    </div>
    <!-- nav -->
    <div class="header">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <span>Rush <b>Foods</b></span>
        <button id="myBtn">
            <span style="color: black;">
                <?php echo "<h3>" . $_SESSION['address'] . "</h3>"; ?>
            </span>

        </button>

    </div><br>
    <!-- modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <span>Deliver to</span><br><br>
            <div class="location">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg>
                </div>
                <div class="input">
                    <input type="text" placeholder="Enter delivery address">
                </div>
            </div>
            <br><br>
        </div>

    </div>


    <!-- Restaurants -->
    <div class="flex-container">
        <!-- 1st restaurant -->
        <div class="card">
            <a href="../Restaurant Menu/index.html"><img src="./assets/1st Nov.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>1st November Hotel</b></h4>
                <p>KES40 Fee &#183; 10-25min</p>
            </div>
        </div>
        <!-- 2nd restaurant -->
        <div class="card">
            <a href="#"><img src="./assets/Balanced.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>Balanced Diet Hotel</b></h4>
                <p>KES20 Fee &#183; 10-25min</p>
            </div>
        </div>
        <!-- 3rd restaurant -->
        <div class="card">
            <a href="#"><img src="./assets/Yasmin.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>Yasmin Restaurant</b></h4>
                <p>KES40 Fee &#183; 10-25min</p>

            </div>
        </div>
        <!-- 4th Restaurant -->
        <div class="card">
            <a href="#"><img src="./assets/Dadab.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>Dadab Restaurant</b></h4>
                <p>KES40 Fee &#183; 10-25min</p>

            </div>
        </div>
    </div>
    <!-- second row -->
    <div class="flex-container">
        <!-- 1st restaurant -->
        <div class="card">
            <a href="#"><img src="./assets/1st Nov.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>1st November Hotel</b></h4>
                <p>KES40 Fee &#183; 10-25min</p>
            </div>
        </div>
        <!-- 2nd restaurant -->
        <div class="card">
            <a href="#"><img src="./assets/Balanced.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>Balanced Diet Hotel</b></h4>
                <p>KES20 Fee &#183; 10-25min</p>
            </div>
        </div>
        <!-- 3rd restaurant -->
        <div class="card">
            <a href="#"><img src="./assets/Yasmin.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>Yasmin Restaurant</b></h4>
                <p>KES40 Fee &#183; 10-25min</p>

            </div>
        </div>
        <!-- 4th Restaurant -->
        <div class="card">
            <a href="#"><img src="./assets/Dadab.jpg" alt="Avatar" style="width: 100%;" /></a>
            <div class="container">
                <h4><b>Dadab Restaurant</b></h4>
                <p>KES40 Fee &#183; 10-25min</p>

            </div>
        </div>
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
        /* modal */
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    </body>

</html>