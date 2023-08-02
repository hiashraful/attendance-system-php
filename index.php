<?php
    include 'db_connection.php';
    $sql = "SELECT * FROM teacher";
    $result = $conn->query($sql);
    $results = array(); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row; 
        }
    }
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 id="table-heading" >Attendance CRUD</h1>
    <div class="add-update">
    <!-- Create -->
    <form action="create_user.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" placeholder="ID">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="salary" placeholder="Salary">
        <input type="file" name="image">
        <button type="submit" name="add_user">Add User</button>
    </form>

    <!-- Update -->
    <form action="update_user.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" placeholder="ID">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="salary" placeholder="Salary">
        <input type="file" name="image">
        <button type="submit" name="update_user">Update User</button>
    </form>
    </div>

    <div class="other">
    <!-- Delete -->
    <form action="delete_user.php" method="post">
        <input type="text" name="id_or_name" placeholder="Enter ID or Name">
        <button type="submit" name="delete_user">Delete User</button>
    </form>

    <!-- Search -->
    <form action="search_user.php" method="post">
        <input type="text" name="id_or_name" placeholder="Enter ID or Name">
        <button type="submit" name="search">Search</button>
    </form>

    <!-- Entry -->
    <form action="update_user.php" method="post">
        <input type="text" name="id" placeholder="ID">
        <button type="submit" name="entry">Entry</button>
    </form>

    <!-- Exit -->
    <form action="update_user.php" method="post">
        <input type="text" name="id" placeholder="ID">
        <button type="submit" name="exit">Exit</button>
    </form>
    </div>
    <br><br>
    <div class="show">
        <form action="show_user.php" method="post">
        <button type="submit" name="show_all">Show All Entries</button>
    </form>
    </div>
</body>
</html>
