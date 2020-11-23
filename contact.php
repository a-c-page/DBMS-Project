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
        Contact Us!
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
                        <a href="#" class="nav-link">Home</a>
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


    <div class="background">

        <div class="contactcontainer">
            <h1>Reach Out to Us!</h1>
            <p> A fundamental part of our buinsess it taking the time to respond to any complexites or queries
            our customer or users might be facing. Feel free to get in touch with us!</p>

                <div class="contactbox">
                    <div class="contact-left">
                        <h3>Forward Your Query!</h3>
                        <form>

                            <div class="input-row">
                                <div class="input-groups">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <br></br>
                                <div class="input-groups">
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <br></br>

                            </div>

                            <div class="input-row">
                                <div class="input-groups">
                                    <input type="email" placeholder="Email">
                                </div>
                                <br></br>

                                <div class="input-groups">
                                    <input type="text" placeholder="Phone Number">
                                </div>
                                <br></br>

                            </div>

                            <textarea rows="5" placeholder="Your Feedback"></textarea>

                            <button class="contactbtn" type="submit">SUBMIT</button>

                        </form>
                    </div>

                    <div class="contact-right">
                        <h3> Get in Touch through our Socials!</h3>

                        <table>
                                <tr>
                                    <td>Email</td>
                                    <td>vangoghet@outlook.com</td>
                                </tr>

                                <tr>
                                    <td>Phone</td>
                                    <td>+1 647 943 2010</td>
                                </tr>

                                <tr>
                                    <td>Instagram</td>
                                    <td>@vangoghet</td>
                                </tr>

                                <tr>
                                    <td>Facebook</td>
                                    <td>Van Gogh Executive Travel</td>
                                </tr>
                        </table>

                    </div>

                 </div>
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>
