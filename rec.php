
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
            <div class="advertise-section">
    <img src="radiant.jpg" alt="" width="100%">
    <div class="overlay">
        <h2>WLLCOME CHECK YOUR <br> TODAY'S LIST</h2>
        <button class="hover-button"  onclick="window.location.href='table.php'">Check</button>

    </div>
</div>
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                            <h3>Users</h3>
                            <p>1,024</p>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="card-content" onclick="window.location.href='table.php'">
                            <h3>Orders</h3>
                            <p>650</p>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sales',
                    data: [1200, 1900, 3000, 5000, 2300, 3400, 2900],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx2 = document.getElementById('usersChart').getContext('2d');
        const usersChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Users',
                    data: [150, 200, 250, 300, 350, 400, 450],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
