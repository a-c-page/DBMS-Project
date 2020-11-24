<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- HEAD -->
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a Booking!</title>
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
<body>
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

  <<!--  <section class="banner">
        <h2> Reserve A Car Today!</h2>
        <div class="card-container">
            <div class="card-img">
                image here 
            </div>

            <div class="card-content">
                <h3> Booking </h3>
                <form>
                    <div class="form-row">
                        <input type="text" placeholder="First Name" required pattern="[A-Za-z]+" title="First name can only contain letters.">                            
                        <input type="text" placeholder="Last Name" required pattern="[A-Za-z]+" title="Last name can only contain letters.">             
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Phone Number">
                        <input type="date" placeholder="From - MM/DD/YYYY">
                        <input type="date" placeholder="To - MM/DD/YYYY">
                        <input type="text" placeholder="License Number">
                        <input type="text" placeholder="Apartment/House Number">
                        <input type="text" placeholder="Street">
                        <input type="text" placeholder="City">
                        <input type="text" placeholder="Postal Code">
                    </div>
                </form>
            </div>
        </div>

        
    </section>
-->

<div class="bookingbackground">

    <div class="bookingcontainer">
        <h1>Make A Reservation!</h1>
            <div class="bookingbox">

                    <div class="bookingboxtext">
                        <form>

                            <input type="text"  maxlength = "10" class="input-coloumn" placeholder="Full Name" readonly="readonly">                           

                            <input type="email" class="input-coloumn" placeholder="Email" readonly="readonly">

                            <input type="text" class="input-coloumn" placeholder="Car Registered" readonly="readonly">

                            <input type="text" class="input-coloumn" placeholder="Car VIN Number" readonly="readonly">                            

                            <input type="text" class="input-coloumn" placeholder="Phone Number">

                            <input type="text" class="input-coloumn" placeholder="License Number">

                            <input type="date" class="input-coloumn" placeholder="From - MM/DD/YYYY">

                            <input type="date" class="input-coloumn" placeholder="To - MM/DD/YYYY">

                            <input type="text" class="input-coloumn" placeholder="House Number">

                            <input type="text" class="input-coloumn" placeholder="Street">

                            <input type="text" class="input-coloumn" placeholder="City">

                            <input type="text" class="input-coloumn" placeholder="Postal Code">

                            <button class="bookingbtn" type="submit">SUBMIT</button>

                        </form>
                    </div>

                
            </div>
    </div>

</div>



        <script type="text/javascript">
            document.write(localStorage.getItem("Year"));
            document.write(localStorage.getItem("Make"));
            document.write(localStorage.getItem("Model"));
        </script>
    </body>
</html>
