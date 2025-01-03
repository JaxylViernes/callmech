<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/w1.png">
    <!-- <link rel="stylesheet" href="mainstyle.css"> -->
    <link rel="stylesheet" href="boxicons-master/css/boxicons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://kit.fontawesome.com/5a10e0b94b.js" crossorigin="anonymous"></script>
    <title>mechanic home | callMechanic</title>
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
                            <img class="imglogo" src="image/NEARMELOGO.png">
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
            <ul>
            <li>
                    <a href="mechHome.php" class="active">HOME</a>
                    </li>
                <!-- </li>
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
                </li> -->
                <li>
                        <a href="mechMessage.php">MESSAGES</a>
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
                <!-- <li>
    <a href="notifications.php"><i class="fas fa-bell"></i></a>
    </li> -->
</ul>
            </li>
            </ul>
        </nav>
    </header>
    <div class="orange"></div>
    <!-- post field -->
    <!-- <div class="container-sm">
        <div class="card w-50 mx-auto my-3">
            <div class="card-body">
                <form method="POST">
                    <img src="" width="40" height="40">
                    <?php $fname = $_SESSION['fname'];
                    $lname = $_SESSION['lname'];
                    echo $fname . " " . $lname; ?><br><br>
                    <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" rows="2" name="post_content" placeholder="Looking for a mechanic..."></textarea>
                        </div>
                    </div>
                    <div class="btn-text-right">
                        <input type="submit" class="submit" value="Post" name="POST">
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- inserting post on db-->
    <?php
    if (isset($_POST['POST'])) {
        require 'config.php';
        $post_content  = $_POST['post_content'];
        $user_id = $_SESSION['user_id'];
        $dataset = $connect->query("INSERT INTO `post`(`user_id`, `content`, `date_created`) VALUES ($user_id,'$post_content','" . strtotime(date("Y-m-d h:i:sa")) . "')") or die("Error query");
        $connect->close();
    } ?>
    <!-- inserting comment on db-->
    <?php
    if (isset($_POST['comment'])) {
        require 'config.php';
        $comment_content = $_POST['comment_content'];
        $post_id = $_POST['id'];
        $user_id = $_SESSION['mechanicid'];
        $dataset = $connect->query("INSERT INTO `comment`(`post_id`, `mechanic_id`, `content`, `date_posted`) VALUES ($post_id,$user_id,'$comment_content','" . strtotime(date("Y-m-d h:i:sa")) . "')") or die("Error query");
        $connect->close();
    }
    ?>
    <!-- displaying post on page-->
    <?php
    require 'config.php';
    $query = mysqli_query($connect, "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC") or die("Error query");
    while ($post_row = mysqli_fetch_array($query)) {
        $id = $post_row['post_id'];
        $upid = $post_row['user_id'];
        $username = $post_row['first_name'] . " " . $post_row['last_name'];
        $user_pic=$post_row['profile_pic'];
    ?>
        <div class="container-sm">
            <div class="card w-50 mx-auto my-3">
                <div class="card-body">
                    <table>
                        <tr>
                            <td><a href="#"><img src="image/<?php echo $user_pic; ?>" alt="" srcset="" class="rounded-circle mx-2" width="40" height="40"></a></td>
                            <td> <a href="#"><?php echo $username; ?></a>
                                <br>
                                <div class="label">
                                    <?php
                                    $days = floor($post_row['TimeSpent'] / (60 * 60 * 24));
                                    $remainder = $post_row['TimeSpent'] % (60 * 60 * 24);
                                    $hours = floor($remainder / (60 * 60));
                                    $remainder = $remainder % (60 * 60);
                                    $minutes = floor($remainder / 60);
                                    $seconds = $remainder % 60;
                                    if ($days > 0)
                                        echo date('F d, Y - H:i:sa', $post_row['date_created']);
                                    elseif ($days == 0 && $hours == 0 && $minutes == 0)
                                        echo "A few seconds ago";
                                    elseif ($days == 0 && $hours == 0)
                                        echo $minutes . ' minutes ago';
                                    elseif ($hours == 1)
                                        echo 'an hour ago';
                                    elseif ($hours > 1)
                                        echo $hours . ' hours ago';
                                    ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="d-flex flex-row-reverse">
<?php
if (isset($_POST['comment'])) {
    // ... (existing code for inserting comments)

    // Insert notification for the user
    $user_id = $_SESSION['user_id']; // Assuming this session variable holds the user's ID
    $mechanic_id = $_SESSION['mechanicid']; // Assuming this session variable holds the mechanic's ID
    $post_id = $id; // Assuming $id is the post ID where the mechanic replied

    $notification_text = "Mechanic replied to your post.";
    $notification_query = $connect->query("INSERT INTO notifications (user_id, mechanic_id, post_id, notification_text) VALUES ($user_id, $mechanic_id, $post_id, '$notification_text')");
}


                        echo "<button type=\"button\" class=\"btn btn-primary btn-sm\" style=\"background-color:#F86D1A;border:none; width:20%;padding:5px;\"><a href=\"mechanic_chat.php?username=$username\" style=\"text-decoration:none; color:#D9D9D9;\">message</a></button>";
?>
                    </div>
                    <hr>
                    <?php echo $post_row['content']; ?>
                    <hr>

                    <!-- comment field -->
                    <form method="post">
                        Comment:<br>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="flex justify-center">
                            <div class="mb-1 xl:w-96">
                                <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" rows="1" name="comment_content" placeholder="Type your comment..."></textarea>
                            </div>
                        </div>
                        <div class="btn-text-right">
                            <input type="submit" name="comment" value="Reply">
                        </div>
                    </form>
                    <hr>
                    <!-- displaying comment -->
                    <?php
                    require 'config.php';
                    $comment_query = mysqli_query($connect, "SELECT * ,UNIX_TIMESTAMP() - date_posted AS TimeSpent FROM comment LEFT JOIN mechanics on mechanics.mechid = comment.mechanic_id where post_id = '$id'") or die("Error query");
                    while ($comment_row = mysqli_fetch_array($comment_query)) {
                        $comment_id = $comment_row['comment_id'];
                        $comment_by = $comment_row['mechName'];
                        $mechpic=$comment_row['mech_pfp'];
                    ?>
                        <table>
                            <tr>
                                <td><a href="#"><img src="image/<?php echo $mechpic; ?>" alt="" srcset="" class="rounded-circle mx-2" width="40" height="40"></a></td>
                                <td><a href="#"><?php echo $comment_by; ?></a> : <?php echo $comment_row['content']; ?>
                                    <div class="label">
                                        <?php
                                        $days = floor($comment_row['TimeSpent'] / (60 * 60 * 24));
                                        $remainder = $comment_row['TimeSpent'] % (60 * 60 * 24);
                                        $hours = floor($remainder / (60 * 60));
                                        $remainder = $remainder % (60 * 60);
                                        $minutes = floor($remainder / 60);
                                        $seconds = $remainder % 60;
                                        if ($days > 0)
                                            echo date('F d, Y - H:i:sa', $comment_row['date_posted']);
                                        elseif ($days == 0 && $hours == 0 && $minutes == 0)
                                            echo "A few seconds ago";
                                        elseif ($days == 0 && $hours == 0)
                                            echo $minutes . ' minutes ago';
                                        elseif ($hours == 1)
                                            echo 'an hour ago';
                                        elseif ($hours > 1)
                                            echo $hours . ' hours ago';
                                        ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <hr>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>