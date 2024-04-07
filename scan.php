<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            background-color: black;
        }

        #qr-code {
            width: 200px;
            height: 200px;
            margin: 0 auto;
            display: block;
            margin-top: 100px;
            opacity: 1; /* Initial opacity */
            transition: opacity 0.5s ease; /* Transition effect */
        }

        #success-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            display: none;
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

        /* Responsive Styles */
        @media (max-width: 768px) {
            /* Mobile Styles */
        }
    </style>
</head>
<body>
    <img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
    <br>
    <a href="home.php" class="text-white text-lg" style="margin-left: 10px;"><i class="fas fa-arrow-left text-white"></i> </a>
    <div id="qr-code">
    <img src="img/scan.png" style="width: 200px; height: 200px;">
    </div>
    <div id="success-modal" style="border-radius: 10%; background-color: #fcd34d; width: 300px; text-align: center;">
        <h1 style="font-size: 1.2em;"><b>Scan Successful!</b></h1>
        <br><p style="font-size: 1.2em;">Your Attendance has been successfully recorded</p>
        <br>
        <button class="bg-gray-300 hover:bg-blue-400 text-black font-bold py-2 px-4 rounded-full" onclick="window.location.href='home.php'">Go to Home</button>
    </div>

    <script>
        // Add JavaScript code here to handle the QR code scanning and show the success modal
        setTimeout(function() {
            document.getElementById('success-modal').style.display = 'block';
            document.getElementById('qr-code').style.opacity = '0.5'; // Reduce opacity of the image
        }, 2000); // 2000 milliseconds = 2 seconds
    </script>
</body>
</html>