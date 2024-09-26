
<?php
$conn = mysqli_connect("localhost", "root", "","my_salon");

$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

$query = "SELECT * FROM appointment WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%' OR address LIKE '%$search%' OR service LIKE '%$search%'";

$result = mysqli_query($conn, $query);

while ($data = mysqli_fetch_assoc($result)) {
    echo '<tr>';

    echo '<td data-label="Name">' . htmlspecialchars($data['name']) . '</td>';
    echo '<td data-label="Number">' . htmlspecialchars($data['email']) . '</td>';
    echo '<td data-label="Email">' . htmlspecialchars($data['phone']) . '</td>';
    echo '<td data-label="Gender">' . htmlspecialchars($data['address']) . '</td>';
    echo '<td data-label="City">' . htmlspecialchars($data['service']) . '</td>';
    echo '<td data-label="DELETE"><a href="delete.php?id=' . htmlspecialchars($data['id']) . '">DELETE</a></td>';
    echo '<td data-label="UPDATE"><a href="update.php?id=' . htmlspecialchars($data['id']) . '">UPDATE</a></td>';
    echo '</tr>';
}
?>