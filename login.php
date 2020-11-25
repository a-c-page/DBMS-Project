<?php
session_start();
if (isset($_SESSION["message"]))
{
  echo "<script type='text/javascript'> alert("."'".$_SESSION["message"]."'"."); </script>";
}
unset($_SESSION['message']);
session_destroy();
?>

<!DOCTYPE html>
<head>
    <title>
        Login and Registration
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

        <div class="hero">
            <div class="formbox">
                <div class="buttonbox">
                    <div id="btn"></div>
                    <button class="toggle-btn" onclick="login()">Log In</button>
                    <button class="toggle-btn" onclick="register()">Register</button>
                </div>

                <form id="login" action="checkLogin.php" class="input-group" method="POST">
                    <input type="text" name="username" class="input-field" placeholder="Username" required>
                    <br></br>
                    <br></br>
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <br></br>
                    <br></br>
                    <button type="submit" name="submit" class="submit-btn">Log In</button>
                </form>

                <form id="register" action="checkRegistration.php" class="input-group" method="POST">
                    <input type="text" name="first_name" class="input-field" placeholder="First Name" required pattern="[A-Za-z]+" title="First name can only contain letters.">
                    <input type="text" name="last_name" class="input-field" placeholder="Last Name" required pattern="[A-Za-z]+" title="Last name can only contain letters.">
                    <input type="text" name="username" class="input-field" placeholder="Username" required pattern="[A-Za-z0-9]{3,}" title="Username can only contain leters and numbers, and must be at least 3 characters long.">
                    <input type="email" name="email" class="input-field" placeholder="Email">
                    <input type="text" name="license_number" class="input-field" placeholder="License Number">
                    <input type="text" name="phone_number" class="input-field" placeholder="Phone Number">
                    <input type="text" name="unit" class="input-field" placeholder="Unit Number">
                    <input type="text" name="street" class="input-field" placeholder="Street">
                    <input type="text" name="city" class="input-field" placeholder="City">
                    <input type="text" name="postal" class="input-field" placeholder="Postal Code">
                    <input type="password" name="password" class="input-field" placeholder="Password" required pattern="[A-Za-z0-9]{3,}" title="Password can only contain leters and numbers, and must be at least 3 characters long.">
                    <button type="submit" name="submit" class="submit-btn">Register</button>
                </form>

            </div>
        </div>


        <script type="text/javascript" src="script.js"></script>
</body>
