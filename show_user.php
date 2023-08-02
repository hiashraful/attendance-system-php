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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Entries</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id="table-heading" >All Entries</h1>
<div class="show">
    <table class="table">
        <thead>
            <tr>
                <td>SL</td>
                <td>ID</td>
                <td>Name</td>
                <td>Salary</td>
                <td>Image</td>
                <td>Entry Time</td>
                <td>Exit Time</td>
                <td>Time Spent</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 1;
            foreach ($results as $user) {
            ?>
            <tr>
                <td><?php echo $sl++?></td>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['salary'] ?></td>
                <td><img src="<?php echo $user['image_url'] ?>" alt="Image"></td>
                <td><?php echo $user['entry_time'] ?></td>
                <td><?php echo $user['exit_time'] ?></td>
                <td><?php echo $user['hours'] ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <br><br>
    <button type="button"><a href="index.php">Home</a></button>
</div>
</body>
</html>