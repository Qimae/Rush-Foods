<?php

/* login */
session_start();
include 'config.php';


error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: restaurants.php");
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: restaurants.php");
    } else {
        echo "<script>alert('Username or Password is Wrong.')</script>";
    }
}
//remember me cookies
if (!empty($_POST["remember"])) {
    setcookie("username", $_POST["username"], time() + 43200);
    setcookie("password", $_POST["password"], time() + 43200);
} else {
    setcookie("username", "");
    setcookie("password", "");
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
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


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
            
        </div><br><br>
        <!-- forms -->
        <div class="Login">
            <div class="main-container">
                <div class="login-container">
                    <div class="container">
                        <form class="form" action="" method="POST">
                            <p>
                                <h8>ALREADY A MEMBER</h8>
                                <h7>Need help ?</h7><br></br>
                            </p>
                            <br>

                            <input type="text" name="username" placeholder="Username" required><br>
                            <input name="password" type="password" placeholder="Password" required><br>
                            <button name="submit" type="submit" variant="contained" color="primary">
                                Sign In
                            </button>

                        </form>
                    </div>
                    <div class="container-2">
                        <p>
                            Already have an account ?<br>
                            <a href="./register.php">
                                Register Here
                            </a>
                        </p>
                        <p>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember" style="cursor: pointer;"> Remember Me</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script>
        /* sidenav */
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