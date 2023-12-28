<?php

include("db_connection.php");

// Call the function to get all users from the database
$users = getAllUsers();

function getAllUsers() {
    global $conn;
    $sql = "SELECT * FROM vehicle_information";
    $result = $conn->query($sql);

    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    return $users;
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
    <title>View All Transactions</title>
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
    <h2>View All Transactions</h2>
    <table class="table table-bordered" style="color: white;">
        <thead>
        <tr>
            <th>Sr. No</th>
            <th>Vehicle Type</th>
            <th>Vehicle Number</th>
            <th>Date and Time</th>
            <th>Driver Name</th>
            <th>Mobile Number</th>
            <th>Toll Tax</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['Sr_No']; ?></td>
                <td><?php echo $user['Vehicle_Type']; ?></td>
                <td><?php echo $user['Vehicle_Number']; ?></td>
                <td><?php echo $user['Date']; ?></td>
                <td><?php echo $user['Driver_Name']; ?></td>
                <td><?php echo $user['Mobile_No']; ?></td>
                <td><?php echo $user['Toll_Tax']; ?></td>
                
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
