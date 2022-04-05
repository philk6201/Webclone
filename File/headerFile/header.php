<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <script src="File/javascript-File/webpage.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Document</title>
</head>
<body>
    <section class="<?php echo $classname; ?>">
        <div class="container">
            <div id="rownav-bar">
                <div class="navbar-list">
                    <div class="navbar-brand">
                        <h3>
                            <a href="./Homepage.php">SimpleSite</a></h3>
                    </div>
                    <div id="nav-items" class="black-text white-text">
                        <a>Try it for free</a>
                        <a href="./customerservice.php" class="custom" >Customer service</a>
                        <a href="./featurespage.php">Features</a>
                        <a href="./themes.php">Themes</a>
                        <a href="./booking.php">Booking</a>
                    </div>
                </div>
                <div class="navbar-buttons">
                    <div class="nav-login-buttons">
                        <button id="login-buttons" class="login-buttons">LOG IN</button>
                    </div>
                    <div class="language-picker">
                        <label for="language-picker-select"><img src="image/globe-grey.jpg"></label>
                        <div class="dropdown">
                            <a id="language-color-change" href="#">LANGUAGE</a>
                            <div class="dropdown-content">
                                <ul>
                                    <li>English</li>
                                    <li>Urdu</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nav-bar-toggles">
                        <i id="toggles-bgcolor" class="fa-solid fa-bars"></i>
                        <div class="dropdown-toggles">
                            <ul>
                                <li><a href="./Tryit.html">Try it for free</a></li>
                                <li><a href="./customerservice.php">Customer service</a></li>
                                <li><a href="./themes.php">Themes</a></li>
                                <li><a href="./featurespage.php">Features</a></li>
                            </ul>
                            <button class="login-buttons-dropdown">LOg IN</button>
                        </div>
                    </div>
                </div>
            </div>