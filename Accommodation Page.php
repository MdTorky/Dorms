<?php

include "DB\db_conn.php";
session_start();
$user_id = $_SESSION['id'];


if(isset($_SESSION['id']) && isset($_SESSION['userID'])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Accommodation Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Accommodation Style.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
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
            <li><a href="Home Page.php" data-after="Home"><span class="navbar">Home</span></a></li>
            <li><a href="#about" data-after="Amenitis"><span class="navbar">Amenities</span></a></li>
            <li><a href="#room" data-after="Rooms"><span class="navbar">Rooms</span></a></li>
            <li><a href="#form1" data-after="Booking"><span class="booking">Booking</span></a></li>
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


  <section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1>Dorms</h1>
          <p>We are here to help students find peace from the hardships of student life with this Peacful Accommodation.</p>
        </div>
      </div>
      <div class="image">
        <img src="Images\Dorm\Dorm1.jpg" class="slide">
      </div>
      <div class="image_item">
       <img src="Images\Dorm\Dorm1.jpg" alt="" class="slide active " onclick="img('Images/Dorm/Dorm1.jpg')">
       <img src="Images\Dorm\Dorm2.jpg" alt="" class="slide" onclick="img('Images/Dorm/Dorm2.jpg')">
       <img src="Images\Dorm\Dorm3.jpg" alt="" class="slide" onclick="img('Images/Dorm/Dorm3.jpg')">
       <img src="Images\Dorm\Dorm4.jpg" alt="" class="slide" onclick="img('Images/Dorm/Dorm4.jpg')">
      </div>
    </div>
    </section>


<section class="about top" id="about">
  <div class="ccon flex">
    <div class="left">
      <div class="img">
        <img src="Images\Dorm\D1.jpg" alt="" class="image1">
        <img src="Images\Dorm\D2.jpg" alt="" class="image2">
      </div>
    </div>
    <div class="right">
      <div class="heading">
        <h5>RAISING COMFOMRT TO THE HIGHEST LEVEL</h5>
        <h2>Welcome to Dorms Accommodation Center</h2>
        <p>Dorms Accommodations is one of the most popular student accommodation in Johor Bahru City, providing students with a truly exceptional experience.</p>
        <p>Providing all the required amenities you will ask for as well as a wide range of stylish studios and two beds apartments on offer; all fully furnished with en-suite studio rooms and fitted kitchens.In addition to, a high-speed Wi-fi throughout the building and all utility bills are included in the rent.</p>
      </div>
    </div>
  </div>
</section>

<section class="wrapper top1">
  <div class="container">
    <div class="text">
      <h2>Our Amenities</h2>
      <p>Dorms Accommodations Provide all the required amenities you will ask for as well as a wide range of stylish studios and two beds apartments on offer; all fully furnished with en-suite studio rooms and fitted kitchens.In addition to, a high-speed Wi-fi throughout the building and all utility bills are included in the rent.  
        It also has some of the most amazing social spaces including a cinema and a library, and music practice room to balance your social and academic life in the London student housing options. There are also communal study rooms for you to have a group study with your friends, bookable dining rooms and a beautiful urban garden with BBQs. </p>

      <div class="content">
        <div class="box flex">
          <i class="fas fa-swimming-pool"></i>
          <span>Swimming pool</span>
        </div>
        <div class="box flex">
          <i class="fas fa-dumbbell"></i>
          <span>Gym & yogo</span>
        </div>
        <div class="box flex">
          <i class="fas fa-spa"></i>
          <span>Garden</span>
        </div>
        <div class="box flex">
          <i class="fa fa-film"></i>
          <span>Cinema</span>
        </div>
        <div class="box flex">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span>Library</span>
        </div>
        <div class="box flex">
          <i class="fa fa-pencil" aria-hidden="true"></i>
          <span>Study Room</span>
        </div>
        <div class="box flex">
          <i class="fa fa-music" aria-hidden="true"></i>
          <span>Music Room</span>
        </div>
        <div class="box flex">
          <i class="fas fa-microphone"></i>
          <span>Conference room</span>
        </div>
      </div>
    </div>
  </div>
</section>










<section class="room top1" id="room">
  <div class="ccon">
    <div class="heading_top flex1">
      <div class="heading">
        <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
        <h2>Rooms</h2>
      </div>
    </div>

    <div class="content grid">
      <div class="box">
      <div class="mySlides">
        <div class="img">
          <img src="Images\Dorm\room1.jpg" alt="" onclick="im1()">
        </div>
      </div>
        <div class="text">
          <h3>Single Room</h3>
          <p> 1000<span>RM</span> <span>/per month</span> </p>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="Images\Dorm\room2.jpg" alt="" onclick="im2()">
        </div>
        <div class="text">
          <h3>Double Rooms</h3>
          <p> 1000<span>RM</span> <span>/per month</span> </p>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="Images\Dorm\room3.jpg" alt="" onclick="im3()">
        </div>
        <div class="text">
          <h3>Deluxe Single Room</h3>
          <p> 1500<span>RM</span> <span>/per month</span> </p>
        </div>
      </div>
    </div>
  </div>

<br><br><br><br><br><br>

<!-- Colleges -->

  <div class="ccon">
    <div class="heading_top flex1">
      <div class="headingc">
        <h5>LIVING IN A PEACFUL ENVIRONMENT</h5>
        <h2>Colleges</h2>
      </div>
    </div>

    <div class="content grid">
      <div class="box">
      <div class="mySlides">
        <div class="img">
          <img src="Images\Dorm\c1.jpg" alt="">
        </div>
      </div>
        <div class="text">
          <h3>KLG</h3>
          <p>Single - Double - Deluxe Single</p>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="Images\Dorm\c2.jpg" alt="">
        </div>
        <div class="text">
          <h3>KRP</h3>
          <p>Single - Double - Deluxe Single</p>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="Images\Dorm\c3.jpg" alt="">
        </div>
        <div class="text">
          <h3>KTF</h3>
          <p>Single - Double - Deluxe Single</p>
        </div>
      </div>
    </div>
  </div>

  <br><br>


  <div class="ccon">
    <div class="heading_top flex1">
    </div>

    <div class="content grid">
      <div class="box">
      <div class="mySlides">
        <div class="img">
          <img src="Images\Dorm\c4.jpg" alt="">
        </div>
      </div>
        <div class="text">
          <h3>KDOJ</h3>
          <p>Single - Double - Deluxe Single</p>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="Images\Dorm\c5.jpg" alt="">
        </div>
        <div class="text">
          <h3>KDSE</h3>
          <p>Single - Double - Deluxe Single</p>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="Images\Dorm\c6.jpg" alt="">
        </div>
        <div class="text">
          <h3>KTDI</h3>
          <p>Single - Double - Deluxe Single</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="roomsspecification top1" id="rooms">
  <div class="ccon flex">
    <div class="left">
      <img src="Images\Dorm\Dorm5.jpg" alt="">
    </div>
    <div class="right">
      <div class="text">
        <h2>Rooms Details</h2>
        <p> The dorms are arranged on five floors, with a lift. On the ground floor, apart from the reception, there is a comfortable lounge where you can sit and drink tea if you like.</p>
      </div>
      <div class="Detail-Wrapper">
        <div class="Detail open">
          <h2 class="Detail-Header">Single Room</h2>
          <div class="Detail-Content">
            <p>A new level of peace and quiet, because it is equipped with a single bed with orthopedic mattress for deep sleep. In addition to the usual and necessary equipment in the room, there are comfortable details.          
              Hairdryers and mini perfumes are also provided and a lighted mirror will be a nice detail for you right?</p>
            <br>
            <h4>Details:</h4>
            <table>
          <div class="ccon">
            <tr>
            <div class="box flex">
              <th><i class="fa fa-male" aria-hidden="true" style="margin-left: 12px"></i>
                <p style="margin-left: 10px">People:</p>
              </th>
              <td><p>1 Person</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th>
                <i class="fa fa-star" aria-hidden="true" style="margin-left: 8px" ></i>
                <p style="margin-left: 4px">Amenities:</p></th>
              <td><p>Free wi-fi, Air conditioner, Minibar, Laundry service, Safe in room, Phone, Hairdryer</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-arrows-alt" aria-hidden="true" style="margin-left: 9px"></i>
              <p style="margin-left: 5px">Area:</p></th>
              <td><p>20m<sup>2</sup></p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-bookmark" aria-hidden="true" style="margin-left: 10px"></i>
                <p style="margin-left: 5px">Cartegory:</p></th>
                <td><p>Single</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-building" aria-hidden="true" style="margin-left: 10px"></i>
                <p style="margin-left: 5px">College:</p></th>
                <td><p>KLG, KRP, KTF, KDOJ, KDSE, and KTDI</p></td>
            </div>
          </tr>
          </div>
           </table>
        </div>
        </div>
        <div class="Detail close">
          <h2 class="Detail-Header">Double Rooms</h2>
          <div class="Detail-Content">
            <p>Room with a large double bed for a good night's sleep. The room is thought out to the last detail, as in every hotel room there is a desk, wardrobe, refrigerator, satellite TV, and an air conditioner.
              We can't forget about the bathroom, which comes with a hairdryer and mini perfume. The morning in this room starts with a good mood and a great view "What a morning".          
            </p>
            <br>
            <h4>Details:</h4>
            <table>
          <div class="ccon">
            <tr>
            <div class="box flex">
              <th><i class="fa fa-male" aria-hidden="true" style="margin-left: 12px"></i>
                <p style="margin-left: 10px">People:</p>
              </th>
              <td><p>2 People</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th>
                <i class="fa fa-star" aria-hidden="true" style="margin-left: 8px" ></i>
                <p style="margin-left: 4px">Amenities:</p></th>
              <td><p>Free wi-fi, Air conditioner, Minibar, Laundry service, Safe in room, Phone, Hairdryer</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-arrows-alt" aria-hidden="true" style="margin-left: 9px"></i>
              <p style="margin-left: 5px">Area:</p></th>
              <td><p>40m<sup>2</sup></p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-bookmark" aria-hidden="true" style="margin-left: 10px"></i>
                <p style="margin-left: 5px">Cartegory:</p></th>
                <td><p>Twin</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-building" aria-hidden="true" style="margin-left: 10px"></i>
                <p style="margin-left: 5px">College:</p></th>
                <td><p>KLG, KRP, KTF, KDOJ, KDSE, and KTDI</p></td>
            </div>
          </tr>
          </div>
           </table>
        </div>
        </div>
        <div class="Detail close">
          <h2 class="Detail-Header">Deluxe Single Room</h2>
          <div class="Detail-Content">
            <p>Elegant minimalist style room. Wake up in the morning, and be ready to start your day with a smile, because our deluxe room is no different. A double bed with a white blanket, a desk, the necessary equipment and many important details - everything here is designed for your comfort and pleasure. See the photos and get inspired, or book and come. Your Choice.
            </p>
            <br>
            <h4>Details:</h4>
            <table>
          <div class="ccon">
            <tr>
            <div class="box flex">
              <th><i class="fa fa-male" aria-hidden="true" style="margin-left: 12px"></i>
                <p style="margin-left: 10px">People:</p>
              </th>
              <td><p>1 Person</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th>
                <i class="fa fa-star" aria-hidden="true" style="margin-left: 8px"></i>
                <p style="margin-left: 4px">Amenities:</p></th>
              <td><p>Free wi-fi, Air conditioner, Minibar, Laundry service, Safe in room, Phone, Hairdryer</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-arrows-alt" aria-hidden="true" style="margin-left: 9px"></i>
              <p style="margin-left: 5px">Area:</p></th>
              <td><p>30m<sup>2</sup></p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-bookmark" aria-hidden="true" style="margin-left: 10px"></i>
                <p style="margin-left: 5px">Cartegory:</p></th>
                <td><p>Single</p></td>
            </div>
          </tr>
          <tr>
            <div class="box flex">
              <th><i class="fa fa-building" aria-hidden="true" style="margin-left: 10px"></i>
                <p style="margin-left: 5px">College:</p></th>
                <td><p>KLG, KRP, KTF, KDOJ, KDSE, and KTDI</p></td>
            </div>
          </tr>
          </div>
           </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="form1">
<div class="container1">
  <h1 class="booktitle">Booking</h1>

  <form action="DB/Booking.php" method="POST" class="forma">
      <div class="form first">
          <div class="details personal">
              <span class="title">Personal Details</span>

              <div class="fields">
                  <div class="input-field">
                      <label>First Name<span class="req">*</span></label>
                      <input type="text" name="fname" value="<?php echo $_SESSION['userName']; ?>" required readonly>
                  </div>

                  <div class="input-field">
                    <label>Last Name<span class="req">*</span></label>
                    <input type="text" name="lname" value="<?php echo $_SESSION['userLname']; ?>" required readonly>
                </div>

                <div class="input-field">
                  <label>Date of Birth<span class="req">*</span></label>
                  <input type="date" name="dob" placeholder="" required>
              </div>

                  <div class="input-field">
                      <label>Email<span class="req">*</span></label>
                      <input type="email" name="email" value="<?php echo $_SESSION['userEmail']; ?>" readonly required>
                  </div>

                  <div class="input-field">
                      <label>Mobile Number<span class="req">*</span></label>
                      <input type="number" name="phone" placeholder="Enter mobile number" required>
                  </div>

                  <div class="input-field">
                      <label>Nationality<span class="req">*</span></label>
                      <input type="text" name="nationality" placeholder="Enter nationality" required>
                  </div>


                <div class="input-field">
                  <label>ID/Matric Number<span class="req">*</span></label>
                  <input type="number" name="ID" value="<?php echo $_SESSION['userID']; ?>" readonly required>
              </div>
              
              <div class="input-field">
                <label>Gender</label>
                <select name="gender">
                    <option disabled selected>Select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="input-field">
              <label>Address</label>
              <input type="text" name="address" placeholder="Enter your current Address">
          </div>

                <div class="details personal">
                  <span class="title">Room Details</span>


                  <div class="fields">
                  <div class="input-field">
                    <label>College<span class="req">*</span></label>
                    <select required name="college">
                        <option disabled selected value="">Select College</option>
                        <option>KLG</option>
                        <option>KRP</option>
                        <option>KTF</option>
                        <option>KDOJ</option>
                        <option>KDSE</option>
                        <option>KTDI</option>
                    </select>
                </div>

                <div class="input-field">
                  <label>Room Type<span class="req">*</span></label>
                  <select name="rooms" required>
                      <option disabled selected value="">Select Room Type</option>
                      <option>Single Room</option>
                      <option>Double Rooms</option>
                      <option>Deluxe Single Room</option>
                  </select>
              </div>

              <div class="input-field">
                <label>Check-in Date<span class="req">*</span></label>
                <input type="date" name="cinDate" placeholder="Choose the check-in date" required>
            </div>

          </div>


                  </div>
            
            <!-- <button class="nextBtn">
              <span class="btnText">Next</span>
              <i class="uil uil-navigator"></i>
          </button> -->
          <button name="submit1" class="submit">
            <span class="btnText">Submit</span>
            <i class="uil uil-navigator"></i>
        </button>

                  
              </div>
          </div>
 

      <!-- <div class="form second">
          <div class="details address">
              <span class="title">University Details</span>

              <div class="fields">
                  <div class="input-field">
                      <label>University Name<span class="req">*</span></label>
                      <input type="text" placeholder="Enter your University's name" required>
                  </div>

                  <div class="input-field">
                      <label>University City<span class="req">*</span></label>
                      <input type="text" placeholder="Enter University's City" required>
                  </div>

                  <div class="input-field">
                      <label>University Address</label>
                      <input type="text" placeholder="Enter your University's address">
                  </div>

              </div>
          </div>

          <div class="details family">
              <span class="title">Room Details</span>

              <div class="fields">
                  <div class="input-field">
                      <label>Room Type<span class="req">*</span></label>
                      <select required>
                          <option disabled selected>Select type</option>
                          <option>Single Room</option>
                          <option>Double Rooms</option>
                          <option>Deluxe Single Room</option>
                      </select>
                  </div>

                  <div class="input-field">
                      <label>Check-in Date<span class="req">*</span></label>
                      <input type="date" placeholder="Choose the check-in date" required>
                  </div>

                  <div class="input-field">
                      <label>Check-out Date</label>
                      <input type="date" placeholder="Choose the check-out date">
                  </div>
              </div>

              <div class="buttons">
                  <div class="backBtn">
                      <i class="uil uil-navigator"></i>
                      <span class="btnText">Back</span>
                  </div>
                  

              </div>
          </div> 
      </div> -->
  </form>
</div>

</section>



<!--Contact-->

<section class="contact" id="contact">
  <h1>Having any troubles?</h1>
  <a href="Contact.html" class="cbtn">Contact Us</a>
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



  <script>
const menu = document.querySelector('.header .nav .nav-list .menu');
const mobile_menu = document.querySelector('.header .nav .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav .nav-list ul li a');
const header = document.querySelector('.header.container');

menu.addEventListener('click', () => {
	menu.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}}
);

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		menu.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.image');
      line.style.background = change;
    }


    function im1(){
      window.open('Room1.html',"_self");
    }
    function im2(){
      window.open('Room2.html',"_self");
    }
    function im3(){
      window.open('Room3.html',"_self");
    }



    var accItem = document.getElementsByClassName('Detail');
    var accHD = document.getElementsByClassName('Detail-Header');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'Detail close';
      }
      if (itemClass == 'Detail close') {
        this.parentNode.className = 'Detail open';
      }
    }



    const form = document.querySelector(".forma"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        submit = form.querySelector(".submit"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));






  </script>

  
</body>

</html>

<?php
}else{
    header('Location: Sign-in Page.php');
    exit();
}

?>
