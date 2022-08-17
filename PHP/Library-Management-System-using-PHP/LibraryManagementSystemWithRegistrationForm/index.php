<?php
include 'config.php';
if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =($_POST['password']);

    $sql = "SELECT * FROM user WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            header("Location: books.php");
        }else{
        echo "<script>alert('Woops! Email or Password is Wrong')</script>";
    }
}else{
    echo "<script>alert('Woops! Email or Password is Wrong')</script>";
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
        <title> Login Form MSRUAS </title> 
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" class="Login-Email">
                <p class="Login-text" style="font-size: 2rem; font-weight: 800;font-style: bold;">Login</p>
                <div class="input-group">
                    <input type="email" placeholder="Email" name = "email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="input-group">
                    <button name = "submit" class="btn">Login</button>
                </div>
                <p class="Login-Register-text">Don,t have an account? <a href="register.php">Register Here</a></p>
            </form>
        </div>
    </body>
</html>