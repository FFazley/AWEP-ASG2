<?php
session_start();
require 'database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="flex flex-col" style="background-color: #08415C;">
<div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
<img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
<br>
<div style="position: absolute; top: 10px; left: 10px;">
<a href="home.php" class="text-white text-lg" ><i class="fas fa-arrow-left text-black"></i> </a>
</div>
<br>
<br>
<h3 class="text-2xl font-bold mb-4 text-white text-center">Leaderboard</h3>
<img src="https://www.icegif.com/wp-content/uploads/2023/07/icegif-132.gif" alt="Image" class="mx-auto" style="max-width: 200px; border: 2px solid black; border-radius: 10px;">

<br><div class="overflow-x-auto">
<table class="table-auto mx-auto rounded-lg" style="background-color: #CCCCCC; border-radius: 15px;">
    <thead>
        <tr>
            <th class="px-8 py-2" >OSP<hr style="border:2px solid; border-color: mediumblue;" class="animate-pulse"></th>
            
            <th class="px-8 py-2"><a href="leaderboardall.php" >ALL</a></th>
            <th class="px-8 py-2"><a href="leaderboardalmt.php" >LUMUT</a></th>
        </tr>
    </thead>
   
</table>
</div>

<br><br>


          
   
</table>


</div>
<div style="position: fixed; bottom: 0; left: 0; right: 0; opacity: 0.8;" class="bg-yellow-300 rounded-lg shadow-md p-8" style="border: 2px solid;background-color: #CCCCCC;">
<div style="display: flex; align-items: center;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmeoUiKFhVE7KfZfgqqrN0bHja79hXJnUBvQ&s" style="border-radius: 50%; width: 50px; height: 50px;">
   <div>
    <span style="margin-left: 10px;"><b>Clifford</b></span>
    <span style="margin-left: 190px;">145</span>
    <br>
    <span style="margin-left: 10px;">22FTE2422</span>
    <span style="margin-left: 180px;"><i class="fas fa-caret-up text-green-500"></i></span>
</div>
</div>
<br>
<hr style="border-color: black;">
 <br>   
<div style="display: flex; align-items: center;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmeoUiKFhVE7KfZfgqqrN0bHja79hXJnUBvQ&s" style="border-radius: 50%; width: 50px; height: 50px;">
   <div>
    <span style="margin-left: 10px;"><b>Hasbullah</b></span>
    <span style="margin-left: 170px;">135</span>
    <br>
    <span style="margin-left: 10px;">22FTT1494</span>
    <span style="margin-left: 180px;"><i class="fas fa-caret-down text-red-500"></i></span>
</div>
</div>
<br>
<hr style="border-color: black;">
<br>
<div style="display: flex; align-items: center;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmeoUiKFhVE7KfZfgqqrN0bHja79hXJnUBvQ&s" style="border-radius: 50%; width: 50px; height: 50px;">
   <div>
    <span style="margin-left: 10px;"><b>Pascal</b></span>
    <span style="margin-left: 200px;">134</span>
    <br>
    <span style="margin-left: 10px;">22FTT1345</span>
    <span style="margin-left: 180px;"><i class="fas fa-caret-up text-green-500"></i></span>
</div>
</div>
<br>
<hr style="border-color: black;">
<br>
<div style="display: flex; align-items: center;">
    <img src="img/Profile.jpeg" style="border-radius: 50%; width: 50px; height: 50px;">
   <div>
    <span style="margin-left: 10px;"><b><?php echo ucfirst($_SESSION['name']); ?></b></span>
    <span style="margin-left: 195px;"><?php echo ($_SESSION['ep']); ?></span>
    <br>
    <span style="margin-left: 10px;"><?php echo ucfirst($_SESSION['StudentID']); ?></span>
    <span style="margin-left: 180px;"><i class="fas fa-caret-up text-green-500"></i></span>
</div>
</div>
<br>
<hr style="border-color: black;">
<br>
<div style="display: flex; align-items: center;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmeoUiKFhVE7KfZfgqqrN0bHja79hXJnUBvQ&s" style="border-radius: 50%; width: 50px; height: 50px;">
   <div>
    <span style="margin-left: 10px;"><b>Oliver</b></span>
    <span style="margin-left: 205px;">78</span>
    <br>
    <span style="margin-left: 10px;">22FTT1234</span>
    <span style="margin-left: 180px;"><i class="fas fa-caret-down text-red-500"></i></span>
</div>
</div>
<br>
<hr style="border-color: black;">
</div>
</div>
</body>
</html>
  
