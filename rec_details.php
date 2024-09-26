


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
            background-color: rgba(71, 4, 103, 0.8);
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
            background-color: rgba(71, 4, 103, 0.8);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr.highlight {
            background-color: lightgreen;
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
    
    <?php

    session_start();
    if(isset($_SESSION["Rec"]))
    {
        $name = $_SESSION["Rec"];
        
    }
    else
    {
        header("location:../index_.php");
    }
    if(isset($_POST["logOut"]))
    {

        session_destroy();
        header("location:index_.php");
    }

    
    
    ?>

    <div class="dashboard">
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
              <h1>HELLO</h1>
                <button class="close-btn" id="close-btn"><i class="fas fa-times"></i></button>
            </div>
            <ul class="sidebar-menu">
                <li><a href="rec.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="rec_details.php"><i class="fas fa-user"></i>Recaption</a></li>
            
              
              
            </ul>
        </div>
        <div class="main-content">
            <header>
                <div class="header-content">
                    <button class="menu-btn" id="menu-btn"><i class="fas fa-bars"></i></button>
                    <img src="assest/M (1).png" alt="" width="10%">
                    <form method="post">
                <button class="hover-button" type="submit" name="logOut">LOGOUT</button>
</form>
                </div>
            </header>
            <main>
            <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Categorie</th>
                    <th>Salary</th>
                   
                </tr>
            </thead>
            <tbody>
              
            <?php
              
                $conn = mysqli_connect("localhost", "root", "", "my_salon");

                $query = "SELECT * FROM receptionist_table";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
            echo '<tr id="row-' . $data['id'] . '">';
                    echo '<td data-label="Name">' . htmlspecialchars($data['name']) . '</td>';
                    echo '<td data-label="Email">' . htmlspecialchars($data['email']) . '</td>';
                    echo '<td data-label="Number">' . htmlspecialchars($data['phone']) . '</td>';
                    echo '<td data-label="Address">' . htmlspecialchars($data['cate']) . '</td>';
                    echo '<td data-label="Service">' . htmlspecialchars($data['salary']) . '</td>';
                    echo '</tr>';
                 
                }

                if (isset($_POST['delete'])) {
                    $id_to_delete = $_POST['delete_id'];
                    $delete_query = "DELETE FROM appointment WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param("i", $id_to_delete);
                    if ($stmt->execute()) {
                        echo "<script>alert('Data Deleted'); window.location.href='';</script>";
                    } else {
                        echo "<script>alert('Data Not Deleted');</script>";
                    }
                    $stmt->close();
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    
            </main>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .update-btn{
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        
        }
        .deleteds{
            background-color: red;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        
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
            background-color: rgba(71, 4, 103, 0.8);
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
            background-color: rgba(71, 4, 103, 0.8);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr.highlight {
            background-color: lightgreen;
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
</head>
<body>
  

     

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Highlight rows based on localStorage
            function highlightRows() {
                let highlightedRows = JSON.parse(localStorage.getItem('highlightedRows')) || [];
                highlightedRows.forEach(function(id) {
                    $('#row-' + id).addClass('highlight');
                });
            }

            // Initial call to highlight rows
            highlightRows();

            // Add event listener for update buttons
            $('body').on('click', '.update-btn', function() {
                var rowId = $(this).data('id');
                var $row = $('#row-' + rowId);

                $row.toggleClass('highlight');
                let highlightedRows = JSON.parse(localStorage.getItem('highlightedRows')) || [];

                if ($row.hasClass('highlight')) {
                    if (!highlightedRows.includes(rowId)) {
                        highlightedRows.push(rowId);
                    }
                } else {
                    highlightedRows = highlightedRows.filter(function(id) {
                        return id != rowId;
                    });
                }

                localStorage.setItem('highlightedRows', JSON.stringify(highlightedRows));
            });
        });
    </script>
</body>
</html> -->
