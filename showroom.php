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

require "configure.php";

$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if ( !$connection )
{
  $_SESSION["message"] = "Connection failed!";
  header("location: login.php");
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


<body style="background-image: url('images/inventory1.jpg');
background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))
background-repeat: no-repeat;
background-attachment: fixed;">
    <header>
        <div class="container">
            <nav>
                <!-- profile picture -->
                <img src="images/profile.png" class="profile" onclick="profileIcon('<?php if (isset($username)) {echo $username;} else {echo "";} ?>')">

                <!-- menu icon -->
                <div class="menu-icons open" onclick="sidebar()">
                    <i class="icon ion-md-menu"></i>
                </div>

                <!-- sidebar -->
                <ul class="nav-list" id="sidebar">

                    <!-- close button -->
                    <div class="menu-icons close" onclick="sidebar()">
                        <i class="icon ion-md-close"></i>
                    </div>

                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="showroom.php" class="nav-link">Showroom</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Bookings</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login / Register</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>


        <div class="inventory">
            <h1> “By the work one knows the workmen.” – Jean De La Fontaine </h1>
            <br></br>
            <h3> A motto Van Gogh Executive Travel thrives upon! By constantly updating our inventory
                 we make sure that our Customers are always satisfied wih their experience


        </div>
        <div class="inventorybox">
            <?php

            $sql = "SELECT * FROM vehicle";

            $query = mysqli_query($connection, $sql);

            while ($row = $query->fetch_assoc())
            {
              echo "
              <div class='car-box'>
                    <img src='images/inventory/". $row['Photo']."' class='inventory-photo'>

                    <div class='inventory-text'>
                        <h1>".$row['Year']." ".$row['Make']." ".$row['Model']."</h1>
                        <p>Colour: ".$row['Colour']."</p>
                        <p>Mileage: ".$row['Mileage']."km</p>
                        <p>Price: $".$row['Price']." per 24 Hours</p>
                        <p>Status: ".$row['Status']."</p>
                        <button name='submit' class='inventory-btn' onclick=\"bookNow('".$row['Year']."','".$row['Make']."','".$row['Model']."')\">Book Now</button>
                    </div>

              </div>";
            }

            ?>
        </div>

    <script type="text/javascript" src="script.js"></script>


</body>
