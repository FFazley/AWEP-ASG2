<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col" style="background-color: #08415C;">
<div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
  <div class="container mx-auto p-8 max-w-md bg-white rounded shadow-md">
    <h1 class="text-center text-2xl font-bold mb-4">Holla</h1>
    <p class="text-center text-gray-500 mb-8">Welcome back mate!</p>
    <form action="#">
      <div class="mb-4">
        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
        <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Email">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
        <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password">
      </div>
      <div class="flex items-center justify-between mb-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
        <a href="#" class="text-sm text-gray-600 hover:text-gray-700">New User? Join Us</a>
      </div>
    </form>
    <p class="text-center text-gray-500 text-sm mt-8">Copyright © DWDTOR 2024 - Privacy & Term</p>
  </div>
</div>
</body>
</html>
