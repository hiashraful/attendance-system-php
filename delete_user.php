<?php
include 'db_connection.php';

if (isset($_POST['delete_user'])) {
    $id_or_name = $_POST['id_or_name'];

    $sql = "DELETE FROM teacher WHERE id='$id_or_name' OR name='$id_or_name'";

    if ($conn->query($sql) === true) {
        echo "User deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="show">
            <br><br>
            <button type="button"><a href="index.php">Home</a></button>
        </div>
    </body>
</html>