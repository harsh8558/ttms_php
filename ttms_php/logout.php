<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            background-image: url("Toll Image.gif");
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logout-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }
    </style>
    <script>
        setTimeout(function () {
            window.location.href = 'index.php';
        }, 1000);  // Redirect after 1 seconds (1000 milliseconds)
    </script>
</head>
<body>
    <div class="logout-container">
        <h1>Logging out...</h1>
        <!-- You can add additional content if needed -->
    </div>
</body>
</html>
