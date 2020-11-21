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
  if ( ($_FILES['my_file']['name']!="") )
  {
    $target_dir = "notes/";
    $file = $_FILES['my_file']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['my_file']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;
    $filename_ext = $filename.".".$ext;
    $status = "pending";

    if (file_exists($path_filename_ext))
    {
      $_SESSION["message"] = "File name already exists!";
      header("location: notesharing.php");
    }
    else
    {
      $sql = "INSERT INTO notes (path, name, status) VALUES ('$path_filename_ext', '$filename_ext', '$status')";
      $query = mysqli_query($connection, $sql);
      move_uploaded_file($temp_name,$path_filename_ext);
      $_SESSION["message"] = "File uploaded!";
      header("location: notesharing.php");
    }
  }
}
?>
