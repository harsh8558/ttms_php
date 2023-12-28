<?php

include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $userId = $_POST["user_id"];
    $newname = $_POST["new_name"];
    $newUsername = $_POST["new_username"];
    $newDOB = $_POST["new_DOB"];
    $newaddress = $_POST["new_address"];

    // Call the function to update the user in the database
    updateUser($userId,$newname, $newUsername, $newDOB, $newaddress);

    // Redirect to admin page after updating user
    header("Location: admin_page.php");
    exit();
}

function updateUser($userId,$newname, $newUsername, $newDOB, $newaddress) {
    global $conn;
    $sql = "UPDATE users SET name='$newname', username='$newUsername', DOB='$newDOB', address='$newaddress' WHERE id=$userId";
    $conn->query($sql);
}

function removeUser($userId) {
    global $conn;
    $sql = "DELETE FROM users WHERE id=$userId";
    $conn->query($sql);
}

// Call the function to get all users from the database
$users = getAllUsers();

function getAllUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
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
    <title>Update/Remove User</title>
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
    <h2>Update/Remove User</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="color: white;">ID</th>
            <th style="color: white;">Name</th>
            <th style="color: white;">Username</th>
            <th style="color: white;">DOB</th>
            <th style="color: white;"> Address</th>
            <th style="color: white;">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr style="color: white;">
                <td ><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['DOB']; ?></td>
                <td><?php echo $user['address']; ?></td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                        <div class="form-row">
                        <div class="col">
                                <input type="text" class="form-control" name="new_name" placeholder="New name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="new_username" placeholder="New Username">
                            </div>
                            <div class="col">
                                <input type="date" class="form-control" name="new_DOB" placeholder="New DOB">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="new_address" placeholder="New ">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger" onclick="removeUser(<?php echo $user['id']; ?>)">Remove</button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function removeUser(userId) {
        if (confirm("Are you sure you want to remove this user?")) {
            // Redirect to remove user page
            window.location.href = "remove_user.php?user_id=" + userId;
        }
    }
</script>
</body>
</html>
