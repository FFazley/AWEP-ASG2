<?php
require 'database.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($name)) {
    $errors[] = "Name is required";
  }
  if (empty($email)) {
    $errors[] = "Email is required";
  }
  if (empty($password)) {
    $errors[] = "Password is required";
  } elseif (strlen($password) < 8) {
    $errors[] = "Password must be at least 8 characters long";
  }

  if (empty($errors)) {
    
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();

    $stmt->close();
    $conn->close();
 
    header("Location: succes.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color: #08415C;">
<img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
  <div class="container mx-auto p-8 w-80 bg-white rounded-2xl shadow-md mt-60">
    <h1 class="text-center text-2xl font-bold mb-4 text-blue-700">Registration</h1>
    <?php if (!empty($errors)): ?>
      <div class="mb-4">
        <ul class="text-red-500">
          <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <form action="#" method="POST">
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Name">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
        <input type="text" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Email">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
        <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password">
      </div>
      <div class="flex items-center justify-between mb-4">
        <form action="succes.php" method="POST">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign In</button>
        </form>
        <br>    
      </div>
        <div class="text-sm">
          Already Have Account?<a href="Logintest.php"  class="text-gray-600 hover:text-gray-700"> Login</a>
      </div>
    </form>
    <p class="text-center text-gray-500 text-sm mt-8">Copyright © DWDTO8 2024 - Privacy & Term</p>
  </div>
</body>
</html>