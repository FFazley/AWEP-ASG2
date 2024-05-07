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
    <div style="position: absolute; top: 10px; left: 10px;">
    <a href="home.php" class="text-white text-lg" ><i class="fas fa-arrow-left text-black"></i> </a>
    <br>
    
     
    </div>
<br>
<br>    
    <div style="text-align: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
      
        <div class="flex justify-center" style="margin-top: 20px;">
            
                <div class="bg-yellow-300  text-black font-bold py-2 px-4 rounded-full">
                    Scan Now
                </div>
            </a>
        </div>
    </div>
    </div>
    </div>

  
    
</div>
   
</body>
</html>