<!DOCTYPE html>
<html>

<head lang="en">
<script src="https://kit.fontawesome.com/78f0025f7d.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="mainstyle.css"> -->
    <link rel="icon" href="img/w1.png">
    <title>homepage | callmechanic</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/78f0025f7d.js" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
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

    .jumbotrontitle {
        width: 100%;
        margin-top: 13%;
        margin-left: 10%;
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
/* 
    .orange {
        background: #F86D1A;
        width: 23%;
        height: 65px;
        margin-left: 15%;
        margin-top: -2%;
    } */

    .mainbody {
        margin-top: 0px;
    }

    .car {
        width: 60%;
        float: right;
        margin-top: -25%;
    }

    .jumbotrontitle {
        width: 100%;
        margin-top: 15%;
        margin-left: 10%;
    }

    h1 {
        font-size: 100px;
    }

    table {
        width: 100%;
    }

    .backbutton {
        padding: 10px;
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
            /* background-color: #2F2F2F; */
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
                    <a href="home.php" class="active">HOME</a>
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
            </center>
        </nav>
    </header>
    <div class="orange"></div>
    <div class="mainbody">
        <div class="jumbotrontitle">
            <h1 style="color:#D9D9D9;font-size: 80px; text-shadow: 1px 1px 1px #F86D1A;">Near<span style="color:#F86D1A; text-shadow: 1px 1px 2px #D9D9D9 ;">ME</span></h1>
            <p style="color:#D9D9D9;font-size: 20px; margin-top:-1.5%; text-shadow: 1px 1px 1px pink;">Expert Mechanics, Just Around the Corner</p>
            <div class="buttn">
                <button type="button" class="btn btn-primary btn-lg" style="background-color:#F86D1A;border:none;"><a href="mech.php" style="text-decoration:none; color:#D9D9D9;">Look for a mechanic</a></button>
            </div>
        </div>
        <div class="car">
            <img src="img/rc.png" style="width:90%">
        </div>
        <div class="nearbymech">
            <div class="jumbotrontitle">
                <h1 style="color:#D9D9D9;font-size: 40px;">Current<span style="color:#F86D1A"> Location</span></h1>
                <br>
            </div>
        </div>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
        <style>
            #map {
                height: 500px;
            }
        </style>

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
                // Removes any existing marker and circule (new ones about to be set)
                // remove any exisitong marker and circule( new ones about to be set)
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
        <div class="row" style="margin-top:5%;">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- eme -->
                <table>
                    <tr>
                        <td>
                            <h5><a href="mechprofile.php" style="text-decoration:none;color:#D9D9D9;">Car Repair</a></h5>
                            <div class="text-muted small" style="font-weight:600;color:#D9D9D9;">
                                Automotive Repair means the general repair, engine rebuilding or reconditioning of motor vehicles collision service such as body, frame and fender straightening and repair and painting of motor vehicles.
                            </div>
                        </td>
                        <td rowspan="2" style="width:50%; margin:auto;">
                            <img src="img/w1.png" alt="">
                        </td>
                        <td>
                            <h5><a href="mechprofile.php" style="text-decoration:none;color:#D9D9D9;">Service Center</a></h5>
                            <div class="text-muted small" style="font-weight:600;color:#D9D9D9;">
                                where you can have products, equipment, or vehicles checked and repaired and where you can buy parts
                               
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><a href="mechprofile.php" style="text-decoration:none;color:#D9D9D9;">Car Service</a></h5>
                            <div class="text-muted small" style="font-weight:600;color:#D9D9D9;">
                                A car service is a maintenance check-up that's carried out at set time intervals (at least every year) or after the vehicle has travelled a certain number of miles.
                               
                            </div>
                        </td>
                        <td>
                            <h5><a href="mechprofile.php" style="text-decoration:none;color:#D9D9D9;">Fast Repairing</a></h5>
                            <div class="text-muted small" style="font-weight:600;color:#D9D9D9;">
                                It consists of products that have all been developed to handle minor repairs as productively as possible. Fast Repair attracts customers who would otherwise not bother to have minor paint damages repaired.
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- eme kkut -->
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="availserv">
            <center>
                <h1 style="color:#D9D9D9;font-size: 40px;margin-top: 5%;">AVAILABLE <span style="color:#F86D1A">SERVICES</span></h1>
            </center>
        </div>
        <div class="row" style="background-color:#2F2F2F;">
            <div class="col-6">
                <div class="d-flex flex-row-reverse">
                    <img src="img/whitecar.png" style="width:80%">
                </div>
            </div>
            <div class="col-6">
                <div style="margin-top: 10%;">
                    <ul>
                        <li>
                            <h1 style="color:#D9D9D9;font-size: 25px;">General repair</h1>
                        </li>
                        <li>
                            <h1 style="color:#D9D9D9;font-size: 25px;">Oil Change</h1>
                        </li>
                        <li>
                            <h1 style="color:#D9D9D9;font-size: 25px;">Battery, Alternator, Starter Replacement</h1>
                        </li>
                        <li>
                            <h1 style="color:#D9D9D9;font-size: 25px;">Ac Repair</h1>
                        </li>
                        <li>
                            <h1 style="color:#D9D9D9;font-size: 25px;">Engine Work</h1>
                        </li>
                    </ul>
                </div>
            </div>
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