<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rugby </title>
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
        
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body class="flex flex-col" style="background-color: #08415C;">
    <div class="sm:w-1/2 md:w-2/3 lg:w-3/4 mx-auto">
        <img src="img/pb.jpeg" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; opacity: 0.10;">
        <br>
        <div style="position: absolute; top: 10px; left: 10px;">
            <a href="club.php" class="text-white text-lg" ><i class="fas fa-arrow-left text-black"></i> </a>
            <br>
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white text-center">Rugby</h3>

        <div class="flex justify-center">
            <img src="img/rugby1.png" alt="rugby" class="w-25 h-45" style="border-radius: 50px;">
        </div>
        <br>
        <div class="bg-yellow-300 rounded border-2 border-black" style="border-radius: 10px;">
            <div>
                <h2 class="font-bold text-xl">Description    <button id="joinButton" class="bg-blue-600 rounded border-2 border-black text-white font-bold py-2 px-4 rounded float-right hover:bg-red-600" style="border-radius: 20px;" >Joined</button>
                </h2>
            </div>
            <br>
            <br>
            <div class="text-center">
                <h3 style="font-size: 20px;">
                    🏉Don't miss out on the kickoff event of the semester! Lace up your cleats, gather your friends, and be part of the 3K Touch Rugby Event. Let's make this day unforgettable!🏉
                    <br>
                    <br>
                    🗓️Date: 12th November 2023
                    🕚Time: 10am until 2pm
                    📍Location: Field A, UBD Sports Complex
                    <br><br>
                    Registration Details:
                    💸 Fee: $5 per participant
                    Open to current Politeknik students and alumni!
                    Scan through the QR Code or click the link in our bio 🤟🏻
                    📣Spread the Word! Use #3KTouchRugby23
                </h3>
                <div class="flex justify-center">
                    <img src="img/rugby2.png" alt="rubgy2" class="w-25 h-45 " >
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="bg-yellow-300 flex flex-col justify-center items-center rounded-lg fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="border-radius: 20px; width: 300px;">
            <h1 class="text-center font-bold text-2xl mb-4">Notice</h1>
            <p class="text-center text-2xl mb-4">You already Joined the club</p>
            <button class="close bg-blue-600 rounded border-2 border-black text-white font-bold py-2 px-4 rounded float-right hover:bg-red-600" style="border-radius: 20px; font-size: 14px;">OK</button>
        </div>
    </div>
    <script>
        var modal = document.getElementById("myModal");
        var joinButton = document.getElementById("joinButton");
        var closeBtn = document.getElementsByClassName("close")[0];
        joinButton.onclick = function() {
            modal.style.display = "block";
        }

        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>