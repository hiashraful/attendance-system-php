<?php
include 'db_connection.php';

if (isset($_POST['search'])) {
    $id_or_name = $_POST['id_or_name'];

    $sql = "SELECT * FROM teacher WHERE id='$id_or_name' OR name='$id_or_name'";
    $result = $conn->query($sql);
    }
$conn->close();
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

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
            foreach ($result as $user) {
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
