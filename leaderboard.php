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
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPDs2KWdJ-yhZXGRthFiMnILUpAHSLM8rt_K8P_Ge4ENuBMKojgQuW6qui55FDBDHxFlU&usqp=CAU" style="border-radius: 50%; width: 50px; height: 50px;">
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
    <img src="https://i.pinimg.com/236x/32/ae/dd/32aedd66e90c78a683322851b4da5d8b.jpg" style="border-radius: 50%; width: 50px; height: 50px;">
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
    <img src="data:image/jpeg;base64,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" style="border-radius: 50%; width: 50px; height: 50px;">
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
    <span style="margin-left: 10px;"><b><?php echo isset($_SESSION['name']) ? ucfirst($_SESSION['name']) : ''; ?></b></span>
    <span style="margin-left: 195px;"><?php echo isset($_SESSION['ep']) ? $_SESSION['ep'] : ''; ?></span>
    <br>
    <span style="margin-left: 10px;"><?php echo isset($_SESSION['StudentID']) ? ucfirst($_SESSION['StudentID']) : ''; ?></span>
    <span style="margin-left: 180px;"><i class="fas fa-caret-up text-green-500"></i></span>
</div>
</div>
<br>
<hr style="border-color: black;">
<br>
<div style="display: flex; align-items: center;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOAz2UTuxwy2FT5543A9_0rECCkNkYHRttVQ&usqp=CAU" style="border-radius: 50%; width: 50px; height: 50px;">
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
  
