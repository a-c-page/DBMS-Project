<?php
session_start(); // Start the session

// If a message is passed here, then this block is used to display it
if ( isset($_SESSION["message"]) ) {
    echo "<script type='text/javascript'> alert("."'".$_SESSION["message"]."'"."); </script>";
}
unset( $_SESSION['message'] );

require "configure.php";

$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if ( !$connection )
{
  $_SESSION["message"] = "Connection failed!";
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- HEAD -->
<head>
    <!-- Title -->
    <title>Van Gogh Executive Travel | Home</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!-- linking the css and js file -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<!-- BODY -->
<body>
    <!-- Header which contains nav bar and image-->
    <?php include("header.php"); ?>

    <main>
        <section class="firstsection">
            <div class="container">
                <div class="companyname">
                    <h3>Van Gogh Executive Travel</h3>
                    <p>Guaranteed Luxury and Comfort</p>
                </div>
            </div>

        </section>

        <section class="companyinfo">
            <div class="container">

                <div class="mainheading">
                    <br></br>
                    <h3>Why Van Gogh Executive Travel?</h3>
                    <br></br>
                    <h1> Since We Work Towards Turning Your Dreams into Reality </h1>
                </div>

                <div class="activities-grid">

                    <!--first-->
                    <div class="activities-grid-item firstheading">
                        <table>
                            <tr>
                                <th>Number of customers that use our services</th>
                            </tr>
                            <tr>
                                <?php
                                $sql = "SELECT COUNT(*) FROM customer";
                                $query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                while ($row = $query->fetch_assoc())
                                {
                                  foreach ($row as $key => $value)
                                  {
                                      echo "<td>$value</td>";
                                  }
                                }

                                ?>
                            </tr>
                        </table>
                    </div>
                    <!--second-->
                    <div class="activities-grid-item secondheading">
                        <table>
                            <tr>
                                <th>Number of vehicles in our fleet</th>
                            </tr>
                            <tr>
                                <?php
                                $sql = "SELECT COUNT(*) FROM vehicle";
                                $query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                while ($row = $query->fetch_assoc())
                                {
                                  foreach ($row as $key => $value)
                                  {
                                      echo "<td>$value</td>";
                                  }
                                }

                                ?>
                            </tr>
                        </table>
                    </div>
                    <!--third-->
                    <div class="activities-grid-item thirdheading">
                        <table>
                            <tr>
                                <th>Number of vehicles in our fleet</th>
                            </tr>
                            <tr>
                                <?php
                                $sql = "SELECT COUNT(*) FROM vehicle";
                                $query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                while ($row = $query->fetch_assoc())
                                {
                                  foreach ($row as $key => $value)
                                  {
                                      echo "<td>$value</td>";
                                  }
                                }

                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="companyservices">
            <div class="container">
                <div class="mainheading">
                    <br></br>
                    <h3>Unique Services Offered by Us</h3>
                    <br></br>

                    <h1> Striving to set the benchmark in everything
                        our Company Sets Out to Achieve is a Testament
                        to Our Examplary Services </h1>
                    </div>
                    <div class="activities-grid">
                        <!--first-->
                        <div class="activities-grid-item fourthheading">
                            <h1>Apply online, get approved in a few hours with
                                Your vehicle ready for you on arrival.</h1>
                            </div>
                            <!--second-->
                            <div class="activities-grid-item fifthheading">
                                <h1> Insight with Interactive Spec Sheets</h1>
                            </div>
                            <!--third-->
                            <div class="activities-grid-item sixthheading">
                                <h1>Welcome Addition of Electric Vehicles</h1>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </body>
</html>
