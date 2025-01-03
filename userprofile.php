<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="mainstyle.css"> -->
    <link rel="icon" href="img/w1.png">
    <title>mechanicprofile | callmechanic</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/78f0025f7d.js" crossorigin="anonymous"></script>
</head>
<style>
    * {
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

    * {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }

    body {
        background-color: #1F1F1F;
    }

    img {
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
        color:orange;
        text-decoration: none;
    }

    nav ul li a.active {
        font-size: 20px;
        font-weight: bold;
        color: #F86D1A;
    }

    .orange {
        background: #F86D1A;
        width: 23%;
        height: 65px;
        margin-left: 15%;
        margin-top: -2%;
    }

    .mainbody {
        margin-top: 0px;
    }

    .jumbotrontitle {
        width: 100%;
        margin-top: 15%;
        margin-left: 10%;
    }

    h1 {
        font-size: 100px;
    }

    .buttn {
        margin-top: 3%;
        width: 50%;
    }

    table {
        width: 100%;
    }

    .coverphoto {
        background: #D9D9D9;
        width: 100%;
        height: 100px;
    }

    .backbutton {
        padding: 10px;
    }
    .avatar {
        vertical-align: middle;
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }

    @media only screen and (max-width: 1100px) {
        header {
            width: 80%;
            padding: 0 20px;
        }

        nav {
            color: #D9D9D9;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 999;
            width: 60%;
            height: 100vh;
            transition: 0.2s;
            background-color: #2F2F2F;
            box-shadow: 2px 0 20px 0 rgba(0, 0, 0, 0.05);
        }

        #nav_check:checked~nav {
            right: 0;
        }

        nav ul li a {
            color: #D9D9D9;
            text-decoration: none;
        }

        nav .logo {
            display: block;
            height: 70px;
            display: flex;
            align-items: center;
            margin: auto;
            margin-top: 15%;
        }

        nav ul {
            display: block;
            padding: 0 20px;
            margin-top: 30px;
        }

        nav ul li a {
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
                // ?>
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
                    <a href="userprofile.php" class="active">PROFILE</a>
                </li>
                
                <li>
                    <a href="aboutus.php">ABOUT US</a>
                </li>
                <li>
                    <a href="faqs.php">FAQs</a>
                </li>
                <li>
    <a href="notifications.php"><i class="fas fa-bell"></i></a>
</li>
            </ul>
        </nav>
    </header>
 
    <!-- <div class="orange"></div> -->
    <!-- <div class="coverphoto" style="background: #2F2F2F;width: 90%;height: 200px; margin:auto; margin-top:2%;margin-bottom:2%;"></div> -->
    <div class="mainbody" style="margin-top:5px;">
    <div class="d-flex justify-content-between" style="margin-left:50px; display: flex; align-items: center;">
        <!-- User Details Section -->

        <?php
        require 'config.php';
        $userid = $_SESSION['user_id'];
        $sql = "SELECT * FROM `user` WHERE user_id=$userid";
        $dataset = $connect->query($sql) or die("Error query");
        if ($dataset->num_rows > 0) {
            while ($row = $dataset->fetch_array()) {
                $name = $row['1'] . " " . $row['2'];
                $email = $row['6'];
                $no = $row['5'];
                $addr = $row['3'];
                $pic = $row['8'];
        ?>
        <div style="width: 50%; padding: 20px; margin-left: 5opx;">
            <table style="width: 100%;">
                <tr>
                    <td rowspan="2" style="width: 25%;">
                        <img src="image/<?php echo $pic; ?>" alt="" srcset="" class="avatar">
                    </td>
                    <td style="padding:2px;">
                        <h5><a href="mechprofile.php" style="text-decoration:none;color:#D9D9D9;"><?php echo $name; ?></a></h5>
                        <div class="text-muted small" style="font-weight:600;color:#D9D9D9;">
                            <?php echo $email; ?>
                        </div>
                        <div class="text-muted small" style="font-weight:600;color:#D9D9D9;">
                            <?php echo $no; ?>
                        </div>
                    </td>
                </tr>
            </table>

         
        </div>

        <!-- Map Section -->
        <div style="width: 50%; padding: 20px;">
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
            <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
            <style>
                #map {
                    height: 400px;
                    width: 100%;
                }
            </style>
               <div class="nearbymech">
                <div class="jumbotrontitle" style="margin-top:-1%;">
                    <h1 style="color:#D9D9D9;font-size: 40px;">Current<span style="color:#F86D1A"> Location</span></h1>
                </div>
            </div>
            <main>
                <div id="map"></div>
            </main>
            <script>
                const map = L.map('map');
                // Initializes map
                map.setView([51.505, -0.09], 13);
                // Sets initial coordinates and zoom level
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                // Sets map data source and associates with map
                let marker, circle, zoomed;
                navigator.geolocation.watchPosition(success, error);

                function success(pos) {
                    const lat = pos.coords.latitude;
                    const lng = pos.coords.longitude;
                    const accuracy = pos.coords.accuracy;
                    if (marker) {
                        map.removeLayer(marker);
                        map.removeLayer(circle);
                    }
                    // Removes any existing marker and circle (new ones about to be set)
                    marker = L.marker([lat, lng]).addTo(map);
                    circle = L.circle([lat, lng], {
                        radius: accuracy
                    }).addTo(map);
                    // Adds marker to the map and a circle for accuracy
                    if (!zoomed) {
                        zoomed = map.fitBounds(circle.getBounds());
                    }
                    // Set zoom to boundaries of accuracy circle
                    map.setView([lat, lng]);
                    // Set map focus to current user position
                }

                function error(err) {
                    if (err.code === 1) {
                        alert("Please allow geolocation access");
                    } else {
                        alert("Cannot get current location");
                    }
                }
            </script>
        </div>
        <?php
            }
        }?>
    </div>
</div>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container" style=" margin-top:5%;">
            <center>
                <hr>
                <p style="color:#D9D9D9;">Copyright &copy; 2017 All Rights Reserved by
                    <span style="color:#F86D1A;">callmechanic</span>.
                </p>
            </center>
        </div>
    </footer>
</body>

</html>