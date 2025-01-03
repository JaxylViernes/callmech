<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="mainstyle.css"> -->
        <link rel="icon" href="img/w1.png">
        <title>aboutus | callmechanic</title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/78f0025f7d.js" crossorigin="anonymous"></script>
    </head>
    <style>
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }
        body {
        background-color: #1F1F1F;
        overflow-x: hidden;
        overflow-y: auto;
        color:white;
        background-image: url('img/BCKGROUND.jpg');
    background-size: cover; /* Ensure the image covers the entire background */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; 
    }

    header {
        width: 100%;
        height: 60px;
        /* background: #D9D9D9; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 10px;
        margin: 0 auto;
        margin-top: 2%;
    }
        img{
            width: 100%;
        }
        .logo {
        width: 100px;
        height: 100px;
        margin-left: 20px;
    }

    nav .logo {
        display: none;
    }

    nav ul {
        display: flex;
    }

    nav ul li a {
        color: white;
        display: block;
        margin: 0;
        font-size: 13px;
        padding-right: 50px;
        padding-left: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
        
        transition: 0.2s;
        text-decoration: none;

    }

    nav ul li a:hover {
        font-size: 20px;
        color: orange;
        text-decoration: none;
    }

    nav ul li a.active {
        font-size: 20px;
        font-weight: bold;
        color: #F86D1A;
    }
        .orange{
            background: #F86D1A;
            width: 23%;
            height: 65px;
            margin-left: 15%;
            margin-top: -2%;
        }
        .mainbody{
            margin-top: 0px;
        }
        .aboutuslogo{
            width: 40%;
            margin: auto;
            color: #D9D9D9;
        }
        .smalllogo{
            width: 20%;
            margin: auto;
        }

        @media only screen and (max-width: 1100px){
            header{
                width:80%;
                padding: 0 20px;
            }
            nav{
                color: #D9D9D9;
                position: absolute;
                right: 0;
                top:0;
                z-index: 999;
                width: 60%;
                height: 100vh;
                transition: 0.2s;
                background-color: #2F2F2F;
                box-shadow: 2px 0 20px 0 rgba(0, 0, 0, 0.05);
            }
            #nav_check:checked ~ nav{
                right:0;
            }
            nav ul li a{
                color:#D9D9D9;
                text-decoration: none;
            }
            nav .logo{
                display: block;
                height: 70px;
                display: flex;
                align-items: center;
                margin: auto;
                margin-top: 15%;
            }
            nav ul{
                display: block;
                padding: 0 20px;
                margin-top: 30px;
            }
            nav ul li a{
                margin-bottom: 5px;
            }
        }
    </style>
    <body>
    <header>
        <div class="logo">
        <?php
                // require 'config.php';
                // $sql = "SELECT * FROM `components_images` where status='Current'";
                // $dataset = $connect->query($sql);
                // if ($dataset) {
                //     if ($dataset->num_rows > 0) {
                //         while ($row = $dataset->fetch_array()) {
                //             $image = $row['2'];
                ?>
                            <img src="image/NEARMELOGO.png">
                <?php
                //         }
                //     }
                // }
                ?>
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <center>
            <ul>
                <li>
                    <a href="home.php">HOME</a>
                </li>
                <li>
                    <a href="mech.php">MECHANIC</a>
                </li>
                <li>
                    <a href="forum.php">ON ROAD HELP</a>
                </li>
                <li>
                    <a href="userprofile.php">PROFILE</a>
                </li>
                
                <li>
                    <a href="aboutus.php"  class="active">ABOUT US</a>
                </li>
                <li>
                    <a href="faqs.php">FAQs</a>
                </li>
                <li>
    <a href="notifications.php"><i class="fas fa-bell"></i></a>
</li>
            </ul>
            </center>
        </nav>
    </header>
        <!-- <div class="orange"></div> -->
        <div class="mainbody">
            <img src="img/rc.png" style="opacity:0.05; position:fixed; width:70%; margin-left:15%; margin-top:0%;">
            <div class="aboutuslogo">
                <div class="logs" style="width:75%;margin-left:auto;margin-right:auto;">
                <?php
                // require 'config.php';
                // $sql = "SELECT * FROM `components_images` where status='Current'";
                // $dataset = $connect->query($sql);
                // if ($dataset) {
                //     if ($dataset->num_rows > 0) {
                //         while ($row = $dataset->fetch_array()) {
                            // $image = $row['2'];
                ?>
                            <img src="image/NEARMELOGO.png">
                <?php
                //         }
                //     }
                // }
                ?>
                </div>
                <p align="justify">&emsp;&emsp; NearMe or Nearby Mechanics is an innovative online platform that connects vehicle owners with skilled mechanics in their area. Our platform features detailed profiles of mechanics, allowing users to easily find the right professional for their repair and maintenance needs. Whether you need a simple tune-up or a complex repair, our platform makes it easy to find the help you need, when you need it. With CallMechanic, vehicle maintenance is just a click away.</p>
                
            </div>
            <div class="smalllogo">
            <?php
                require 'config.php';
                $sql = "SELECT * FROM `components_images` where status='Current'";
                $dataset = $connect->query($sql);
                if ($dataset) {
                    if ($dataset->num_rows > 0) {
                        while ($row = $dataset->fetch_array()) {
                            $image = $row['2'];
                ?>
                            <img src="image/<?php echo $image; ?>">
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
        <!-- Site footer -->
        <footer class="site-footer">
            <div class="container" style=" margin-top:5%;">
                <center>
                    <hr>
                    <p style="color:#D9D9D9;">Copyright &copy; 2017 All Rights Reserved by
                    <span style="color:#F86D1A;">callmechanic</span>.</p>
                </center>
            </div>
        </footer>
    </body>
</html>