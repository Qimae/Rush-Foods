<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image" href="../../../assets/Rush.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rush | Fast Online Food Delivery</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>

<body>
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
    <div class="wrapper" id="main">
        <!-- navbar -->
        <div class="header">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <span>Rush <b>Foods</b></span>

            <center><span>1st November Hotel</span></center>



        </div>

        <!-- owl slider -->
        <div class="heading"><span>Hits of the week</span></div>

        <div class="carousel owl-carousel">
            <div class="cards card-1">
                <span><img src="../../../assets/pilau.png"></span>
                <div class="container">
                    <div class="description">
                        <span>One plate beef Pilau with delicious banana</span>

                    </div>
                    <div class="price">
                        <span>
                            <p>ksh175</p>
                        </span>

                    </div>

                </div>

            </div>
            <div class="cards card-1">
                <span><img src="../../../assets/pilau.png"></span>
                <div class="container">
                    <div class="description">
                        <span>One plate beef Pilau with delicious banana</span>

                    </div>
                    <div class="price">
                        <span>
                            <p>ksh175</p>
                        </span>

                    </div>

                </div>

            </div>
            <div class="cards card-1">
                <span><img src="../../../assets/pilau.png"></span>
                <div class="container">
                    <div class="description">
                        <span>One plate beef Pilau with delicious banana</span>

                    </div>
                    <div class="price">
                        <span>
                            <p>ksh175</p>
                        </span>

                    </div>

                </div>


            </div>
            <div class="cards card-1">
                <span><img src="../../../assets/pilau.png"></span>
                <div class="container">
                    <div class="description">
                        <span>One plate beef Pilau with delicious banana</span>

                    </div>
                    <div class="price">
                        <span>
                            <p>ksh175</p>
                        </span>

                    </div>

                </div>


            </div>
            <div class="cards card-1">
                <span><img src="../../../assets/pilau.png"></span>
                <div class="container">
                    <div class="description">
                        <span>One plate beef Pilau with delicious banana</span>

                    </div>
                    <div class="price">
                        <span>
                            <p>ksh175</p>
                        </span>

                    </div>

                </div>

            </div>
        </div><br>
        <!-- filter -->
        <div class="filter">
            <a href="../Breakfast/index.html"><button>Breakfast</button></a>
            <a href="../Lunch/index.html"><button>Lunch</button></a>
            <a href="../Snacks/index.html"><button class="active">Snacks</button></a>
            <a href="../Drinks/index.html"><button>Drinks</button></a>
        </div><br>
        <!-- menu -->
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="img">
                        <img src="../../../assets/pilau.png">
                    </div>
                    <div class="text">
                        <span>Beef Pilau With Banana</span><br>
                        <a href="#modal-opened" id="modal-closed">
                            <button class="button m-button">Ksh175</button>
                        </a>
                    </div>

                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="img">
                        <img src="../../../assets/pilau.png">
                    </div>
                    <div class="text">
                        <span>Beef Pilau With Banana</span><br>
                        <a href="#modal-opened" id="modal-closed">
                            <button class="button m-button">Ksh175</button>
                        </a>
                    </div>

                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="img">
                        <img src="../../../assets/pilau.png">
                    </div>
                    <div class="text">
                        <span>Beef Pilau With Banana</span><br>
                        <a href="#modal-opened" id="modal-closed">
                            <button class="button m-button">Ksh175</button>
                        </a>
                    </div>

                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="img">
                        <img src="../../../assets/pilau.png">
                    </div>
                    <div class="text">
                        <span>Beef Pilau With Banana</span><br>
                        <a href="#modal-opened" id="modal-closed">
                            <button class="button m-button">Ksh175</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal-container" id="modal-opened">
            <div class="modal">
                <div class="c-container">
                    <img src="../../../assets/pilau.png">

                </div>
                <div class="c-container">
                    <span style="font-size: 2rem; font-weight: bold; color: #080b1b">Beef Pilau with
                        Banana</span><br /><br />
                    <span style="font-size: 1rem; color: grey">Beef Pilau is a traditional, beautiful fragrant rice dish
                        made with many aromatic spices that adds an amazing depth of flavor to the rice.</span>
                </div>
                <div class="c-container m-counter">
                    <div class="counter-buttons">
                        <button onClick="decrement()">-</button>
                        <h2 id="counting"></h2>
                        <button onClick="increment()">+</button>
                    </div>
                    <div class="m-price">
                        <input type="button" value="Buy Now     Ksh170" class="m-button" />
                    </div>
                </div>
                <a href="#modal-closed" class="link-2"></a>

            </div>
        </div>
    </div>


    <script>
        $(".carousel").owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        });
        /* sidenav */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
        /* counter */

        var data = 1;

        //printing default value of data that is 0 in h2 tag
        document.getElementById("counting").innerText = data;

        //creation of increment function
        function increment() {
            data = data + 1;
            document.getElementById("counting").innerText = data;
        }
        //creation of decrement function
        function decrement() {
            data = data - 1;
            document.getElementById("counting").innerText = data;
        }
    </script>
</body>

</html>