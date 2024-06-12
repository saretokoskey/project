<!-- <?php
session_start();

// After successful login
$_SESSION['Username'] = $username; // $username should contain the logged-in user's username
if (isset($_SESSION['Username'])) 

include "database.php";
   
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Officer Dashboard</title>

    <style>
        body {
            background-color: #1589fc;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .content-body {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }
        .banner-text h1, .banner-text h2, .banner-text h4 {
            margin: 0.5em 0;
        }
        .mt-5 {
            margin-top: 3rem;
        }
        .mb-4 {
            margin-bottom: 2.4rem;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-success {
            background-color: #28a745;
            color: #fff;
        }
        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="content-body">
        <div class="banner">
            <div class="banner-text">
                <h1>MINISTRY OF INVESTMENTS, TRADE & INDUSTRY</h1>
                <h2>STATE DEPARTMENT FOR TRADE</h2>
                <h4>STAFF ATTENDANCE-CHECK SYSTEM</h4>
                <h2>Welcome,<?php echo htmlspecialchars($_SESSION['Username']); ?>!</h2>
                <!-- Display logged-in user's username -->
                
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="mt-5 mb-4">Time Reporting</h1>
        <button id="checkInButton" class="btn btn-primary">Check-in Time</button>
        <button id="checkOutButton" class="btn btn-success">Check-out Time</button>
    </div>

    <script>
                const username = "<?php echo htmlspecialchars($_SESSION['Username']); ?>";

        document.getElementById('checkInButton').addEventListener('click', function() {
            recordTime('Check-in');
        });

        document.getElementById('checkOutButton').addEventListener('click', function() {
            recordTime('Check-out');
        });

        function recordTime(action) {
            const currentDateTime = new Date();
            const date = currentDateTime.toLocaleDateString('en-CA'); // ISO format for MySQL
            const time = currentDateTime.toLocaleTimeString('en-GB'); // 24-hour format

            const record = { action, date, time };

            // Send data to the server
            fetch('database.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `action=${action}&date=${date}&time=${time}`
            })
            .then(response => response.text())
            .then(data => {
                console.log('Record stored:', data);
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>
