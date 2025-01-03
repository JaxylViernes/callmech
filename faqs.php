<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - NearbyMechanics</title>
    <style> * {
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
        color: orange;
        font-size: 20px;
        font-weight: : bold;
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

    .table-container {
        max-height: 400px;
        overflow-y: auto;
        display: block;
        margin-top: 50px;
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
    .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 15px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .faq-item {
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }
        .faq-question {
            cursor: pointer;
            padding: 10px;
            background-color:orange;
            color: white;
            border-radius: 4px;
            font-size: 1.1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .faq-question:hover {
            background-color:orange;
        }
        .faq-answer {
            display: none;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 4px;
            margin-top: 5px;
            color: black;
        }
        .faq-answer ul {
            padding-left: 20px;
        }
      
 
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const questions = document.querySelectorAll(".faq-question");
            questions.forEach(question => {
                question.addEventListener("click", function() {
                    const answer = this.nextElementSibling;
                    answer.style.display = answer.style.display === "block" ? "none" : "block";
                });
            });
        });
    </script>
</head>
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
                    <a href="aboutus.php">ABOUT US</a>
                </li>
                <li>
                    <a href="faqs.php"  class="active">FAQs</a>
                </li>
                <li>
    <a href="notifications.php"><i class="fas fa-bell"></i></a>
</li>
            </ul>
        </nav>
    </header>

<div class="container">
    <?php
    $faqs = [
        "What should I do if my car breaks down on the road?" => [
            "Move your car to a safe location, such as the shoulder of the road.",
            "Turn on your hazard lights to alert other drivers.",
            "Call for roadside assistance or a trusted mechanic from our platform."
        ],
        "How can I stay safe during a car breakdown?" => [
            "Remain inside your vehicle if it's unsafe to exit, especially on busy roads.",
            "If you need to step out, wear a reflective vest and place warning triangles behind your car to improve visibility."
        ],
        "What should I check if my car won’t start?" => [
            "Ensure the battery terminals are clean and connected tightly.",
            "Check if the battery has charge; try jump-starting if you have cables and another vehicle.",
            "Confirm that your car is in 'Park' or 'Neutral' and that the brake pedal is pressed."
        ],
        "What should I do if I get a flat tire?" => [
            "Pull over to a flat and safe area away from traffic.",
            "Use your emergency tools (jack, spare tire, lug wrench) to replace the flat tire.",
            "Follow the step-by-step guide in your car’s manual, or contact a mechanic through our app."
        ],
        "How do I deal with overheating?" => [
            "Turn off the engine and wait for it to cool down.",
            "Open the hood carefully to let heat escape.",
            "Check coolant levels if you have coolant available, but never open the radiator cap while the engine is hot."
        ],
    ];

    foreach ($faqs as $question => $answers) {
        echo "<div class='faq-item'>";
        echo "<div class='faq-question'>$question <span>&#x25BC;</span></div>";
        echo "<div class='faq-answer'><ul>";
        foreach ($answers as $answer) {
            echo "<li>$answer</li>";
        }
        echo "</ul></div>";
        echo "</div>";
    }
    ?>
</div>

<div class="carcare" style="text-align: center">
<p>For more info or DIY repair visit this site: <a href="https://www.carcarekiosk.com/">CarCareKiosk</a></p>
</div>
</body>
</html>
