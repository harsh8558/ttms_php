<?php

include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["user_id"])) {
    $userId = $_GET["user_id"];

    // Call the function to remove the user from the database
    removeUser($userId);

    // Redirect to update/remove user page after removing user
    header("Location: update_remove_user.php");
    exit();
} else {
    // Redirect to admin page if user ID is not provided
    header("Location: admin_page.php");
    exit();
}

function removeUser($userId) {
    global $conn;
    $sql = "DELETE FROM users WHERE id=$userId";
    $conn->query($sql);
}
?>
