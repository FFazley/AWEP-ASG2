<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code </title>
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
        
    </style>
</head>
<body class="flex flex-col" style="background-color: #08415C;">
<div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
    <img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
    <br>
    <a href="home.php" class="text-white text-lg" style="margin-left: -100px;"><i class="fas fa-arrow-left text-black"></i> </a>
<br>
<br>
<br>    
    <div style="text-align: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <img src="img/qr.png">
    
        <h1 style="color: white; font-size: 25px;">Scan <b>QR</b> for <b>Attendance</b></h1>
        <div class="flex justify-center" style="margin-top: 20px;">
        <button class="bg-yellow-300 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            <a href="scan.php" style="text-decoration: none; color: black;">
                <i class="fas fa-qrcode" style="color: black; font-size: 24px; "><span style="margin-left: 15px;">Scan Now</span></i>
            </a>
        </button>
    </div>
    </div>

  
    <nav class="bg-yellow-300 text-white px-4 py-2 flex justify-center" style="border-top-left-radius: 40%; border-top-right-radius: 40%; border: 1px solid black;position: fixed; bottom: -10px; left: -10px; right: -10px;">
        <ul class="flex space-x-10 items-center"> <!-- Increased space-x value to 8 -->
            <li class="nav-item"><a href="home.php"><i class="fas fa-home" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="club.php"><i class="fas fa-clipboard-list" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="#"><i class="fas fa-qrcode" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="#"><i class="fas fa-user" style="color: black; font-size: 24px;"></i></a></li>
        </ul>
    </nav>
</div>
   
</body>
</html>