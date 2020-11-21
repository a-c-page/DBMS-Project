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
else
{
  $role = $_SESSION['role'];
  $username = $_SESSION['username'];

  if ($role == 'student') {

    $sql = "SELECT * FROM marks WHERE username = '$username'";

    $query = mysqli_query($connection, $sql);

    $rows_returned = mysqli_num_rows($query);

    if ($rows_returned == 0)
    {
      $sql = "INSERT INTO marks (username) VALUES ('$username')";

      $query = mysqli_query($connection, $sql);
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Marks</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis&display=swap" rel="stylesheet">
</head>
  <body onload="determineRole( '<?php echo $_SESSION['role'] ?>' );">

    <div id="header">
      <div id="title">
        <h1>Marks</h1>
      </div>

      <div id="function-bar">
        <p>Hello, <b> <?php echo $_SESSION['name']; ?> </b> | <a href="home.php">Home</a> | <a href="logout.php">Logout</a></p>
      </div>
    </div>

    <div class="tabs">
      <button type="button" name="read" class="active" id="left-tab" onclick="readTab()">View Marks</button>
      <button type="button" name="write" class="" id="right-tab" onclick="writeTab()" <?php if ($_SESSION['role'] == 'student') {
        echo 'disabled';
      } ?>>Change Marks</button>
    </div>

    <div id="select-user" class="content hidden">
      <form action="" method="get">
        <p>User currently selected: <?php
                if (isset($_GET['user-marks']))
                {
                  if ($_GET['user-marks'] != 'none')
                  {
                    echo $_GET['user-marks'];
                  }
                }
                ?></p>
        <select name="user-marks" required>
          <option value="none">Select a user</option>
          <?php

          $sql = "SELECT username FROM marks ORDER BY id DESC";

          $query = mysqli_query($connection, $sql);

          while ($row = $query->fetch_assoc())
          {
            echo "<option value=". $row['username'] .">". $row['username'] ."</option>";
          }

          ?>

        </select>
        <button id="submit" type="submit" name="button">Select</button>
      </form>
    </div>

    <div id="read" class="content">
      <?php

      $role = $_SESSION['role'];

      if ($role == 'student')
      {
        $username = $_SESSION['username'];
      }
      else {
        if (isset($_GET['user-marks']))
        {
          if ($_GET['user-marks'] != 'none')
          {
            $username = $_GET['user-marks'];
            $_SESSION['which-user'] = $_GET['user-marks'];
          }
        }

      }

      $sql = "SELECT * FROM marks where username = '$username'";

      $query = mysqli_query($connection, $sql);

      while ($row = $query->fetch_assoc())
      {
        foreach ($row as $key => $value)
        {
          if ($key != 'id' && $key != 'username')
          {
            echo "<div class='marks'><p>". $key . ": " . $value . "%</p><br></div>";
          }
        }
      }

      ?>
    </div>

    <div id="write" class="content hidden">

      <form action="update_mark.php" method="post">
        <select name="which-mark" required>
          <option value="none">Select a mark to change</option>
          <?php

          $sql = "SELECT * FROM marks where username = '$username'";

          $query = mysqli_query($connection, $sql);

          while ($row = $query->fetch_assoc())
          {
            foreach ($row as $key => $value)
            {
              if ($key != 'id' && $key != 'username')
              {
                echo "<option value=". $key .">". $key ."</option>";
              }
            }
          }
          ?>
        </select>
        <input type="text" name="new-mark" placeholder="Enter new mark" required>
        <button id="submit" type="submit" name="button">Select</button>
      </form>

    </div>

  </body>
</html>
