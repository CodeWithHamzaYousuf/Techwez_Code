<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            width: 100%;
            
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .sidebar {
         width: 30%;
          
            color: #fff;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sidebar h2 {
            margin-bottom: 0px;
            font-size: 20px;
            color: #370535;
        }

        .sidebar p {
            font-size: 16px;
            line-height: 1.5;
            color: #370535;
            text-align: center;
        }

        .sidebar img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        .form-section {
            flex: 2;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-section h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #95729f;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #95729f;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            border-color: #95729f;
            box-shadow: 0 0 8px rgba(37, 117, 252, 0.5);
        }

        button {
            width: 100%;
            padding: 15px;
          background:  #370535;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        button:hover {
            background:  #95729f;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 30px;
               
            }

            .sidebar, .form-section {
                flex: none;
              width: 100%;
                padding: 0px;
                
            }

            .sidebar {
                align-items: center;
                text-align: center;
                width: 100%;
            }
            form{
                width: 100%;
            }
            .sidebar img {
                display: none;
            }
        }
    </style>
</head>
<?php
 session_start();
 $conn = mysqli_connect("localhost", "root", "", "my_salon");
 if(isset($_POST['register'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $service = $_POST['service'];
  
   

    $query = "INSERT INTO appointment (name, email, phone, address, service) VALUES ('$name', '$email', '$phone', '$address', '$service')";
    $result = mysqli_query($conn, $query);
}



?>
<body>
    <div class="container">
        <div class="sidebar">
        <img src="assest/M (1).png" alt="Illustration" width="40%">
            <h2>We would love to server You</h2>
<p>Our timming</p>  
<p>Tuesday To Sunday : 11 am - 7 pm
Monday : off</p> 
         
        </div>
        <div class="form-section">
            <h2>Registration Form</h2>
            <form method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>

                <label for="dropdown">Option</label>
                <select id="dropdown" name="service" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="Pedicure">Pedicure</option>
                    <option value="MakeUp">MakeUp</option>
                    <option value="Hair Cut">Hair Cut</option>
                </select>

                <button type="submit" name="register">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
