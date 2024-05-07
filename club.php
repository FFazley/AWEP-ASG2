<?php
require 'database.php';

// Initialize the list of club items
$clubItems = array(
    array("name" => "badminton", "image" => "img/badminton1.png"),
    array("name" => "rugby", "image" => "img/rugby1.png"),
    array("name" => "judo", "image" => "img/judo.png")
);

// Check if the search query is set
if(isset($_GET['search'])) {
    // Get the search query from the URL
    $search = $_GET['search'];

    // Filter club items based on the search query
    $filteredItems = array_filter($clubItems, function($item) use ($search) {
        return stripos($item['name'], $search) !== false;
    });

    // Update clubItems to contain only filtered items
    $clubItems = $filteredItems;
  
    // Check if any items match the search query
    if(empty($clubItems)) {
        echo "<p class='text-white text-center text-2xl' style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Search not available</p>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club </title>
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
<h3 class="text-2xl font-bold mb-4 text-white text-center">Club</h3>
    <br>
    
    

    <!-- Search Form -->
    <form action="club.php" method="GET" class="flex justify-center mb-20">
        <div class="relative">
            <input type="text" name="search" placeholder="Search" class="border border-gray-300 rounded-md py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:border-transparent w-80">
            <i class="fas fa-search text-gray-400 absolute top-3 left-3"></i>
        </div>
        <button type="submit"></button>
    </form>

    <!-- Display Club Items -->
    <div class="flex justify-center flex-wrap">
        <?php foreach ($clubItems as $item): ?>
            <div class="flex justify-center">
                <a href="<?php echo $item['name'] . '.php'; ?>">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" class="w-25 h-45" style="border-radius: 20px;">
                </a>
            </div>
            <br>
        <?php endforeach; ?>
    </div>

</body>
</html>

        <br>
        <br>
    <nav class="bg-yellow-300 text-white px-4 py-2 flex justify-center" style="border-top-left-radius: 40%; border-top-right-radius: 40%; border: 1px solid black;position: fixed; bottom: -10px; left: -10px; right: -10px;">
        <ul class="flex space-x-10 items-center"> <!-- Increased space-x value to 8 -->
            <li class="nav-item"><a href="home.php"><i class="fas fa-home" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="#"><i class="fas fa-clipboard-list" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="qr.php"><i class="fas fa-qrcode" style="color: black; font-size: 24px;"></i></a></li>
            <li class="nav-item"><a href="UserProfile.php"><i class="fas fa-user" style="color: black; font-size: 24px;"></i></a></li>
        </ul>
    </nav>

        </body>
</html>