<?php 

session_start();

if(empty($_SESSION['Username'])):
   header('Location:SignIn.html');
endif;
?>

<!DOCTYPE html>
<html>
  <head>
<title>Nature Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>

body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("forest.jpeg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>

<body>
<head>


<!-- <div class="">
  <ul class="w3-row w3-padding w3-black">
    <li class="w3-col s3">
      <a href="#home" class="w3-button w3-block w3-black">HOME</a>
    </li> -->
<nav>
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <ul>
      <li class="w3-col s3">
      <a href="#home" class="w3-button w3-block w3-black">HOME</a>
      </li>
      <li class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
      </li>
     
      <li class="w3-col s3">
      <a href="#activity" class="w3-button w3-block w3-black">Activity</a>
      </li>
      <li class="w3-col s3">
      <a href="acvityRegistration.php" class="w3-button w3-block w3-black">Activity Registration</a>
      </li>
      <li class="w3-col s3">
      <a href="#FAQ" class="w3-button w3-block w3-black">FAQ</a>
      </li>
      <li class="w3-col s3">
      <a href="profile.php" class="w3-button w3-block w3-black">My Profile</a>
      </li>
      <li class="w3-col s3">
      <a href="#feedback" class="w3-button w3-block w3-black">Feedback</a>
      </li>
      <li class="w3-col s3">
      <a href="logout.php" class="w3-button w3-block w3-black">Log Out</a>
      </li>

    </ul>
</div>
  </div>
</nav>


<!-- Header with image -->
<p><header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Nature Club</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Welcome to our<br>Club</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CLUB</span></h5>
    <p>The Club was founded in by Nur Atiqah who is the student from KUPTM Kl. She inspired by the National Geography show, there a lot of forest that have been destroyed by men.</p>
    <p> They prioritizing the economic interests than the near-extinct environment. In conclusion, the environment is not to be passed to future generations, but it is a treasure that lent to us by them. </p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>Love Our Nature as we love ourself.</i></p>
    </div>
    <img src="tiger.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Harimau Malaya:</strong>Panthera tigris jacksoni</p>
    <p><strong>Less than 200 population in Malaysia</strong></p>
  </div>
</div>


<!-- activity Container -->
<div class="w3-container" id="activity">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Let's Join Us</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Activity</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Cooperation With</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Gratitute Walk</h5>
      <p class="w3-text-grey">Let's walk along and Discover the Magic of the Trees</p>
      <p class="w3-text-grey">Fees: it's FREE</p><br>
    
      <h5>Planting Magrove Trees</h5>
      <p class="w3-text-grey">Discover a habitat of the collion between fresh water from the river and saltwater from the sea</p>
      <p class="w3-text-grey">Fees: it's FREE </p><br>
    
      <h5>Kayaking</h5>
      <p class="w3-text-grey">Lat's have a fraught experience and Amazing experience with Kayaking </p>
      <p class="w3-text-grey">Fees: RM60 (includes free T-Shirt) </p><br>
    
      <h5>Taman Negara Day Tour</h5>
      <p class="w3-text-grey">Explore Nature across the eyes</p>
      <p class="w3-text-grey">Fees: RM80</p><br>
    
      <h5>Hiking</h5>
      <p class="w3-text-grey">Let's feel the pleasure when reaching at the Top</p>
      <p class="w3-text-grey">Fees: RM30</p></div>



    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Cooperation with</h5>
      <p class="w3-text-grey">Jabatan Perhutanan Negara</p><br>
  
      <p class="w3-text-grey">Jabatan Alam Sekitar Malaysia</p><br>
    
      <p class="w3-text-grey">Jabatan Hidupan Liar Malaysia</p><br>
    </div>

    <img src="penerokaan.jpeg" style="width:100%;max-width:1000px;margin-top:32px;">
    <p>Deforestation for development</p>
  </div>
</div>




<!-- QnA Container -->
<div class="w3-row w3-container"id="FAQ">

   
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">FAQ</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Where is this Club Office?</h3>
      <p>Our Club is based in Cheras, Kuala Lumpur</p>
    </div>
    
    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Can we suggest the activity?</h3>
      <p>Off course you all can suggest whatever activity..Just Email the proposal to us </p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Do I have to pay for the activity that i will be joining?</h3>
      <p>It's depend to the activity Fees itself, Some activity have to pay,while some activity is Free.</p>
    </div>
    
    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>What about the transport?</h3>
      <p>For now, Transport are not provided. It will be considered from time to time</p>
    </div>
  </div>

 



<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
   <!-- Contact -->
  <div class="w3-container" id="contact" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Contact</span></h5>
    <i class="fa fa-map-marker" style="width:30px"></i> Kuala Lumpur, Malaysia<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: 088-376213<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: NatureClub.com<br>
   
<p><div class="form-group">


 <form role="form" id="feedback" action="feedbackProcess.php" method="post">
<p> Do you have any Feedback</p>
<p><label class="w3-input w3-padding-16 w3-border" for="MemName"><b>Username</b></label></p>
<p><input class="w3-input w3-padding-16 w3-border" type="text" type="text" placeholder="Enter Username" name="Username" id="Username" required></p>

<p><label class="w3-input w3-padding-16 w3-border"  for="email"><b>Email</b></label></p>
<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Enter Email" name="memEmail" id="memEmail" required></p>

<p><label class="w3-input w3-padding-16 w3-border"  for="Address"><b>Feedback</b></label></p>
<p><input class="w3-input w3-padding-16 w3-border" type="text"  placeholder="any feedback" name="Idea" id="Idea" required></p>

<button type="submit" class="Massage">Submit</button>
</form>
    </div></p>


<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
<script>




// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>