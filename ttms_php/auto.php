<?php
include("db_connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $number = $_POST["number"];
    $type = $_POST["type"];
    $date = $_POST["datetime"];
    $name = $_POST["drivername"];
    $mobile = $_POST["mobile"];
    $tax = $_POST["tolltax"];


    // Call the function to add user to the database
    addUser($number, $type, $date, $name, $mobile, $tax);

    // Redirect to admin page after adding user
    header("Location: user_page.php");
    exit();
}

function addUser($number, $type, $date, $name, $mobile, $tax) {
    global $conn;
    //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO vehicle_information( Vehicle_Number,Vehicle_Type, Date, Driver_Name, Mobile_No, Toll_tax) VALUES ('$number','$type','$date', '$name', '$mobile','$tax')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("New3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }

        .container {
            margin-top: 50px;
        }
    </style>
    <title>Auto informaton</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Toll Plaza</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin_page.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h2>Add vehicle information</h2>
    <form method="post" action="">
    <div class="form-group">
            <label for="Number">Vehicle Number:</label>
            <input type="text" class="form-control" id="number" name="number" required>
        </div>
        <div class="form-group">
            <label for="type">Vehicle Type:</label>
            <input type="text" class="form-control" id="type" name="type" VALUE="Auto" required>
        </div>
        <div class="form-group">
            <label for="datetime">Date-Time:</label>
            <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
        </div>
        <div class="form-group">
            <label for="drivername">Driver Name:</label>
            <input type="text" class="form-control" id="drivername" name="drivername" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="number" class="form-control" id="mobile" name="mobile" required>
        </div>
        <div class="form-group">
            <label for="tolltax">Toll Tax:</label>
            <input type="number" class="form-control" id="tolltax" name="tolltax" VALUE="40" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
