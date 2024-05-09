<?php
require 'database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password']) && isset($_POST['username'])) {
  $email = $_POST['username'];
  $password = $_POST['password']; // Get the password from the form

  $query = "SELECT name , email, password FROM admin WHERE email = :email"; // Select the password, Fullname, and StudentID as well
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && $password == $user['password']) { // Check the password
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $email;
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];


    header('Location: adminpage.php');
    exit;
  } else {
    $error = 'Invalid email or password';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="flex flex-col" style="background-color: #08415C;">
<div class="flex justify-end">
  <a href="index.php" class="text-white underline">User Login</a>
</div>
  <div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
    <img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
     <div class="flex justify-center ">
       <div class="mt-40">
        <img src="img/Profile.jpeg" style="width: 150px; height:150px; margin-left: 10px; border: 2px solid yellow; border-radius: 50%;">
  
   
      <br>
      <h1 class="text-center text-2xl font-bold mb-4 text-blue-700">Holla Admin</h1>
      <p class="text-center text-gray-500 mb-8">Welcome </p>
      </div></div>
    <div class="container mx-auto p-8 w-80 bg-white rounded-2xl shadow-md">

      <form method="POST">
        <div class="mb-4">
          <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
          <input type="email" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Email">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:  <button id="showPassword" type="button"><i class="fas fa-eye"></i></button>
         </label>
          <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Password" >
         
        </div>
        <div class="flex items-center justify-between mb-4 text-center">
          <a href="adminpage.php">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
          </a>
         
        </form>
        <?php if (isset($error)) { ?>
          <p class="text-center text-red-500 mt-4"><?php echo $error; ?></p>
        <?php } ?>
         </div>
    </div>
  </body>

</html>

<script>
    var passwordInput = document.getElementById('password');
    var showPasswordButton = document.getElementById('showPassword');

    showPasswordButton.addEventListener('mousedown', function() {
      passwordInput.type = 'text';
    });

    showPasswordButton.addEventListener('mouseup', function() {
      passwordInput.type = 'password';
    });

    // For touch devices
    showPasswordButton.addEventListener('touchstart', function() {
      passwordInput.type = 'text';
    });

    showPasswordButton.addEventListener('touchend', function() {
      passwordInput.type = 'password';
    });
  </script>