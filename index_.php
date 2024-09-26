<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assest/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "my_salon");
 
    if(isset($_POST['login']))
    {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $query = "select * from my_login where name = '$name' and password = '$password'";

        $res = mysqli_query($conn, $query);
        $number = mysqli_num_rows($res);
        if($number==1)
        {
            while($data = mysqli_fetch_array($res))
            {
                $Name = $data[1];
                $Password = $data[2];
                $Cat = $data[3];
                if($Name==$name && $Password==$password && $Cat=="admin")
                {
                    $_SESSION['admin']=$Name;
                    header('location:admin.php');
                }
                elseif($Name == $name && $Password == $password && $Cat == "Recption")
                {
                    $_SESSION['Rec']=$Name;
                    header('location:rec.php');
                }
                elseif($Name == $name && $Password == $password && $Cat == "emp")
                {
                    $_SESSION['emp']=$Name;
                    header('location:emp.php');
                }
            }
        }
        else{
            echo "<script>alert('Invalid username or password');</script>";
        }

    }
    if(isset($_SESSION['admin']))
    {
        // header('location:admin.php');
    }
    if(isset($_SESSION['rec']))
    {
        header('location:rec.php');
    }
    
    
    ?>
<div class="container">
        <div class="illustration"><img src="assest/Wddc.gif" alt=""></div>
        <div class="login-form">
            <div class="logo-section">
                <img src="assest/M (1).png" alt="" width="30%">
            </div>
            <h1>Welcome Back</h1>
            <p>Please login to your account</p>
            <div class="input-container">
                <form method="post">
                <input type="text" placeholder=" " required name="name">
                <label for="username">Username</label>
            </div>
            <div class="input-container">
                <input type="password"  placeholder=" "  required name="password">
                <label for="password">Password</label>
            </div>
            <button class="login-button" type="submit"   name="login">Login</button>
            <button class="register-button"><a href="registrationfoam.php">Register as Customer</a></button>
           
            </form>
        </div>
    </div>
    </div>
   
</body>
</html>
