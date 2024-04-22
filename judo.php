<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judo </title>
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
    <div style="position: absolute; top: 10px; left: 10px;">
    <a href="club.php" class="text-white text-lg" ><i class="fas fa-arrow-left text-black"></i> </a>
    <br>
    </div>
<h3 class="text-2xl font-bold mb-4 text-white text-center">Judo</h3>

 
        <div class="flex justify-center">
            <img src="img/judo.png" alt="Badminton" class="w-25 h-45" style="border-radius: 50px;">
        </div>
    <br>
<div class="bg-yellow-300 rounded border-2 border-black" style="border-radius: 10px;">
    <div>
        <h2 class="font-bold text-xl">Description    <button class="bg-gray-600 rounded border-2 border-black text-white font-bold py-2 px-4 rounded float-right hover:bg-red-600" style="border-radius: 20px;" onclick="window.location.href = 'ApplicationForm.php'">Join Now!</button>
        </h2>
        </div>
      <br>
    <br>
    
<div class="text-center">
    <h3 style="font-size: 20px;">
    Unlock Your Potential with Politeknik Judo Club 🥋 <br><br>

Introducing our dynamic Judo club poster that captures the essence of our community. From throws to camaraderie, discipline to determination, it's all here. Join us on the journey to become a stronger, more skilled version of yourself.
<br><br>
Ready to make the leap?<br>
Do DM us for any questions, let's embark on this exciting adventure together!
    </h3>
    <div class="flex justify-center">
        <img src="img/judo2.png" alt="judo2" class="w-25 h-45" >
    </div>
</div>
</div>

   
    
        </body>
</html>