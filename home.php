<?php
session_start();
require 'database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .nav-item {
            transition: transform 0.3s ease-in-out;
        }

        .nav-item:hover {
            transform: translateY(-20px);
        }

        .pop-out {
            animation: popOut 0.3s;
        }

        .icon-bigger {
            font-size: 30px;
        }

        @keyframes popOut {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

       

            .flex-container {
                flex-direction: column;
                align-items: center;
            }

            .flex-container img {
                margin-bottom: 10px;
            }

            .flex-container h1 {
                font-size: 16px;
                margin-left: 0;
            }

            .bg-yellow-300 {
                margin: 10px;
                padding: 10px;
            }

            .bg-yellow-300 p {
                font-size: 14px;
            }

            .nav-item {
                margin: 5px;
            }
        
    </style>
</head>
<body class="flex flex-col" style="background-color: #08415C;">
    <div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
    <img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
    <br>

    <div class="flex-container">
    <div style="position: absolute; top: 15px; left: 10px;">
   
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFiZpdaReqrOX5ZTox5ZwsWVttl0rVBCreNQ&s" style="width: 100px; height: 100px; margin-left: 10px; border: 2px solid yellow; border-radius: 50%;">
    </div>
    <div style="color: white; font-size: 20px; position: absolute; top: 45px; left: 150px;">
            <h1 style="color: white; font-size: 30px">Hello <?php echo ucfirst($_SESSION['name']); ?>!</h1>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="bg-yellow-300 rounded-lg shadow-md p-8" style="border: 2px solid;">
        <div class="flex items-center">
            <p>Hello <?php echo ucfirst($_SESSION['name']); ?>! Your <b>Total EP POINTS</b> for this month is 135pt!</p>
            <div>
                <img src="img/student.png" style="margin-left: 10px; width: 150px; height: 100px;">
            </div>
        </div>
        <button id="leaderboardBtn" style="border-radius: 10px; background-color: blue; color: white; padding: 10px 20px;" onclick="window.location.href = 'leaderboard.php';">See Leaderboard</button>
    </div>

    <br>
    <br>
    <h1 style="color: white; text-align: center;">SCHOOL ACTIVITY</h1>
    <h4 style="color: white; text-align: center;">Endorsed by PB CDSI</h4>
    <br>
    <br>
    <div class="bg-yellow-300 rounded-lg shadow-md p-8 " style="border: 2px solid;">
        <div class="flex items-center">
            <div>
                <img src="img/img1.png" style="max-width: 100%; height: auto; border: 2px solid;">
                <br>
                <p><b>PB Convo Volunteer needed
                    Open to all PB students.</b>
                    <br>
                    Join us! Interested students can register by scanning the QR code provided
                    <br>
                    Deadline of registration: 11th October 2023</p>
            </div>
        </div>
    </div>
    <br>

    <div class="bg-yellow-300 rounded-lg shadow-md p-8 " style="border: 2px solid;">
        <div class="flex items-center">
            <div>
                <img src="img/img2.png" style="width: 650px; height: 200px;   border: 2px solid;">
                <br>
                <p><b>HIV Awareness Programme for Peers and Youth is now open for registration.</b>
                    <br>
                    Interested Politeknik Brunei Students are welcome to register by filling in the EM01A Sign-Up Form in LMS.</p>
            </div>
        </div>
    </div>

    <br>

    <br><br><br>
    <nav class="bg-yellow-300 text-white px-4 py-2 flex justify-center" style="border-top-left-radius: 40%; border-top-right-radius: 40%; border: 1px solid black;position: fixed; bottom: -10px; left: -10px; right: -10px;">
        <ul class="flex space-x-10 items-center"> <!-- Increased space-x value to 8 -->
            <li class="nav-item"><a href="#"><i class="fas fa-home" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="club.php"><i class="fas fa-clipboard-list" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="qr.php"><i class="fas fa-qrcode" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="UserProfile.php"><i class="fas fa-user" style="color: black; font-size: 24px;"></i></a></li>
        </ul>
    </nav>

  
    <script>
        const leaderboardBtn = document.getElementById('leaderboardBtn');
        leaderboardBtn.addEventListener('click', () => {
            leaderboardBtn.classList.add('pop-out');
            const icons = document.querySelectorAll('.nav-item i');
            icons.forEach(icon => {
                icon.classList.toggle('icon-bigger');
            });
        });
    </script>
    </div>
    
</body>

</html>