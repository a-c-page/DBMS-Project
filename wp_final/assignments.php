<?php

session_start();
if (isset($_SESSION["message"])) {
  echo "<script type='text/javascript'> alert("."'".$_SESSION["message"]."'"."); </script>";
}
unset($_SESSION['message']);

if ( !isset( $_SESSION['username']) )
{
  header("location: login.php");
}

require "configure.php";

$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if ( !$connection )
{
  $_SESSION["message"] = "Connection failed!";
  header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Assignments</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis&display=swap" rel="stylesheet">
</head>
  <body>

    <div id="header">
      <div id="title">
        <h1>Assignments</h1>
      </div>

      <div id="function-bar">
        <p>Hello, <b> <?php echo $_SESSION['name']; ?> </b> | <a href="home.php">Home</a> | <a href="logout.php">Logout</a></p>
      </div>
    </div>

    <div class="tabs">
      <button type="button" name="read" class="active" id="left-tab" onclick="readTab()">Assignments</button>
      <button type="button" name="write" class="" id="right-tab" onclick="writeTab()" <?php if ($_SESSION['role'] == 'student') {
        echo 'disabled';
      } ?>>Upload Assignment</button>
    </div>

    <div id="read" class="content">
      <?php

      $sql = "SELECT * FROM assignments ORDER BY id DESC";

      $query = mysqli_query($connection, $sql);

      while ($row = $query->fetch_assoc())
      {
        echo "<div class='media'> <img src='images/lec_icon.png' width='40px'> <a href=" . $row['path'] . " download>" . $row['name'] . "</a> </div>";
      }

      ?>
    </div>

    <div id="write" class="content hidden">

      <form name="form" method="post" action="upload_assignment.php" enctype="multipart/form-data" >
        <input type="file" name="my_file" /required><br /><br />
        <button id="submit" type="submit" name="button">Upload</button>
      </form>

    </div>

  </body>
</html>
