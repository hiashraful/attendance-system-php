<?php
include 'db_connection.php';

if (isset($_POST['add_user'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $image_url = '';

    // Image handling
    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            die("Extension not allowed. Please choose a JPEG or PNG file.");
        }

        $image_url = "upload/" . $file_name;
        move_uploaded_file($file_tmp, $image_url);
    }

    $sql = "INSERT INTO teacher (id, name, salary, image_url) VALUES ('$id', '$name', '$salary', '$image_url')";

    if ($conn->query($sql) === true) {
        echo "User added successfully.";
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
