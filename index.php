<?php

session_start();
include 'config.php';

if (isset($_SESSION['address'])) {
    header("Location: restaurants.php");
};

if (isset($_POST['submit'])) {
    $address = $_POST['address'];

    $sql = "INSERT INTO delivery (address) VALUES ('$address')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert(address recieved)</script>";
        $address = "";
    } else {
        echo "<script>alert(Something is wrong!!)</script>";
    }
    $sql = "SELECT * FROM delivery WHERE address='$address'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['address'] = $row['address'];
        header("Location: restaurants.php");
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
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <header id="main">
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
            <?php
            if (!isset($_SESSION['username'])) : ?>
                <a href="./register.php">
                    <input type="button" value="Sign Up">
                </a>
                <a href="./login.php">
                    <input type="button" value="Sign In">
                </a>
            <?php endif ?>

        </div>
        <!-- order section -->
        <div class="order">
            <h1>Order food at your comfort</h1>
            <form action="" method="POST">
                <div class="flex">
                    <div class="location">
                        <div class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <div class="input">
                            <input type="text" name="address" placeholder="Enter delivery address ie: Jogolo PLaza, Mariakani" required>
                        </div>
                    </div>
                    <div class="search">
                        <button type="submit" name="submit" style="border: none;
                        color: white;
                        background: black;
                        padding: 1.2rem 2rem;
                        margin-left: 1rem;
                        border-radius: 10px;
                        font-size: 1rem;"
                        >Make Order</button>

                    </div>
                </div>
            </form>
        </div>
    </header>
    <!-- Services -->
    <div class="flex-container">
        <div class="card">
            <img src="./assets/restaurant.jpg" alt="Avatar" style="width: 100%;" />
            <div class="container">
                <h4><b>Your Restaurant, Elevated</b></h4>
                <p><a href="./Merchants/index.html">Add your restaurant</a>
                </p>
            </div>
        </div>
        <div class="card">
            <img src="./assets/delivery.png" alt="Avatar" style="width: 100%;" />

            <div class="container">
                <h4><b>Deliver with Rush Foods</b></h4>
                <p><a href="#">Sign up to deliver</a>
                </p>
            </div>
        </div>
    </div>
    <!-- works -->
    <div class="works">
        <h2>How It Works</h2>
        <div class="row-works">
            <div class="column-works">
                <img src="./assets/location.png" alt="">
                <h3>Set delivery location</h3>
                <p>Select the location where you want us to deliver</p>
            </div>
            <div class="column-works">
                <img src="./assets/cart.png" alt="" style="margin-top: 2rem; margin-bottom: 1.3rem;">
                <h3>Choose the product</h3>
                <p>Browse restaurants that deliver near you</p>
            </div>
            <div class="column-works">
                <img src="./assets/deliver.png" alt="">
                <h3>Recieve it at your door</h3>
                <p>our order will be delivered to you in no time</p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="row-footer">
            <div class="column-footer">
                <span>Rush <b>Foods</b></span>

            </div>
            <div class="column-footer">
                <ul>
                    <li><a href="">Add your restaurant</a></li>
                    <li><a href="">Sign up to deliver</a></li>
                    <li><a href="">Get Help</a></li>
                </ul>
            </div>
            <div class="column-footer">
                <ul>
                    <li><a href="">Restaurants near me</a></li>
                    <li><a href="">View all cities</a></li>
                    <li><a href="">Pickup near me</a></li>
                    <li><a href="">About Rush Foods</a></li>
                </ul>
            </div>
        </div>
        <div class="icons">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a>
            <a href="#" style="word-spacing: 0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg> Mariakani
            </a>
            <span>&copy;2022 Tiurakh Technologies.</span>
        </div>

    </footer>




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