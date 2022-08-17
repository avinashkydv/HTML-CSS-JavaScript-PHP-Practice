<?php
include 'config.php';
if(isset($_POST['submit'])){
    $userId =$_POST['userId'];
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =($_POST['password']);

    $sql= "INSERT INTO user (UID,Name,Email,Password) VALUES('$userId','$username','$email','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('New User Registration Successfully Completed')</script>";
        $userId ="";
        $username ="";
        $email ="";
        $_POST['password'] ="";
    }else{
        echo "<script>alert('Woops! Something wrong went')</script>";   
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stypesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Register Form </title> 
    </head>
    <body>
        <div class="container">
        
            <form action = "" method="POST" class="Login-Email">
                <p class="Login-text" style="font-size: 2rem; font-weight: 800;font-style: bold;">Register</p>
                <div class="input-group">
                    <input type="text" placeholder="UserId" name="userId" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="UserName" name="username" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                
                <div class="input-group">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p class="Login-Register-text">Have an Account? <a href="index.php">Login Here</a></p>
            </form>
        </div>
    </body>
</html>