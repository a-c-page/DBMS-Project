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
                <div class="nav-brand">

                </div>

                <div class="menu-icons open">
                    <i class="icon ion-md-menu"></i>
                </div>

                <ul class="nav-list">
                    <div class="menu-icons close">
                        <i class="icon ion-md-close"></i>
                    </div>

                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    <br>
                    </br>
                    <br>
                </br>
                <br>
            </br>

                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Our Showroom</a>
                     <br>
                    </br>
                    <br>
                </br>
                <br>
            </br>

                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Bookings</a>
                    <br>
                    </br>
                    <br>
                </br>
                <br>
            </br>

                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    <br>
                    </br>
                    <br>
                </br>
                <br>
            </br>

                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">LOG-IN & Register</a>
                    <br>
                    </br>
                    <br>
                </br>
                <br>
            </br>

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
                <form id="login" action="" class="input-group">
                    <input type="text" class="input-field" placeholder="Username" required>
                    <br></br>
                    <br></br>
                    <input type="password" class="input-field" placeholder="Password" required>
                    <br></br>
                    <br></br>
                    <button type="submit" class="submit-btn">Log In</Inp></button>
                </form>

                <form id="register" action="checkRegistration.php" class="input-group" method="POST">
                    <input type="text" class="input-field" placeholder="First Name" required pattern="[A-Za-z]+" title="First name can only contain letters.">
                    <br></br>
                    <br></br>
                    <input type="text" class="input-field" placeholder="Last Name" required pattern="[A-Za-z]+" title="Last name can only contain letters.">
                    <br></br>
                    <br></br>
                    <input type="text" class="input-field" placeholder="Username" required pattern="[A-Za-z0-9]{3,}" title="Username can only contain leters and numbers, and must be at least 3 characters long.">
                    <br></br>
                    <br></br>
                    <input type="email" class="input-field" placeholder="Email">
                    <br></br>
                    <br></br>
                    <input type="password" class="input-field" placeholder="Password" required pattern="[A-Za-z0-9]{3,}" title="Password can only contain leters and numbers, and must be at least 3 characters long.">
                    <br></br>
                    <button type="submit" class="submit-btn">Register</Inp></button>
                </form>

            </div>
        </div>






        <script type="text/javascript" src="script.js"></script>
</body>
