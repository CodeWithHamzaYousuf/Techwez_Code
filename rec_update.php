<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="admin/dashboard.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<style>
    /* Add your CSS styles here */
    .form-container {
        background: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        width: 95%;
    }
    .form-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #7b0a77;
        text-align: center;
    }
    .form-container input[type="text"],
    .form-container input[type="email"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form-container input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-image: linear-gradient(to right top, #373737, #423345, #5a2843, #71152f, #7a0a0a);   
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }
    .form-container input[type="submit"]:hover {
        background-image: linear-gradient(to right top, #373737, #423345, #5a2843, #71152f, #7a0a0a);
    }
    .form-container a {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #7b0a77;
        text-decoration: none;
    }
</style>
<body>
<?php
$conn = mysqli_connect("localhost","root","","rapid_rescue");

if(isset($_POST["id"])){
    $id = $_POST["id"];
    $vehcile_num= $_POST["vehcile_num"];
    $equipement_level = $_POST["equipement_level"];
    $current_stat = $_POST["current_stat"];
    $drivername = $_POST["drivername"];

    $query = "UPDATE ambulance SET vehcile_num=?, equipement_level=?, current_stat=?, drivername=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssi", $vehcile_num, $equipement_level, $current_stat, $drivername, $id);

    if($stmt->execute()){
        echo "<script>alert('Data updated successfully!'); window.location.href='emp_details.php';</script>";
    } else {
        echo "Data not updated";
    }
    $stmt->close();
} else {
    if(isset($_GET["id"])){
        $id = trim($_GET["id"]);
        $query2 = "SELECT * FROM ambulance WHERE id = ?";
        $stmt = $conn->prepare($query2);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        $vehcile_num = $data["vehcile_num"];
        $equipement_level = $data["equipement_level"];
        $current_stat = $data["current_stat"];
        $drivername = $data["drivername"];
    }
}
?>

<div class="dashboard">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h1>Ambulance Management</h1>
            <button class="close-btn" id="close-btn"><i class="fas fa-times"></i></button>
        </div>
        <ul class="sidebar-menu">
                <li><a href="admin.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="emp_details.php"><i class="fas fa-chart-bar"></i>Ambulance Management</a></li>
                <li><a href="setting.php"  ><i class="fa-solid fa-address-card"></i>Drivers Profiles</a></li>
                <li><a href="emt_profile.php"  ><i class="fa-solid fa-id-badge"></i>EMT Profiles</a></li>
              
              
            </ul>
    </div>
    <div class="main-content">
        <header>
            <div class="header-content">
                <button class="menu-btn" id="menu-btn"><i class="fas fa-bars"></i></button>
                <img src="assest/rapidrescue.png" alt="" width="10%">
                <form method="post">
                </form>
            </div>
        </header>
        <main>
            <div class="container_for_table">
                <div class="form-container">
                    <h2>Update Data</h2>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>" />
                        <input type="text" name="vehcile_num" placeholder="Vehicle Number" value="<?php echo htmlspecialchars($vehcile_num); ?>" required />
                        <input type="text" name="equipement_level" placeholder="Equipment Level" value="<?php echo htmlspecialchars($equipement_level); ?>" required />
                        <input type="text" name="current_stat" placeholder="Current Status" value="<?php echo htmlspecialchars($current_stat); ?>" required />
                        <input type="text" name="drivername" placeholder="Driver Name" value="<?php echo htmlspecialchars($drivername); ?>" required />
                        <input type="submit" value="Update Data" />
                        <a href="recp_admin_deatls.php">Go to Details</a>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
