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
  <title>Announcements</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis&display=swap" rel="stylesheet">
</head>
  <body>

    <div id="header">
      <div id="title">
        <h1>Announcements</h1>
      </div>

      <div id="function-bar">
        <p>Hello, <b> <?php echo $_SESSION['name']; ?> </b> | <a href="home.php">Home</a> | <a href="logout.php">Logout</a></p>
      </div>
    </div>

    <div class="tabs">
      <button type="button" name="read" class="active" id="left-tab" onclick="readTab()">Read Announcements</button>
      <button type="button" name="write" class="" id="right-tab" onclick="writeTab()" <?php if ($_SESSION['role'] == 'student') {
        echo 'disabled';
      } ?>>Write Announcements</button>
    </div>

    <div id="read" class="content">
      <?php

      $sql = "SELECT * FROM announcements ORDER BY id DESC";

      $query = mysqli_query($connection, $sql);

      while ($row = $query->fetch_assoc())
      {
        echo "<div class='announcement'> <p id='a-info'>Name: " . $row['name'] . "<br>" . "Date: " . $row['date'] . "</p><br><br><p id='a-content'>" . $row['content'] . '</p></div>';
      }

      ?>
    </div>

    <div id="write" class="content hidden">

      <form class="" action="write_announcement.php" method="post">
        <textarea name="content" rows="10" cols="103" required></textarea>
        <button id="submit" type="submit" name="button">Submit</button>
      </form>

    </div>

  </body>
</html>
