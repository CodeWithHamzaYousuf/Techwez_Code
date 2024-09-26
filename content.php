<?php
 session_start();
 $conn = mysqli_connect("localhost", "root", "", "my_salon");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT content FROM content WHERE section_name = 'salon_paragraph'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['content'];
} else {
    echo "Content not found.";
}

$conn->close();
?>
