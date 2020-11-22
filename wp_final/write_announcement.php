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

  $date = date("Y-m-d");
  $name = $_SESSION["name"];
  $content = $_POST["content"];

  $sql = "INSERT INTO announcements (name, date, content) VALUES ('$name', '$date', '$content')";

  $query = mysqli_query($connection, $sql);

  $_SESSION["message"] = "Announcement posted!";
  header("location: announcements.php");
}
?>
