<!DOCTYPE html>
<?php
    session_start();
    ?>
<html>
    <head lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="mainstyle.css"> -->
        <link rel="icon" href="img/w1.png">
        <title>mechanic message | callmechanic</title>
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
        body{
            background-color: #1F1F1F;
            overflow-x: hidden;
            overflow-y: auto;
        }
        header{
            width:60%;
            height: 60px;
            background: #D9D9D9;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            margin: 0 auto;
            margin-top: 2%;
        }
        img{
            width: 100%;
        }
        .logo{
            width: 180px;
            margin-top: 40px;
        }
        nav .logo{
            display: none;
        }
        nav ul{
            display: flex;
        }
        nav ul li a{
            color: #2F2F2F;
            display: block;
            margin: 0 2px;
            padding: 15px 20px;
            transition: 0.2s;
            text-decoration: none;
            
        }
        nav ul li a:hover{
            background: #F86D1A;
            color:#D9D9D9;
            text-decoration: none;
        }
        nav ul li a.active{
            background: #F86D1A;
            color:#D9D9D9;
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
            <input type="checkbox" id="nav_check" hidden>
            <nav>
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <ul>
                    <li>
                        <a href="mechHome.php">HOME</a>
                    </li>
                    <li>
                        <a href="mechMessage.php" class="active">MESSAGES</a>
                    </li>
                    <li>
                        <a href="profile.php">PROFILE</a>
                    </li>
                    <li>
                        <a href="mechAboutUs.php">ABOUT US</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="orange"></div>
        <div class="mainbody">
        <center>
        <?php
        require 'config.php';

        $username = $_SESSION['mechname'];

        $sql = ("SELECT DISTINCT msg_sender FROM messages WHERE msg_reciever='$username'");
        $dataset = $connect->query( $sql);
        while ($row = $dataset->fetch_assoc()) {
            $sender=$row["msg_sender"]; 
            echo "        <div class=\"container-sm\">
            <div class=\"card w-50 mx-auto my-3\" style=\"background-color:#2F2F2F;\">
                <div class=\"card-body\"><a style=\"color:white;\" href='mechanic_chat.php?username=$sender'>". $row["msg_sender"] . "<a></div></div></div>";
        }

        ?>
        </center>
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