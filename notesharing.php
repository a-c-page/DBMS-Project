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
  <title>Notes</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis&display=swap" rel="stylesheet">
</head>
  <body>

    <div id="header">
      <div id="title">
        <h1>Notes</h1>
      </div>

      <div id="function-bar">
        <p>Hello, <b> <?php echo $_SESSION['name']; ?> </b> | <a href="home.php">Home</a> | <a href="logout.php">Logout</a></p>
      </div>
    </div>

    <div class="note-tabs">
      <button type="button" name="read" class="active" id="left-tab" onclick="noteTab()">Notes</button>

      <button type="button" name="write" class="" id="middle-tab" onclick="uploadTab()" <?php if ($_SESSION['role'] != 'student') {
        echo 'disabled';
      } ?>>Upload Note</button>
      <button type="button" name="read" class="" id="right-tab" onclick="reviewTab()" <?php if ($_SESSION['role'] == 'student') {
        echo 'disabled';
      } ?>>Review Uploads</button>
    </div>

    <div id="read" class="content">
      <?php

      $sql = "SELECT * FROM notes WHERE status = 'approved' ORDER BY id DESC";

      $query = mysqli_query($connection, $sql);

      while ($row = $query->fetch_assoc())
      {
        echo "<div class='media'> <img src='images/lec_icon.png' width='40px'> <a href=" . $row['path'] . " download>" . $row['name'] . "</a> </div>";
      }

      ?>
    </div>

    <div id="write" class="content hidden">

      <form name="form" method="post" action="upload_note.php" enctype="multipart/form-data" >
        <input type="file" name="my_file" /required><br /><br />
        <button id="submit" type="submit" name="button">Upload</button>
      </form>

    </div>

    <div id="review" class="content hidden">
      <?php

      $sql = "SELECT * FROM notes WHERE status = 'pending' ORDER BY id ASC";

      $query = mysqli_query($connection, $sql);

      while ($row = $query->fetch_assoc())
      {
        echo "<div class='media'> <img src='images/lec_icon.png' width='40px'> <a href=" . $row['path'] . " download>" . $row['name'] . "</a> <span> <a href='status_update.php?status=approved&name=" . $row['name'] ."'><img src='images/approve.png' width='30px'> </a><a href='status_update.php?status=rejected&name=" . $row['name'] ."'> <img src='images/reject.png' width='30px'> </a> </span></div>";
      }

      ?>
    </div>

  </body>
</html>
