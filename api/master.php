<!DOCTYPE html>
<html>
<head>
<!--  SETTING THE CHARACTER SET -->
<meta charset="UTF-8">
<!-- SETTING THE CONTENT OF THE PAGE TO BE RESPONSIVE TO DEVICE WIDTH (MOBILE FIRST) -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<!--  SETUP META DATA FOR THIS PAGE -->
<meta name="keywords" content="ACA,COMMUNITY,GARDEN,AJNABI,ASSOCIATION">
<meta name="author" content="Hasib Ahmed">
<title> Master </title>
<!--  INCLUDE OUR CSS STYLE SHEETS, USING W3 CSS, GOOGLE APIS AND FONTAWESOME -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylistic.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
</head>
<!--  LOADING ANIMATION -->
<body>

<!-- removed animate bottom -->
#
<!-- NAVBAR on big screens-->
<div class="w3-top">
  <div class="w3-bar w3-dark-grey" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" 
    href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
      </a>
<a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i><b>ACA</b>CommunityGarden</a>
	<a href="home.php#about" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-info-circle"></i> About Us</a>
  <a href="home.php#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-th"></i> Work</a>
  <a href="home.php#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-envelope"></i> Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Locations"><i class="fa fa-globe"></i> Projects <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="venues_merseyside.php" class="w3-bar-item w3-button">project1</a>
      <a href="venues_cheshire.php" class="w3-bar-item w3-button">project2</a>
      <a href="venues_north_wales.php" class="w3-bar-item w3-button">project3</a>
    </div>
  </div>
 </div>
  <!-- Navbar on small screens -->
  <div id="navSmall" class="w3-bar-block w3-dark-grey w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#about" class="w3-bar-item w3-button">About</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="venues_merseyside.php" class="w3-bar-item w3-button">Merseyside</a>
  </div>


</div>
<script>
//Change style of navbar on scroll *** REMOVED due to drop down menu for location not working once nav bar chanegs styles ***
//window.onscroll = function() {myFunction()};
//function myFunction() {
 //   var navbar = document.getElementById("myNavbar");
  //  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
   //     navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
   // } else {
    //    navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    //}
//}
//Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navSmall");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>
</body>
</html>
