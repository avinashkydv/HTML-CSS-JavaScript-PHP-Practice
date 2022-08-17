<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stypesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Book Register Form </title> 
        <style>
.center {
  text-align: center; 
}
</style>
    </head>
	<style>
        .center{
            text-align: center;
            background-image: url("lib1");
        }
    </style>
    
    <body class='center'>
    <style>
        .center{
            width: 100%;
            min-height: 100vh;
            background-image: url("lib1.jpg");
            align-self: auto;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <body>
        <?php
        
        $BookId = $BookName = $Author = $Publisher = $NumberOfBooks= $Reservation = "" ;
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $BookId = $_POST['bookid'];
            $BookName = $_POST['name'];
            $Author = $_POST['author'];
            $Publisher = $_POST['Publisher'];
			$NumberOfBooks = $_POST['NumberOfBooks'];
            $Reservation = $_POST['Reservation'];

			$query = "INSERT INTO `books` (BookId, BookName, Author, Publisher,NumberOfBooks,Reservation) VALUES ('$BookId', '$BookName', '$Author', '$Publisher','$NumberOfBooks','$Reservation')";                            
            $con = mysqli_query($conn,$query);
            echo "<script>alert('New Book Added')</script>";   
        }                        
        ?>

        <form  action="" method="post" >
            <div class="container">
			<h1> Welcome To Admin</h1>
            <h2>Add New Book</h2>

            <label>BookID</label></br><input type="text"   name="bookid"><br/> <br/>
            <label>Book Name</label></br><input type="text"   name="name"><br/><br/> 
            <label>Author</label></br><input type="text"   name="author"><br/> <br/>
            <label>Publisher</label></br><input type="text"   name="Publisher"><br/></br>
			<label>Number of Books</label></br><input type="text"   name="NumberOfBooks"><br/> </br>
            <label>Reservation(Yes/No)</label></br><input type="text"   name="Reservation"><br/></br>
            <button type="submit"  name="submit" value="Register" >Add</button>
            </div>
            <p class="Login-Register-text">Want to Log Go On Home Screen? <a href="index.php">LogOut</a></p>
        </form>
    </body>
</html>
