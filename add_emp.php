
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
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Dosis:wght@200..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    .form-container {
            background: #fff;
            padding: 10px 10px;
           
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
        .form-container input[type="email"],
        .form-container input[type="int"] {
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
            background-color: #7b0a90;
        }
        .form-container a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #7b0a77;
            text-decoration: none;
        }
        .form-container a:hover {
            text-decoration: underline;
        }
     .container_table {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-container form {
            display: flex;
            flex-wrap: wrap;
        }

        .search-container input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 768px) {
            th, td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            th {
                background-color: transparent;
                color: #333;
                text-align: left;
            }

            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
                white-space: nowrap;
            }
            .container_for_table{
                width: 100%;
                height: 100vh;
                display: flex;
                
                align-items: center;
                justify-content: center;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: calc(50% - 20px);
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
            }

            .search-container input[type="text"], .search-container button {
                margin: 5px 0;
                flex: 1 1 100%;
            }
        }
        .container_for_table{

            width: 100%;
          
            display: flex;
            align-items: center;
            justify-content: center;
        }
</style>
<body>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'rapid_rescue');
if (isset($_POST['submit'])) {
    // Use the correct names to access the POST data
    $id = trim($_POST['id']);
    $vehicle_num = trim($_POST['vehicle_num']); // Corrected name
    $equipment_level = trim($_POST['equipment_level']); // Corrected name
    $current_stat = trim($_POST['current_stat']); // Corrected name
    $drivername = trim($_POST['drivername']); // Corrected name

    // Prepare the query
    $query = "INSERT INTO ambulance (id, vehcile_num, equipement_level, current_stat, drivername) VALUES ('$id', '$vehicle_num', '$equipment_level', '$current_stat', '$drivername')";
    $result = mysqli_query($conn, $query);
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
    <h2>Add Data</h2>
    <form method="post">
        <input type="text" placeholder="Ambulance ID" name="id" /> <!-- Corrected name -->
        <input type="text" placeholder="Vehicle Number" name="vehicle_num" required /> <!-- Corrected name -->
        <input type="text" placeholder="Equipment Level" name="equipment_level" required /> <!-- Corrected name -->
        <input type="text" placeholder="Current Status" name="current_stat" required /> <!-- Corrected name -->
        <input type="text" placeholder="Driver Name" name="drivername" required /> <!-- Corrected name -->
        <input type="submit" name="submit" value="Update Data" />
        <a href="emp_details.php">Go to Details</a>
    </form>
    </div>
    </div>
            </main>
        </div>
    </div>
   
 
</body>
</html>
