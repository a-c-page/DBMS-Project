<?php

session_start();
if (isset($_SESSION["message"])) {
  echo "<script type='text/javascript'> alert("."'".$_SESSION["message"]."'"."); </script>";
}
unset($_SESSION['message']);

if (isset( $_SESSION['username']))
{
    $username = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<head>
    <title>
        Our Inventory
    </title>
        <!--Ion Icons-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
         <!-- linkig the css file "main.css" -->
        <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
        <div class="container">
            <nav>
  <img src="images/profile.png" class="profile" onclick="profileIcon('<?php if (isset($username)) {echo $username;} else {echo "";} ?>')">
                <div class="nav-brand"></div>
                <div class="menu-icons open" onclick="sidebar()">
                    <i class="icon ion-md-menu"></i>
                </div>

                <ul class="nav-list" id="sidebar">

                    <div class="menu-icons close" onclick="sidebar()">
                        <i class="icon ion-md-close"></i>
                    </div>

                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                        <br></br>
                        <br></br>
                        <br></br>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Our Showroom</a>
                        <br></br>
                        <br></br>
                        <br></br>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Bookings</a>
                        <br></br>
                        <br></br>
                        <br></br>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                        <br></br>
                        <br></br>
                        <br></br>
                    </li>

                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login / Register</a>
                        <br></br>
                        <br></br>
                        <br></br>
                    </li>

                </ul>

            </nav>
        </div>
    </header>
    
    
    <div class="inventory">
        <div class="inventorybox">


        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>


</body>
