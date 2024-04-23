<?php
require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form </title>
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
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
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

        <br>
        <div class="bg-yellow-300 rounded border-2 border-black px-5" style="border-radius: 30px;">
            <div>
                <h1 class="font-bold text-3xl ml-2 px-10">Application Form </h1>
            </div>
            <br>
            <form method="POST" action="process_form.php" onsubmit="showModal(event)">
                <div class="mt-8">
                    <label for="name" class="text-2xl">Name</label><br>
                    <input type="text" name="name"  class="mt-2 px-1 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" style="width: 350px;">
                </div>
                <div class="mt-8">
                    <label for="phone" class="text-2xl">Phone Number</label><br>
                    <input type="tel" name="phone"  class="mt-2 px-1 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" style="width: 350px;">
                </div>
                <div class="mt-8">
                    <label for="email" class="text-2xl">Email</label><br>
                    <input type="email" name="email"  class="mt-2 px-1 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" style="width: 350px;">
                </div>
                <div class="mt-8">
                    <label for="course" class="text-2xl">Course</label><br>
                    <input type="text" name="course"  class="mt-2 px-1 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" style="width: 350px;">
                </div>
                <div class="mt-8">
                    <label for="intake" class="text-2xl">Intake</label><br>
                    <input type="text" name="intake"  class="mt-2 px-1 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" style="width: 350px;">
                </div>
                <div class="mt-8 flex justify-center">
                    <input type="submit" value="Submit" class="text-white text-lg bg-blue-500 rounded-lg px-4 py-2">
                </div>
            </form>
        </div>
    </div>

    

    </div>
    <div id="success-modal" class="modal">
    <div class="bg-yellow-300 flex flex-col justify-center items-center rounded-lg fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="border-radius: 20px; width: 300px;">
            <h1 class="text-center font-bold text-2xl mb-4">Thank you for joining!</h1>
            <p class="text-center">Your Attendance has been successfully recorded</p>
            <button class="bg-gray-300 hover:bg-blue-400 text-black font-bold py-2 px-4 rounded-full mt-4" onclick="window.location.href='club.php'">Go to Home</button>
        </div>
    </div>
</body>
</html>



    <script>
        function showModal(event) {
            event.preventDefault();
            var modal = document.getElementById("success-modal");
            modal.style.display = "block";
        }

        var closeBtn = document.getElementsByClassName("close")[0];
        closeBtn.onclick = function() {
            var modal = document.getElementById("success-modal");
            modal.style.display = "";
        }
    </script>

   
