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
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000; 
    background: rgba(31, 31, 31, 0.9);

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
    width: 50%;
    margin: 0 auto; /* Centers the element horizontally */
    padding: 20px;
    text-align: center; /* Centers the text inside */
    background-color: #333; /* Optional: Adds a background color */
    border-radius: 10px; /* Optional: Adds rounded corners */
    margin-top: 5%; /* Optional: Adds margin to the top for vertical centering */
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

.message {
    background-color: #F86D1A; /* Orange for the sender */
    padding: 10px;
    margin: 10px;
    border-radius: 10px;
    max-width: 60%;
    align-self: flex-start; /* Align to the left */
    font-size: 12px; /* Smaller font size */
}

.messageMech {
    background-color: #3c3c3c; /* Dark gray for the mechanic */
    padding: 5px;
    margin: 10px;
    border-radius: 10px;
    max-width: 60%;
    align-self: flex-end; /* Align to the right */
    font-size: 12px; /* Smaller font size */
}


.xxdiv {
    display: flex;
    flex-direction: column;
    max-height: 400px;  /* Adjust the height as needed */
    overflow-y: auto;   /* Enables scrolling */
    padding-bottom: 20px; /* Adds space at the bottom to prevent the scrollbar overlapping messages */
}

.xxdiv .message,
.xxdiv .messageMech {
    margin: 5px 0;
}

</style>
    <body style="color:white;">
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
                    <li>
                        <a href="faqsmech.php">FAQs</a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- <div class="orange"></div> -->
        <div class="mainbody" style="width: 50%;">
        <?php
                require 'config.php';
                
                $mechname = $_SESSION['mechname'];//session the name of mechanic
                $username = $_GET['username'];
                

                ?>
               <div class="cnt">
    <br><br>  
    <center>
        <div class="chathead" style="background:#3c3c3c;padding: 20px;border-radius:5px; color:white; " ><?php echo $username?></div> <br>
        <div class="xxd" style="width:100%; display: flex; flex-direction: column; max-height: 400px; overflow-y: auto; padding-bottom: 20px;">
            <?php
            $sql = ("SELECT * FROM messages WHERE (msg_sender = '$username' AND msg_reciever = '$mechname') OR (msg_sender = '$mechname' AND msg_reciever = '$username')");
            $dataset = $connect->query($sql);
            if ($dataset) {
                if ($dataset->num_rows > 0) {
                    while ($row = $dataset->fetch_array()) { 
                        if ($row['msg_sender'] == $username) {
                            // Message from the other person (aligned to the left)
                            echo "<div class='message'><br>" . $row['msg_content'] . "<br><br></div>";
                        } else {
                            // Message from the mechanic (aligned to the right)
                            echo "<div class='messageMech' style='color:white;'><br>" . $row['msg_content'] . "<br><br></div>";
                        }
                    }
                }
            }
            ?>
        </div>

        <?php
        require 'config.php';
        if (isset($_POST['send'])) {
            $mechname = $_SESSION['mechname']; // session the name of mechanic
            $username = $_GET['username'];
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

            <div class="d-flex flex-row-reverse">
                <input type="submit" class="submit" value="SEND" name="send" style="background-color:#F86D1A;border:none; width:20%;padding:5px; color:white;border-radius:5px;">
            </div>
        </form>
    </center>
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