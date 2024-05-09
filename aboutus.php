<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US </title>
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
    <a href="UserProfile.php" class="text-white text-lg" ><i class="fas fa-arrow-left text-black"></i> </a>
    <br>
    
     
    </div>


    <div style="text-align: center; position: fixed; top: 0%; left: 0%;right:10%;bottom:0%; transform: translate(5%, 0%);">
    <br>
    <h1 style="font-size: 30px; color: white; margin-top: 10%;">ABOUT US</h1>

    
        <div  style="margin-top: 50px;">
        
            <div class="bg-gray-300 bg-opacity-60 text-black font-bold py-6 px-4 rounded " style="border: 2px solid black;">
            <div class="flex justify-center">
                <img src="img/Logo.png" alt="Logo" style="width: 200px; height: auto;">
            </div>
                <p>An app designed to track student outcomes and progress. It aims to provide clear guidance for the development and use of brands by ensuring consistency and efficiency across brands and interactions on the app.</p>
                <p>The EP Quest brand identity is built to provide an attractive and enduring image for the app in the educational technology space. Our goal is to differentiate itself from its competitors and effectively communicate the app’s mission, values, and benefits to the intended audience.</p>
            </div>
           
        </div>
        <br>
<div style="color: white; font-size: 20px;">
    <h2>Copyright DWDT08 <br>
    Privacy & Term</h2>
</div>
    </div>
    

</div>
</div>

</body>
</html>