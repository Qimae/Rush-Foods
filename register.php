<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: profregistration.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, email, password)
					VALUES ('$username', '$email','$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('User Registration Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Something is Wrong ')</script>";
            }
        } else {
            echo "<script>alert('Email Already Exists.')</script>";
        }
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: profregistration.php");
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
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
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


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

        </div><br><br>
        <!-- forms -->
        <div class="Login">
            <div class="main-container">
                <div class="login-container">
                    <div class="container">
                        <form class="form" action="" method="POST">
                            <p>
                                <h8>NOT A MEMBER</h8>
                                <h7>Need help ?</h7><br></br>
                            </p>
                            <br>

                            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required><br>
                            <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>" required><br>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required><br>
                            <input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
                            <br><br>
                            <button name="submit">Sign Up</button>

                        </form>
                    </div>
                    <div class="container-2">
                        <p>
                            Already have an account ?<br>
                            <a href="./login.php">
                                Login Here
                            </a>
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