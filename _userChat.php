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
        <title>mechanic chat | callmechanic</title>
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
        .mesbox{
            width:100%;
        }
        .message{
            background-color:#626262;
            border-radius:10px;
            margin-bottom:10px;
            padding:10px;
            width:60%;
            float: right;
        }
        .messageMech{
            background-color:#F86D1A;
            margin-bottom:10px;
            color:white;
            padding:10px;
            border-radius:10px;
            width:60%;
            float: left;
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
            font-size: 20px;
            color:orange;
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
        .cnt{
            background-color:dark;
            border-radius: 5px;
            width:40%;
            padding: 15px;
            margin: auto;
            margin-top:5%;
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
    <body style="color:white;">
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
                    <a href="home.php">HOME</a>
                </li>
                <li>
                    <a href="_messages.php"  class="active">MESSAGES</a>
                </li>
                <li>
                    <a href="mech.php">MECHANIC</a>
                </li>
                <li>
                    <a href="forum.php">ON ROAD HELP</a>
                </li>
                <li>
                    <a href="userprofile.php" >PROFILE</a>
                </li>
                <li>
                    <a href="aboutus.php">ABOUT US</a>
                </li>
                <li>
                    <a href="faqs.php">FAQs</a>
                </li>
                </ul>
            </nav>
        </header>
        <div class="orange"></div>
        <div class="mainbody">
        <?php
                require 'config.php';
                
                $username= $_GET['username'];//session the name of mechanic
                 $mechname= $_SESSION['fname'] . " " . $_SESSION['lname'];
                

                ?>
                <div class="cnt">
                <br><br>  
                <center>
                <div class="chathead" style="background:#3c3c3c;padding: 20px;border-radius:5px; color:white; " ><?php echo $username?></div> <br>
                <div class="xxd" style="width:100%;">
                
            
                <?php
                    $sql = ("SELECT * FROM messages WHERE (msg_sender = '$username 'AND msg_reciever = '$mechname') OR (msg_sender = '$mechname' AND msg_reciever = '$username')");
                    $dataset = $connect->query($sql);
                    if ($dataset) {
                        if ($dataset->num_rows > 0) {
                            while ($row = $dataset->fetch_array()) { 
                                {
                                if ($row['msg_sender'] == $username){

                                    echo "<div class='mesbox'><div class='messageMech' style='color:white;'><br>";
                                    echo "" . $row['msg_content'] . "<br><br></div></div>";
                                }
                                else{
                                    echo "<div class='message' ><br>";
                                    echo "" . $row['msg_content'] . "<br><br></div>";
                                }

                                }
                            }
                        }
                    }
                
                ?>
                </div>
                <?php
                require 'config.php';
                if (isset($_POST['send'])) {
                    $username= $_GET['username'];//session the name of mechanic
                    $mechname= $_SESSION['fname'] . " " . $_SESSION['lname'];
                    $message = $_POST['message_content'];
                    $dataset = $connect->query("INSERT INTO `messages`(`msg_sender`, `msg_reciever`, `msg_content`) VALUES ('$mechname','$username','$message')") or die("Error query");
                    $connect->close();
                }
                
                ?>
                
                <form action="" method="POST">
                    <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" rows="2" name="message_content" placeholder="Type your message here ..."></textarea>
                        </div>
                    </div>
                    
                    <!-- <div class="d-flex flex-row-reverse">
                                <button type="button" class="btn btn-primary btn-sm" value="SEND" name="send" style="background-color:#F86D1A;border:none; width:20%;padding:5px;"><a href="" style="text-decoration:none; color:#D9D9D9;">message</a></button>
                            </div> -->
                    <div class="d-flex flex-row-reverse">
                        <input type="submit" class="submit" value="SEND" name="send" style="background-color:#F86D1A;border:none; width:20%;padding:5px; color:white;border-radius:5px;"><a href="" style="text-decoration:none; color:#D9D9D9;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30657.83970580497!2d120.55093375000001!3d16.1570871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1704611535540!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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