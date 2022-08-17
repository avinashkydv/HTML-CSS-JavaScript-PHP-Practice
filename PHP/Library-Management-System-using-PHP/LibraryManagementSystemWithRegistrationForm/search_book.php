<?php
session_start();
$regValue=$_GET['regName'];
include "config.php";
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Books</title>
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

        <h1>Welcome to Library System</h1>
            
        <h2>List of Books Based on Your Search</h2>
    <br></br>

    <?php
        $name="$regValue";
        $sql="select * from books where BookName LIKE '%$name%'";
        //$sql="select * from books where BookName LIKE 'C in Depth' ";
        $res=mysqli_query($conn,$sql);
        echo "<table style='width:50% ' border='1' align='center' >";
        //Table Header
        echo "<tr style='background-color: white;'>";
        echo "<th>";  echo "BookID";  echo "</th>";
        echo "<th>";  echo "BookName";  echo "</th>";
        echo "<th>";  echo "Author";  echo "</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo "<td>"; echo $row['BookId']; echo "</td>";
            echo "<td>"; echo $row['BookName']; echo "</td>";
            echo "<td>"; echo $row['Author']; echo "</td>";

            echo "</tr>";
        }
        echo "</table>";
    ?>
 <p class="Login-Register-text">Want to back to Book DashBoard? <a href="books.php">Back to Book Dashboard</a></p>
    </form>
        </body>
</html>