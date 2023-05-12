
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Student Style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500;700&display=swap" rel="stylesheet">
  
  <title>Dorms - Home Page</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container"> 
      <!--Header End -->
      
      <!--Navagation-->
      <div class="nav">
        <div class="logo">
          <a href="#home">
            <img src="Images\logo.png">
          </a>
        </div>
        <div class="nav-list">
          <div class="menu">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#home" data-after="Home"><span class="navbar">Home</span></a></li>
            <li><a href="#about" data-after="About"><span class="navbar">About</span></a></li>
            <li><a href="#contact" data-after="Contact"><span class="navbar">Contact</span></a></li>
            <li><a href="Accommodation Page.php" data-after="Booking"><span class="booking">Booking</span></a></li>
            <li><div class="dropdown"><button class="dropbtn"><span class="account">
              <img src="Images\Profile.png" width="45px" height="45px"></span>
            </button>
            <div class="dropdown-content">
              <a href="Profile.php">Account</a>
              <a href="Room.php">Room</a>
              <a href="DB/logout.php">Log-out</a>
              </div>
            </div>
            
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </section>
  
<!--Navagation End-->

<!--Home-->

  <section id="home">
    <div class="home container">
      <div>
        <h1>Welcome to the <span class="a">D</span>ORMS</h1>
        <p>We are here to help students find peace from the hardships of student 
          <br>life with this Peacful Accommodation.</p>
        <a href="Accommodation Page.php" type="button" class="btn">Book Your Room Now</a>
      </div>
    </div>
  </section>

<!--Home End-->



<!--About-->

  <section class="about" id="about">
    <h1>About <span class="a">US</span></h1>
    <p>We are Group 4 of Web Programming Subject section 6 developing a full website as a project</p>

    <div class="row">
        <div class="col">
            <img src="Images\sajid.png">
            <span class="h3"><h3>Shah Sajid</h3></span>
            <p>System Admin</p>
        </div>
        <div class="col">
            <img src="Images\Nafis.png">
            <h3>Nafis Ahmed</h3>
            <p>System Admin</p>
        </div>
        <div class="col">
            <img src="Images\Torky.png">
            <h3>Mohamed Tarek Torky </h3>
            <p>Accommodation Manager</p>
        </div>
        <div class="col">
            <img src="Images\Shabrina.png">
            <h3>Shabrina Salsabila Sakroni</h3>
            <p>Accommodation Manager</p>
        </div>
    </div>
</section>

<!--About End-->

<!--Contact-->

<section class="contact" id="contact">
  <h1>Having any troubles?</h1>
  <a href="contact.html" class="cbtn">Contact Us</a>
</section>

<!--Contact End-->

<!--Footer-->

<section class="footer">
  <a href="#home"><img src="Images/logo.png"></a>
  <p><b>Dorms</b> is a Studens Accommodations website that allows students to book rooms for studying in a peacful environment</p>
  <p>Copyright 2022 by Group4 Students. All Rights Reserved.
      <br>Dorms is Powered by D.CSS.
  </p>
</section>

<!--Footer End-->

<!--Script-->
  <script src="./Scipt.js"></script>
</body>

</html>