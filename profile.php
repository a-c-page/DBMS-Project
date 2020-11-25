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
<html lang="en" dir="ltr">
<!-- HEAD -->
<head>
    <title>Van Gogh Executive Travel | Profile</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!-- linkig the css and js file -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<!-- BODY -->
<body style="background-image: url('images/profile-bg.jpg');
background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))
background-repeat: no-repeat;
background-attachment: fixed;">
        <!-- Header which contains nav bar and image-->
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

        <div class="body-container">
            <div class="title-container">
                <h1>TITLE SOMEWHERE HERE!!!!!!</h1>
            </div>
            <div class="content-container">
                <table id="prof-table">
                    <tr>
                        <th>Booking ID</th>
                        <th>VIN</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Total</th>
                        <th>Payment Type</th>
                        <th>Card Number</th>
                    </tr>
                    <?php

                    require "configure.php";

                    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

                    if ( !$connection )
                    {
                        $_SESSION["message"] = "Connection failed!";
                        header("location: home.php");
                    }
                    else
                    {
                        $id = $_SESSION["customer_id"];
                        $sql = "SELECT * FROM booking WHERE customer_id = '$id'";

                        $query = mysqli_query($connection, $sql);

                        while ($row = $query->fetch_assoc())
                        {
                            echo "
                                <tr>
                                    <th>".$row['booking_id']."</th>
                                    <th>".$row['vin']."</th>
                                    <th>".$row['start_date']."</th>
                                    <th>".$row['end_date']."</th>
                                    <th>".$row['total']."</th>
                                    <th>".$row['payment_type']."</th>
                                    <th>".$row['card_number']."</th>
                                </tr>";
                        }
                    }

                    ?>
                </table>

            </div>
        </div>

    <script type="text/javascript" src="script.js"></script>
</body>
