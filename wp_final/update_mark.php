<?php

session_start();

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
  $mark = $_POST['new-mark'];
  $which = $_POST['which-mark'];
  $user = $_SESSION['which-user'];

  $sql = "UPDATE marks
      SET $which='$mark'
      WHERE username='$user'";

  $query = mysqli_query($connection, $sql);
  $_SESSION["message"] = "Mark changed!";
  unset($_SESSION['which-user']);
  header("location: marks.php");

}
?>
