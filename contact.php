<!-- FOR CONTACT -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>

<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "feedback");

// Check if the form is submitted
if(isset($_POST['submit'])){
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $location = $_POST['location'];
    $service = $_POST['options'];

    // SQL query to insert data into the 'contace' table
    $query = "INSERT INTO contact (`name`, `email`, `number`, `location`, `option`) 
              VALUES ('$name', '$email', '$number', '$location', '$service')";

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check result
    if($result){
        echo "Thanks for your feedback!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!-- Feedback Form -->
<form action="" method="POST" class="contact-form">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="first-field-f" placeholder="Enter Your Name" required>

    <div class="second-field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="first-field-f" placeholder="Enter Your Email" required>

        <label for="number">Phone Number</label>
        <input type="number" id="number" name="number" class="first-field-f" placeholder="Enter Your Number" required>
    </div>

    <div class="location">
        <label for="location">Location</label>
        <input type="text" id="location" name="location" class="first-field-f" placeholder="Enter Your Location" required>
    </div>

    <label for="options">Choose a Service</label>
    <select id="options" name="options" required>
        <option value="road">Road/Ambulance Services | $30</option>
        <option value="helicopter">Helicopter Ambulance Services | $100</option>
        <option value="boat">Boat Ambulance Services | $50</option>
    </select>

    <input type="submit" name="submit" class="submit-btn" value="Submit">
</form>

</body>
</html>