<?php

session_start();

if ( !isset( $_SESSION['username']) )
{
    $_SESSION["message"] = "You must be logged in to make a reservation.";
    header("location: login.php");
}

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
    <div class="bookingbackground">

        <div class="bookingcontainer">
            <h1>Make A Reservation!</h1>
            <div class="bookingbox">

                <div class="bookingboxtext">
                    <form onchange="updateTotal()" action="send_booking.php" method="post">
                        <h3>TAHA IS GAY!</h3>
                        <div> <p>First Name</p> <input type="text" name="first_name" class="input-coloumn" readonly value=<?php echo "'".$_SESSION['first_name']."'"; ?>> </div>
                        <div> <p>Last Name</p> <input type="text" name="last_name" class="input-coloumn" readonly value=<?php echo "'".$_SESSION['last_name']."'"; ?>> </div>
                        <div> <p>Email</p> <input type="email" name="email" class="input-coloumn" readonly value=<?php echo "'".$_SESSION['email']."'"; ?>> </div>

                        <script type="text/javascript">
                        document.write('<div> <p>Car</p> <input type="text" name="car" class="input-coloumn" readonly value="' +
                        localStorage.getItem("Year") + ' ' + localStorage.getItem("Make") + ' ' + localStorage.getItem("Model") + '"> </div>');
                        </script>

                        <script type="text/javascript">
                        document.write('<div> <p>VIN</p> <input type="text" name="vin" class="input-coloumn" readonly value="' + localStorage.getItem("VIN") + '"> </div>');
                        </script>

                        <script type="text/javascript">
                        document.write('<div> <p>Price/24hrs</p> <input type="text" name="price" id="price-box" class="input-coloumn" readonly value="$' + localStorage.getItem("Price") + '"> </div>');
                        </script>

                        <div><p>Phone Number</p> <input type="text" name="phone_number" class="input-coloumn" readonly value=<?php echo "'".$_SESSION['phone_number']."'"; ?>> </div>
                        <div><p>License Number</p> <input type="text" name="license_number" class="input-coloumn" readonly value=<?php echo "'".$_SESSION['license_number']."'"; ?>> </div>
                        <div><p>Booking From</p> <input type="date" name="start_date" id="booking-from" class="input-coloumn" > </div>
                        <div><p>Booking To</p> <input type="date" name="end_date" id="booking-to" class="input-coloumn" > </div>
                        <div><p>Unit Number</p> <input type="text" name="unit" class="input-coloumn" value=<?php echo "'".$_SESSION['unit']."'"; ?>> </div>
                        <div><p>Street</p> <input type="text" name="street" class="input-coloumn" value=<?php echo "'".$_SESSION['street']."'"; ?>> </div>
                        <div><p>City</p> <input type="text" name="city" class="input-coloumn" value=<?php echo "'".$_SESSION['city']."'"; ?>> </div>
                        <div><p>Postal Code</p> <input type="text" name="postal" class="input-coloumn" value=<?php echo "'".$_SESSION['postal']."'"; ?>> </div>
                        <br>
                        <hr>
                        <br>
                        <h3>TAHA IS GAY! #2</h3>

                        <div>
                            <p>Payment Type</p>
                            <select name="payment_type" id="cars">
                                <option value="Mastercard">Mastercard</option>
                                <option value="Visa">Visa</option>
                            </select>
                        </div>
                        <div> <p>Card Number</p> <input type="text" name="card_number" class="input-coloumn" > </div>
                        <div> <p>Expiration Date</p> <input type="date" name="expiration_date" class="input-coloumn" > </div>
                        <div> <p>CVV</p> <input type="text" name="cvv" class="input-coloumn" > </div>
                        <div> <p>Total</p> <input type="text" name="total" id='total-box' class="input-coloumn" value="$0" readonly> </div>
                        <button class="bookingbtn" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
