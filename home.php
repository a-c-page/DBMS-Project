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
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Van Gogh Executive Travel</title>
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
									<a href="showroom.php" class="nav-link">Showroom</a>
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
									<a href="contact.php" class="nav-link">Contact</a>
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
				<main>
					<section class="firstsection">
						<div class="container">
							<div class="companyname">
								<h3> Van Gogh Executive Travel</h3>
								<p>
                        Guaranteed Luxury and Comfort
                    </p>
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
                        <h1>Revolutionizing the Way You Travel Forever</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies ligula id aliquet pharetra. Etiam eu dictum mauris. Proin ut elit eget felis efficitur interdum sed sit amet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
									<br>
										<br/>
									</div>
									<!--second-->
									<div class="activities-grid-item secondheading">
										<h1>Canada's Most Luxurious & Exclusive Fleet</h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies ligula id aliquet pharetra. Etiam eu dictum mauris. Proin ut elit eget felis efficitur interdum sed sit amet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
										<br>
											<br/>
										</div>
										<!--third-->
										<div class="activities-grid-item thirdheading">
											<h1>Seamless, State of the Art Service</h1>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies ligula id aliquet pharetra. Etiam eu dictum mauris. Proin ut elit eget felis efficitur interdum sed sit amet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
											<br>
												<br/>
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
												<br>
													<br/>
												</div>
												<!--second-->
												<div class="activities-grid-item fifthheading">
													<h1> Insight with Interactive Spec Sheets</h1>
													<br>
														<br/>
													</div>
													<!--third-->
													<div class="activities-grid-item sixthheading">
														<h1>Welcome Addition of Electric Vehicles</h1>
														<h1></h1>
														<br>
															<br/>
														</div>
													</div>
												</div>
											</section>
										</main>
										<script type="text/javascript" src="script.js"></script>
									</body>
</html>
