<?php

$conn = new mysqli("localhost", "root", "12345", "cse");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
