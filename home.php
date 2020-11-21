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

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis&display=swap" rel="stylesheet">
</head>
  <body>

    <div id="header">
      <div id="title">
        <h1>Home</h1>
      </div>

      <div id="function-bar">
        <p>Hello, <b> <?php echo $_SESSION['name']; ?> </b> | <a href="home.php">Home</a> | <a href="logout.php">Logout</a></p>
      </div>
    </div>

    <div class="main-div">

      <a href="announcements.php"><div class="row-div" style="background-image: url('images/announcements.jpg');">
        <h1>Announcements</h1>
      </div></a>

      <a href="lecturenotes.php"><div class="row-div" style="background-image: url('images/lecturenotes.jpg');">
        <h1>Lecture Notes</h1>
      </div></a>

      <a href="assignments.php"><div class="row-div" style="background-image: url('images/assignments.jpg');">
        <h1>Assignments</h1>
      </div></a>

      <a href="labs.php"><div class="row-div" style="background-image: url('images/labs.jpg');">
        <h1>Labs</h1>
      </div></a>

      <a href="marks.php"><div class="row-div" style="background-image: url('images/marks.jpg');">
        <h1>Marks</h1>
      </div></a>

      <a href="notesharing.php"><div class="row-div" style="background-image: url('images/sharing.jpg');">
        <h1>Note Sharing</h1>
      </div></a>

    </div>

  </body>
</html>
