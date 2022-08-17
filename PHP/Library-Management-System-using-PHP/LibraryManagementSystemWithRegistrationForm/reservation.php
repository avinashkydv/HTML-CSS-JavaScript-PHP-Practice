<!DOCTYPE html>
<html>
  <head>

    <link href="3-theme.css" rel="stylesheet">
    </script>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stypesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>RESERVATION PAGE</title> 
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
  <body>
    <?php
    // (A) PROCESS RESERVATION
    if (isset($_POST["date"])) {
      require "2-reserve.php";
      if ($_RSV->save(
        $_POST["date"], $_POST["slot"], $_POST["name"],
        $_POST["email"], $_POST["tel"], $_POST["notes"])) {
        echo "<script>alert('Book Reserved')</script>"; 
      } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }
    ?>

    <!-- (B) RESERVATION FORM -->
    <div class="container">
    <h1>BOOK RESERVATION</h1>
    <form id="resForm" method="post" target="_self">
      <label for="res_name">Name</label>
      <input type="text" required name="name" value=""/></br></br>

      <label for="res_email">Email</label>
      <input type="email" required name="email" value=""/></br></br>

      <label for="res_tel">Mobile Number</label>
      <input type="text" required name="tel" value=""/></br></br>

      <label for="res_notes">Book Id</label>
      <input type="text" name="notes" value=""/></br></br>
      <?php
      // @TODO - MINIMUM DATE (TODAY)
      // $mindate = date("Y-m-d", strtotime("+2 days"));
      $mindate = date("Y-m-d");
      ?>
      <label>Reservation Date</label>
      <input type="date" required id="res_date" name="date"
             min="<?=$mindate?>">
             </br></br>
          <label>Reservation Slot</label>
          
      <select name="slot">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
      </select>

      <input type="submit" value="Submit"/>
    </form></br>
    <p1>Book Dashboard <a href="books.php">Click Here</a></p>
      <p2>Want to Log Go On Home Screen? <a href="index.php">LogOut</a></p>
    </div>
  </body>
</html>
