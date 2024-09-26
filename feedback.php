<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","","rapid_rescue");

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $query = "INSERT INTO `feedback`( `name`, `email`, `text`) VALUES ('$name','$email','$text')";
    $result = mysqli_query($conn,$query);

    if($result){
        echo "Thanks For Your Feed back";
    }
    else{
        echo"error";
    }
}
?>

<Form action="" class="forms" METHOD="POST">
<div class="first-input">
  <input class="inputs" type="text" placeholder="Name" name="name">

  <input class="inputs" type="email" placeholder="Email" name="email">
</div>
<input class="textareas" type="text" placeholder="Email" name="text">

  <input class="submits" type="submit" name="btn" value="submit">
</form>
</body>
</html>