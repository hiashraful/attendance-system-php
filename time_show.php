<?php
include 'db_connection.php';

$sql = "SELECT * FROM teacher WHERE TIME(entry_time) < '19:45:00'";
$result = $conn->query($sql);

echo '<h1>Users with Entry Time Before 7:45 PM</h1>';
echo '<table border="1">';
echo '<tr><th>ID</th><th>Name</th><th>Salary</th><th>Image</th><th>Entry Time</th><th>Exit Time</th></tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["name"] . '</td>';
        echo '<td>' . $row["salary"] . '</td>';
        echo '<td><img src="' . $row["image_url"] . '" alt="Teacher Image" width="100" height="100"></td>';
        echo '<td>' . $row["entry_time"] . '</td>';
        echo '<td>' . $row["exit_time"] . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="6">No records found.</td></tr>';
}

echo '</table>';

$conn->close();
?>
