<?php

require 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
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
        
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body class="flex flex-col" style="background-color: #08415C;">
    <div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
        <img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
        <br>
        <div style="position: absolute; top: 10px; left: 10px;">
            <a href="club.php" class="text-white text-lg" ><i class="fas fa-arrow-left text-black"></i> </a>
            <br>
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white text-center">User Profile</h3>

        <div class="flex justify-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFiZpdaReqrOX5ZTox5ZwsWVttl0rVBCreNQ&s" style="width: 150px; height:150px; margin-left: 10px; border: 2px solid yellow; border-radius: 50%;">
    </div>
    <br>
    <div class="flex justify-center">
        <h3 class="text-white text-lg">Muhammad Hasbullah Bin Bakar</h3>
    </div>
    <div class="flex justify-center">
        <h4 class="text-white text-sm">22FTT1494@student.pb.edu.bn</h4>
    </div>
        <br>
        <div class="mt-6">
    <div class="bg-yellow-300 rounded border-2 border-black" style="border-radius: 10px; text-align: center; width: 350px;">
        <h2 class="text-xl font-bold">Total Point : 135 points</h2>
    </div>
        </div>
        <div class="mt-6">
    <div class="bg-yellow-300 rounded border-2 border-black flex items-center" style="border-radius: 10px; width: 350px;">
        <i class="fas fa-id-card-alt text-xl mr-2"></i>
        <h2 class="text-xl font-bold">22FTT1494</h2>
    </div>
        </div>
        <div class="mt-6">
    <div class="bg-yellow-300 rounded border-2 border-black flex items-center" style="border-radius: 10px; width: 350px;">
        <i class="fas fa-code text-xl mr-2"></i>
        <h2 class="text-xl font-bold">Web Development</h2>
    </div>
        </div>
        <div class="mt-6">
    <div class="bg-yellow-300 rounded border-2 border-black flex items-center" style="border-radius: 10px; width: 350px;">
        <i class="fas fa-phone-alt text-xl mr-2"></i>
        <h2 class="text-xl font-bold">+673 777 7777</h2>
    </div>
        </div>
        <div class="mt-6">
    <div class="bg-yellow-300 rounded border-2 border-black flex items-center" style="border-radius: 10px; width: 350px;">
        <i class="fas fa-info-circle text-xl mr-2"></i>
        <h2 class="text-xl font-bold"><a href="aboutus.php">About us</a></h2>
    </div>
    </div>
        
        <div class="mt-6">
    <div class="bg-yellow-300 rounded border-2 border-black flex items-center" style="border-radius: 10px; width: 350px;">
        <i class="fas fa-sign-out-alt text-xl mr-2"></i>
        <h2 class="text-xl font-bold">Log Out</h2>
    </div>
        </div>
    </div>
        
    
    <br><br><br>
    <nav class="bg-yellow-300 text-white px-4 py-2 flex justify-center" style="border-top-left-radius: 40%; border-top-right-radius: 40%; border: 1px solid black;position: fixed; bottom: -10px; left: -10px; right: -10px;">
        <ul class="flex space-x-10 items-center"> <!-- Increased space-x value to 6 -->
            <li class="nav-item"><a href="home.php"><i class="fas fa-home" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="club.php"><i class="fas fa-clipboard-list" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="qr.php"><i class="fas fa-qrcode" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="#"><i class="fas fa-user" style="color: black; font-size: 24px;"></i></a></li>
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