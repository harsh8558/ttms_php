<?php

include("db_connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $newPrice = $_POST["new_price"];

    // Call the function to update toll price in the database
    updateTollPrice($newPrice);

    // Redirect to admin page after updating toll price
    header("Location: admin_page.php");
    exit();
}

function updateTollPrice($newPrice) {
    global $conn;
    $sql = "UPDATE toll_prices SET price=$newPrice WHERE id=1";
    $conn->query($sql);
}

// Call the function to get the current toll price
$currentPrice = getTollPrice();

function getTollPrice() {
    global $conn;
    $sql = "SELECT * FROM toll_prices WHERE id=1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['price'];
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
            background-image: url("Toll Image.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }

        .container {
            margin-top: 50px;
        }
    </style>
    <title>Manage Toll Price</title>
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
    <h2>Manage Toll Price</h2>
    <p>Current Toll Price: <?php echo $currentPrice; ?></p>
    <form method="post" action="">
        <div class="form-group">
            <label for="new_price">New Toll Price:</label>
            <input type="number" class="form-control" id="new_price" name="new_price" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Toll Price</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
