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
            background-image: linear-gradient(to right top, #373737, #423345, #5a2843, #71152f, #7a0a0a);
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
        a{
            text-decoration: none;
            color: white;
        }

        th {
            background-image: linear-gradient(to right top, #373737, #423345, #5a2843, #71152f, #7a0a0a);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .deleteds{
            background-color: red;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        
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
</style>
<body>
 


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
                <button class="hover-button" type="submit" name="logOut" style="margin-left:20px"><a href="add_emp.php">ADD</a></button>
</form>
                </div>
            </header>
            <main>
            <div class="container_table">
                
                
        <div class="search-container">
            
            <form action="" method="GET">
                
                <input type="text" id="search" name="search" placeholder="Search...">
                <button type="submit">Search</button>
               
            </form>
        </div>

        <table>
            <thead>
                <tr>
           
                    <th>Ambulance id</th>
                    <th>Vehicle Number</th>
                    <th>Equipment Level</th>
                    <th>Current Stat    </th>
                    <th>Driver name   </th>
                
                    
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
 $conn = mysqli_connect("localhost", "root", "", "rapid_rescue");
                $query = "SELECT * FROM ambulance";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td data-label="Name">' . htmlspecialchars($data['id']) . '</td>';
                    echo '<td data-label="Number">' . htmlspecialchars($data['vehcile_num']) . '</td>';
                    echo '<td data-label="Email">' . htmlspecialchars($data['equipement_level']) . '</td>';
                    echo '<td data-label="Gender">' . htmlspecialchars($data['current_stat']) . '</td>';
                    echo '<td data-label="City">' . htmlspecialchars($data['drivername']) . '</td>';
                   
                    echo '<td data-label="DELETE">
                    <form method="post">
                        <input type="hidden" name="delete_id" value="' . htmlspecialchars($data['id']) . '">
                        <button class="deleteds"  type="submit" name="delete">DELETE</button>
                    </form>
                  </td>';
                    // <button class="hover-button" type="submit" name="logOut">LOGOUT</button>
                    echo '<td> <button class="hover-button" data-label="UPDATE"><a href="rec_update.php?id=' . htmlspecialchars($data['id']) . '">Update</a></button></td>';
                    // echo '<td> <button class="hover-button" data-label="UPDATE"><a href="add_recp_.php?id=' . htmlspecialchars($data['id']) . '">Add</a></button></td>';
                   
                    echo '</tr>';
                }
                if (isset($_POST['delete'])) {
                    $id_to_delete = $_POST['delete_id'];
                    // Change the table name to `ambulance`
                    $delete_query = "DELETE FROM ambulance WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param("i", $id_to_delete);
                    if ($stmt->execute()) {
                        echo "<script>alert('Data Deleted'); window.location.href='emp_details.php';</script>";
                    } else {
                        echo "<script>alert('Data Not Deleted');</script>";
                    }
                    $stmt->close();
                }

                $conn->close();
            
                ?>
            </tbody>
        </table>
    </div>
            </main>
        </div>
    </div>
   
 
</body>
</html>