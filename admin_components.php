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
    <title>mechanics | callmechanic</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/78f0025f7d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
    img {
        width: 100%;
    }

    .logo{
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

    table {
        width: 100%;
    }

    .input-field .input {
        height: 45px;
        width: 87%;
        border: none;
        border-radius: 30px;
        color: #fff;
        font-size: 15px;
        padding: 0 0 0 45px;
        background: rgba(255, 255, 255, 0.1);
        outline: none;
    }

    .avatar {
        vertical-align: middle;
        width: 100px;
        height: 100px;
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
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <ul>
                <li>
                    <a href="admin_status_approval.php">Status Approval</a>
                </li>
                <li>
                    <a href="admin_components.php" class="active">Components</a>
                </li>
                <li>
                    <a href="adminlogin.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- <div class="orange"></div> -->
    <div class="mainbody" style="margin-top: 100px;">
        <img src="img/rc.png" style="opacity:0.05; position:fixed; width:70%; margin-left:25%; margin-top:0%;">
        <div class="row" style="margin-top:2%;">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="d-flex flex-row-reverse">
                    <button data-bs-toggle="modal" data-bs-target="#myModal" style="background-color:lightgrey;border:none; width:180%;padding:8px;color:black;border-radius:5px;">Add Logo</button>
                </div>
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content" style="color:#2F2F2F;">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color: #F86D1A;color:#D9D9D9;">
                                <h4 class="modal-title text-light">Add Logo</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-dark" style="padding: 20px;">
                                <form action="insert_logo.php" method="post" enctype="multipart/form-data">
                                    <br><b>Upload Logo:</b><br>
                                    <input type="file" name="image" accept=".jpg, .jpeg, .png" style="width:100%; padding: 5px;border:none;">
                                    <br><br>
                                    <div class="d-flex flex-row-reverse">
                                        <input type="submit" class="btn btn-light" style="background-color:#F86D1A; color:white; width:35%;" value="Add">
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                require 'config.php';
                $sql = "SELECT * FROM `components_images` where components_name='logo'";
                $dataset = $connect->query($sql);
                if ($dataset) {
                    if ($dataset->num_rows > 0) {
                        while ($row = $dataset->fetch_array()) {
                            $image = $row['2'];
                            $status = $row['3'];
                ?>
                            <div class="container-sm">
                                <div class="card w-50 mx-auto my-3" style="background-color:#2F2F2F;">
                                    <div class="card-body">
                                        <table style="width:100%;">
                                            <tr>
                                                <td><img src="image/<?php echo $image; ?>" class="rounded-circle mx-2" width="200" height="100%"></td>
                                            </tr>
                                            <tr>
                                                <td> <?php if ($status == "Not Current") {
                                                            echo "<center><a style=\"text-decoration:none;color:white\" href='setcurrent.php?id=" . $row["0"] . "'>Set as current</a> | <a style=\"text-decoration:none;color:white\" href='delete.php?id=" . $row["0"] . "'>Delete</a></center>";
                                                        } else if ($status == "Current") {
                                                            echo "<div style=\"background-color:#F86D1A\">Current</div>";
                                                            echo "<center><a style=\"text-decoration:none;color:red;\" href='undocurrent.php?id=" . $row["0"] . "'>Undo Current</a></center>";
                                                        } ?> </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
                <div class="d-flex flex-row-reverse">
                    <button data-bs-toggle="modal" data-bs-target="#myModal1" style="background-color:lightgrey;border:none; width:180%;padding:8px;color:black;border-radius:5px;">Add New Background Photo</button>
                </div>
                <div class="modal" id="myModal1">
                    <div class="modal-dialog">
                        <div class="modal-content" style="color:#2F2F2F;">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color: #F86D1A;color:#D9D9D9;">
                                <h4 class="modal-title text-light">Add Background</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-dark" style="padding: 20px;">
                                <form action="insert_bg.php" method="post" enctype="multipart/form-data">
                                    <br><b>Upload New Background:</b><br>
                                    <input type="file" name="image" accept=".jpg, .jpeg, .png" style="width:100%; padding: 5px;border:none;">
                                    <br><br>
                                    <div class="d-flex flex-row-reverse">
                                        <input type="submit" class="btn btn-light" style="background-color:#F86D1A; color:white; width:35%;" value="Add">
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                require 'config.php';
                $sql = "SELECT * FROM `components_images` where components_name='background_img'";
                $dataset = $connect->query($sql);
                if ($dataset) {
                    if ($dataset->num_rows > 0) {
                        while ($row = $dataset->fetch_array()) {
                            $image = $row['2'];
                            $status = $row['3'];
                ?>
                            <div class="container-sm">
                                <div class="card w-50 mx-auto my-3" style="background-color:#2F2F2F;">
                                    <div class="card-body">
                                        <table style="width:100%;">
                                            <tr>
                                                <td><img src="image/<?php echo $image; ?>" width="200" height="100%"></td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#F86D1A"><?php echo $status; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php if($status!="Not Current"){echo "<center><a style=\"text-decoration:none;color:red;\" href='undocurrent.php?id=" . $row["0"] . "'>Undo Current</a></center>";}?></td>
                                            </tr>
                                            <tr>
                                                <td> <?php
                                                        echo "Set on: <br> <a style=\"text-decoration:none;color:white;\" href='setcurrent_usertyp.php?id=" . $row["0"] . "'>User_Type</a> | <a style=\"text-decoration:none;color:white;\" href='setcurrent_login.php?id=" . $row["0"] . "'>login</a> |  <a style=\"text-decoration:none;color:white;\" href='setcurrent_register.php?id=" . $row["0"] . "'>register</a>
                                                            <br> <a style=\"text-decoration:none;color:red;\" href='delete.php?id=" . $row["0"] . "'>Delete</a>";
                                                        ?> </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>

                <div class="col-md-2">
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