<?php
session_start();
require 'database.php';
$query = "SELECT * FROM users"; // Select all rows from the users table

$stmt = $pdo->prepare($query);
$stmt->execute();

if(isset($_POST['del_email'])){
    $email_to_delete = $_POST['del_email'];
    $delete_query = "DELETE FROM users WHERE email = :email";
    $delete_stmt = $pdo->prepare($delete_query);
    $delete_stmt->bindParam(':email', $email_to_delete);
    $delete_stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        @keyframes popOut {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        @media screen and (max-width: 600px) {
            .table-container {
                overflow-x: auto;
            }
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
    <div style="display: flex; justify-content: flex-end;  top: 10px; right: 10px;">
        <button id="logoutBtn" style="background-color: #fcd34d; border: 2px solid black;">Logout</button>
    </div>

<!-- Create a modal -->
<div id="logoutModal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
    <div style="background-color: #fcd34d; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; border: 2px solid black; width: 40%; border-radius: 30%; text-align: center;">
        <p style="font-size: 15px;">Are you sure you want to logout?</p>
        <button id="confirmLogout">Yes</button>
        <button id="cancelLogout">No</button>
    </div>
</div>
    <div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
    <img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
    <br>
    </div>
    <div class="flex-container">
    <div style="position: absolute; top: 15px; left: 10px;">
   
    <img src="img/Profile.jpeg" style="width: 100px; height: 100px; margin-left: 10px; border: 2px solid yellow; border-radius: 50%;">
    </div>
    <div style="color: white; font-size: 20px; position: absolute; top: 45px; left: 150px;">
            <h1 style="color: white; font-size: 30px">Hello Admin <?php echo ucfirst($_SESSION['name']); ?>!</h1>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
while($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<table border='1' style='border: 2px solid black; color: black; border-collapse: collapse; margin: 0 auto; margin-right: 10%; width: 80%; background-color: grey;'>";
    echo "<tr style='padding: 10px; background-color: lightblue;'><th style='border: 1px solid black;'>Email</th><td style='border: 1px solid black; padding: 10px;'>" . $user['email'] . "</td></tr>";
    echo "<tr style='padding: 10px;'><th style='border: 1px solid black;'>Name</th><td style='border: 1px solid black; padding: 10px;'>" . $user['name'] . "</td></tr>";
    echo "<tr style='padding: 10px;'><th style='border: 1px solid black;'>Full Name</th><td style='border: 1px solid black; padding: 10px;'>" .  $user['fullname']  . "</td></tr>";
    echo "<tr style='padding: 10px;'><th style='border: 1px solid black;'>Student ID</th><td style='border: 1px solid black; padding: 10px;'>" .  $user['studentid']  . "</td></tr>";
    echo "<tr style='padding: 10px;'><th style='border: 1px solid black;'>Course</th><td style='border: 1px solid black; padding: 10px;'>" . $user['course'] . "</td></tr>";
    echo "<tr style='padding: 10px;'><th style='border: 1px solid black;'>EP</th><td style='border: 1px solid black; padding: 10px;'>" . $user['ep'] . "</td></tr>";
    echo "<tr style='padding: 10px;'><th style='border: 1px solid black;'>Phone</th><td style='border: 1px solid black; padding: 10px;'>" . $user['phone'] . "</td></tr>";
    echo "<tr style='padding: 10px;'><th style='border: 1px solid black;'></th><td style='border: 1px solid black; padding: 10px;'>";

    echo "<form action='adminpage.php' method='POST'>";
    echo "<input type='hidden' name='del_email' value='".$user['email']."'>";
    echo "<button type='submit'>Delete</button>";
    echo "</form>";

    echo "</td></tr>";
    echo "</table><br>";
}
?>
    
    <script>
// Get the logout button
var logoutBtn = document.getElementById('logoutBtn');

// Get the modal
var modal = document.getElementById('logoutModal');

// Get the confirm and cancel buttons
var confirmBtn = document.getElementById('confirmLogout');
var cancelBtn = document.getElementById('cancelLogout');

// When the user clicks the logout button, open the modal 
logoutBtn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on confirm, redirect to the logout page
confirmBtn.onclick = function() {
    window.location.href = "login.php"; //
}

// When the user clicks on cancel, close the modal
cancelBtn.onclick = function() {
    modal.style.display = "none";
}
</script> 
   
</body>

</html>