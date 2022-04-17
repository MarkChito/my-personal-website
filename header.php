<?php
    $current_url = "$_SERVER[REQUEST_URI]";
    $current_url_arr = explode("/", $current_url);
    $current_tab = strtok($current_url_arr[2], '?');
?>

<!DOCTYPE html>
<html lang="en" data-random-animation="false" data-animation="11">
    <head>

        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="Mark Chito Anteja Website, Mark Chito Website, Chito Website, Anteja Website, Mark Chito Anteja Portfolio, Mark Chito Portfolio, Chito Portfolio, Anteja Portfolio" />
        <meta name="description" content="This is my personal website. Take a look at my profile and see what I can do to your company." />
        <meta name="author" content="Mark Chito Anteja" />

        <!--Page Title-->
        <title>My Personal Website</title>

        <!--Plugins Css-->
        <link rel="stylesheet" href="css/plugins.css">
        <!--Main Styles Css-->
        <link rel="stylesheet" href="css/style-dark.css">
        <!--Color Css-->
        <link rel="stylesheet" href="css/blue-color.css">

        <!--Modernizr Js-->
        <script src="js/modernizr.js"></script>

        <!--Favicons-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    </head>

    <body>

        <!--Preloader Start-->
        <div class="preloader">
            <div class="loader">
                <!--Your Name-->
                <h4>Please Wait</h4>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--Preloader End-->

        <div id="page">

            <!--Header Start-->
            <header>
                <div class="header-content">

                    <!--Mobile Header-->
                    <div class="header-mobile">
                        <a class="header-toggle"><i class="fas fa-bars"></i></a>
                        <h2>Mark Chito Anteja</h2>
                    </div>

                    <!--Main Header-->
                    <div class="header-main" data-simplebar>
                        <div class="image-container">
                            <h2 class="header-name">Mark Chito Anteja</h2>
                            <img src="img/profile-img.jpg" alt="profile-pic">
                        </div>

                        <?php if ($current_tab != "blog.php"): ?>
                            <!--Nav Menus Regular-->
                            <nav class="nav-menu">
                                <ul>
                                    <li><a href="#home" class="pt-link active"><span class="nav-menu-icon"><i class="lnr lnr-home"></i></span>Home </a> </li>
                                    <li><a href="#about" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-user"></i></span>About Me</a></li>
                                    <li><a href="#resume" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-license"></i></span>Resume</a></li>
                                    <li><a href="#portfolio" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-briefcase"></i></span>Portfolio</a></li>
                                    <li><a href="#blog" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-book"></i></span>Blog</a></li>
                                    <li><a href="#contact" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-envelope"></i></span>Contact</a></li>
                                </ul>
                            </nav>
                        <?php else: ?>
                            <!--Nav Menus Blog-->
                            <nav class="nav-menu">
                                <ul>
                                    <li><a href="index.php#home" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-home"></i></span>Home </a> </li>
                                    <li><a href="index.php#about" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-user"></i></span>About Me</a></li>
                                    <li><a href="index.php#resume" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-license"></i></span>Resume</a></li>
                                    <li><a href="index.php#portfolio" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-briefcase"></i></span>Portfolio</a></li>
                                    <li><a href="index.php#blog" class="pt-link active"><span class="nav-menu-icon"><i class="lnr lnr-book"></i></span>Blog</a></li>
                                    <li><a href="index.php#contact" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-envelope"></i></span>Contact</a></li>
                                </ul>
                            </nav>
                        <?php endif; ?>

                        <!--Nav Footer-->
                        <div class="nav-footer">
                            <!--Social Links-->
                            <ul class="social">
                                <li><a href="https://www.facebook.com/markchito"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <!--Copyright Text-->
                            <div class="copy">
                                <p>2022 &copy; My Personal Website.<br>All Right Reserved.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!--Header End-->