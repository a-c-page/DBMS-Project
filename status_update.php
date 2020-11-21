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
  $name = $_GET['name'];
  $status = $_GET['status'];

  $sql = "UPDATE notes
      SET status='$status'
      WHERE name='$name'";

  $query = mysqli_query($connection, $sql);
  $_SESSION["message"] = "Status changed!";
  header("location: notesharing.php");

}
?>
