<?php
	session_start();
	if (isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		$user = $_SESSION['username'];
		$pass = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<title>Safety First</title>
<meta charset="UTF-8">

<?php
	require("stylesheet.html");
?>
</head>
<body onload = "startTime()">
<?php
	require("header.php");
?>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
	<div class="w3-container" id="bouquet">
  <h2>Welcome to our Safety First website.</h2>
  <h4>Your safety, Our concern.</h4>
</div>

<div class="w3-content w3-display-container" >
  <div class="w3-display-container mySlides">
  <a href="drugs.php" alt="Drugs"> <img class="mySlide" src="images/drugs.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;" > </a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Drugs</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="house.php" alt="House"><img class="mySlide" src="images/home.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;">  </a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">House</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="internet.php" alt="Internet"><img class="mySlide" src="images/internet.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Internet</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="road.php" alt="Road"><img class="mySlide" src="images/road.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Road</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="school.php" alt="School"><img class="mySlide" src="images/school.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">School</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="sex.php" alt="Sex"><img class="mySlide" src="images/sex.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Sex</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="health.php" alt="Health"><img class="mySlide" src="images/health.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Health</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="sport.php" alt="Sport"><img class="mySlide" src="images/sport.jpg" style="width:400px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Sport</div>
  </div>
	
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-center" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
  </div>
</div>


  
  <hr id="about">

  <!-- About Section -->
	  <div class="w3-row-padding w3-padding-16 w3-center" >
    <div class="w3-quarter">
      <a href="health.php"><img src="images/health.png" alt="Health" style="width:100%"></a>
      <h3>Health</h3>
      <p>Good nutrition is an important part of leading a healthy lifestyle.
		<br>Combined with physical activity, your diet can help you to promote your overall health.</p>
    </div>
    <div class="w3-quarter">
      <a href="house.php"><img src="images/house.png" alt="House" style="width:100%"></a>
      <h3>House</h3>
      <p>Creating a safe environment where your family can grow and thrive is a top priority.
		<br>Make sure you’re doing everything you can to keep your family safe.</p>
    </div>
    <div class="w3-quarter">
      <a href="school.php"><img src="images/school.png" alt="School" style="width:100%"></a>
      <h3>School</h3>
      <p>Children and teenagers spent most of the times in school during study time, <br>
		so it is important for school to be safety for students.</p>
    </div>
    <div class="w3-quarter">
      <a href="drugs.php"><img src="images/drug.png" alt="Drugs" style="width:100%"></a>
      <h3>Drugs</h3>
      <p>We can never tell exactly what an illegal drug contains or what effect it will have, <br>
	  it put us at serious risk of harm. There is no safe level of illicit drug use.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <a href="sport.php"><img src="images/sport.png" alt="Sport" style="width:100%"></a>
      <h3>Sport</h3>
      <p>Many people had injuries when having sports and using the wrong or not properly fitted equipment is a major cause of injuries.</p>
    </div>
    <div class="w3-quarter">
      <a href="road.php"><img src="images/road.png" alt="Road" style="width:100%"></a>
      <h3>Road</h3>
      <p>Safe driving is a matter of life and death. Taking even the smallest initiative to follow the laws and rules 
		of the road can mean much difference.</p>
    </div>
    <div class="w3-quarter">
      <a href="sex.php"><img src="images/sex.png" alt="Sex" style="width:100%"></a>
      <h3>Sex</h3>
      <p>Safer sex is all about protecting yourself and your partners from sexually transmitted infections. 
		Safer sex helps us staying healthy.</p>
    </div>
    <div class="w3-quarter">
      <a href="internet.php"><img src="images/internet.png" alt="Internet" style="width:100%"></a>
      <h3>Internet</h3>
      <p>Along with offering a fascinating, new way to connect with the world, the Internet also offers many risks. 
	  We should equip with internet safety knowledges as precaution. 
		</p>
    </div>
  </div>
  <hr>
  
<?php
	require("footer.html");
?>

<!-- End page content -->
</div>

<?php	
	require("script.html");
?>

</body>
</html>

<?php
	}
	else
	{
?>
<!DOCTYPE html>
<html>
<title>Safety First</title>
<meta charset="UTF-8">

<?php
	require("stylesheet.html");
?>
</head>
<body onload = "startTime()">
<?php
	require("header.php");
?>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
	<div class="w3-container" id="bouquet">
  <h2>Welcome to our Safety First website</h2>
  <p>An example of using buttons to indicate how many slides there are in the slideshow, and which slide the user is currently viewing.</p>
</div>

<div class="w3-content w3-display-container" >
  <div class="w3-display-container mySlides">
  <a href="drugs.php" alt="Drugs"> <img class="mySlide" src="images/drugs.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;" > </a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Drugs</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="house.php" alt="House"><img class="mySlide" src="images/home.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;">  </a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">House</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="internet.php" alt="Internet"><img class="mySlide" src="images/internet.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Internet</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="road.php" alt="Road"><img class="mySlide" src="images/road.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Road</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="school.php" alt="School"><img class="mySlide" src="images/school.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">School</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="sex.php" alt="Sex"><img class="mySlide" src="images/sex.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Sex</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="health.php" alt="Health"><img class="mySlide" src="images/health.jpg" style="width:900px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Health</div>
  </div>
  <div class="w3-display-container mySlides">
  <a href="sport.php" alt="Sport"><img class="mySlide" src="images/sport.jpg" style="width:400px; height:561px;margin: auto;padding: 10px;"></a>
  <div class="w3-display-topmiddle w3-large w3-container w3-padding-16 w3-black">Sport</div>
  </div>
	
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-center" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
  </div>
</div>


  
  <hr id="about">

  <!-- About Section -->
	  <div class="w3-row-padding w3-padding-16 w3-center" >
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/floret.jpg" alt="Sandwich" style="width:100%"></a>
      <h3>Health</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/hermine.jpg" alt="Steak" style="width:100%"></a>
      <h3>House</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/charlotte.jpg" alt="Cherries" style="width:100%"></a>
      <h3>School</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
    </div>
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/daphne.jpg" alt="Pasta and Wine" style="width:100%"></a>
      <h3>Drugs</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/emily.jpg" alt="Popsicle" style="width:100%"></a>
      <h3>Sport</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/adora.jpg" alt="Salmon" style="width:100%"></a>
      <h3>Road</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/BabyDory.jpg" alt="Sandwich" style="width:100%"></a>
      <h3>Sex</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <a href="flower1.php"><img src="images/maia.jpg" alt="Croissant" style="width:100%"></a>
      <h3>Internet</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>
  <hr>
  
<?php
	require("footer.html");
?>

<!-- End page content -->
</div>

<?php	
	require("script.html");
?>

</body>
</html>

<?php
	}
?>