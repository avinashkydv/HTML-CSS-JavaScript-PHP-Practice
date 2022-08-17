<?php
session_start();
$_SESSION['regName']="";
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
            
        <h2>List of Books</h2>
    <center><form  method="get" action="search_book.php">
	<table>
		<tr>
			<td><input type="text" name="regName" value="" placeholder="Enter your search keywords"></td>
			<td><input type="submit"></td>
		</tr>
	</table>
</form> </center>

    <br></br>

        <?php
        
        $res=mysqli_query($conn,"SELECT * FROM `books`;");
        echo "<table style='width:50% ' border='1' align='center' >";
        //Table Header
        echo "<tr style='background-color: white;'>";
        echo "<th>";  echo "BookID";  echo "</th>";
        echo "<th>";  echo "BookName";  echo "</th>";
        echo "<th>";  echo "Author";  echo "</th>";
        echo "<th>";  echo "Publisher";  echo "</th>";
        echo "<th>";  echo "Number of Books";  echo "</th>";
        echo "<th>";  echo "Reservation";  echo "</th>";
        echo "</tr>";


        while($row=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo "<td>"; echo $row['BookId']; echo "</td>";
            echo "<td>"; echo $row['BookName']; echo "</td>";
            echo "<td>"; echo $row['Author']; echo "</td>";
            echo "<td>"; echo $row['Publisher']; echo "</td>";
            echo "<td>"; echo $row['NumberOfBooks']; echo "</td>";
            echo "<td>"; echo $row['Reservation']; echo "</td>";

            echo "</tr>";
        }
        echo "</table>";
    ?>
 </br>  
<p1 class="Login-Register-text">Want to Register the Book? <a href="reservation.php">Click Here for Reserve Book</a></p>

 <p class="Login-Register-text">Want to Log Go On Home Screen? <a href="index.php">LogOut</a></p>
    </form>

        </body>
</html>