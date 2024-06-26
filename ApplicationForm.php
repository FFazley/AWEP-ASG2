<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $intake = $_POST['intake'];

    $sql = "INSERT INTO applications (name, phone, email, course, intake) VALUES (?, ?, ?, ?, ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$name, $phone, $email, $course, $intake]);
}
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
            <form method="POST" action="ApplicationForm.php" onsubmit="showModal(event)">
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
                    <select name="course" class="mt-2 px-1 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" style="width: 350px;">
                    <option value=""></option>   
                    <option value="business_accounting_finance">Business Accounting & Finance</option>
                        <option value="human_capital_management">Human Capital Management</option>
                        <option value="apprenticeship_hospitality_management_operations">Apprenticeship Hospitality Management & Operations</option>
                        <option value="entrepreneurship_marketing_strategies">Entrepreneurship & Marketing Strategies</option>
                        <option value="midwifery">Midwifery</option>
                        <option value="nursing">Nursing</option>
                        <option value="paramedic">Paramedic</option>
                        <option value="public_health">Public Health</option>
                        <option value="cardiovascular_technology">Cardiovascular Technology</option>
                        <option value="application_development">Application Development</option>
                        <option value="cloud_and_networking">Cloud and Networking</option>
                        <option value="digital_arts_media">Digital Arts & Media</option>
                        <option value="web_technology">Web Technology</option>
                        <option value="data_analytics">Data Analytics</option>
                        <option value="mechanical_engineering">Mechanical Engineering</option>
                        <option value="petroleum_engineering">Petroleum Engineering</option>
                        <option value="civil_engineering">Civil Engineering</option>
                        <option value="electrical_engineering">Electrical Engineering</option>
                        <option value="electronic_communication_engineering">Electronic and Communication Engineering</option>
                    </select>
                </div>
                <div class="mt-8">
                    <label for="intake" class="text-2xl">Intake</label><br>
                    <input type="text" name="intake"  class="mt-2 px-1 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" style="width: 350px;">
                </div>
                <form>
                <div class="mt-8 flex justify-center">
                    <button type="submit" class="text-white text-lg bg-blue-500 rounded-lg px-4 py-2">Submit</button>
                    </<form (ngSubmit)="onSubmit()" #form="ngForm">
                    
                </div>
            </form>
        </div>
    </div>

    

    </div>
    <div id="success-modal" class="modal">
    <div class="bg-yellow-300 flex flex-col justify-center items-center rounded-lg fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="border-radius: 20px; width: 300px;">
        <span class="close">&times;</span>    <h1 class="text-center font-bold text-2xl mb-4">Thank you for joining!</h1>
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

    // Create a new FormData object from the form
    var formData = new FormData(event.target);

    // Use AJAX to submit the form data
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "ApplicationForm.php", true);
    xhr.send(formData);

    xhr.onload = function() {
        if (xhr.status == 200) {
            console.log("Form submitted successfully");
        } else {
            console.error("Error submitting form");
        }
    }
}

var closeBtn = document.getElementsByClassName("close")[0];
closeBtn.onclick = function() {
    var modal = document.getElementById("success-modal");
    modal.style.display = "";
}
    </script>

   
