<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DM Removal</title>
	
	<link rel="stylesheet" href="css/index.css">

</head>

<body>

		
		<div class="navbar">
		<container>
			<div class="logo">
		
		<a href="index.php"> <img class="logo" src="image/logobun.jpg" width="350"></a>
				</div>
		<div class="navbar_links">
		<ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li> <a href="contactus.php">Contact Us</a></li>
		  <li><a href="getaquote.php">Get a quote</a></li>
      </ul>
			
	
		</div>
			</container>
			</div>
		
		
			
			
	
	
	<div class="content">
		
	<img class="index_img" src="image/photo-1520038410233-7141be7e6f97.jpg" width="40%">
		
	<div class="services">
		
		
			
    <h3> Affordable professional moving services in the UK! </h3>
		
			<ul class="list">
				<li>Commercial and domestic removals;</li>
				<li>Local and national service;</li>
				<li>Packing service;</li>
				<li>Dismantling and reassembly furniture;</li>
				<li>Man and van;</li>
				<li>Free house survey;</li>
				
			</ul>
			
			<a href="getaquote.php"><button class="btn_quote">GET A QUOTE</button></a>
			
			
		</div>
		</div>
	
			<div class="moving_process">
	 <div class="row">
		 <h1 class="process">Our moving process:</h1>
		 <div class="column">
		<span class="preparing"><b>1. Book a survey</b></span>
    <p >One of our moving experts will visit to chat through your requirements. We’ll create a moving strategy and identify any items that need extra special care in transit. Then we’ll email you a quote within 24 hours.  </p></div>
		 <div class="column">
		<span class="collecting"><b>2. Packing up</b></span>
    <p >Our skilled team will pack and load all of your possessions with care. We’re used to handling all sorts items and have the skills and tools to ensure everything moves safely and smoothly. If you prefer to pack everything by yourself, please make sure your belongings are safe and securely packed for the journey. Lable the boxes, then our professional team will carefully load up the van.  </p> </div>
			 <div class="column">
		<span class="moving"><b>3. Moving</b></span>
    <p > Once everything has been loaded, we will deliver all your belongings to your new destination safe and securely. before we leave, we will make sure each piece of furniture is in the right room. </p> </div>
				 <div class="column">
		 <span class="storage"><b>4. Need a storage?</b></span>
	<p >Not sure where to put everything right away? No worries. As part of your move we can keep certain items for you at our excellent secure storage facilities in London until such time as you find a home for them.</p> </div>
		 </div>
			
		 </div>
	
	<div class="img_feedback">
				
		<!-- Slideshow container -->
		<div>
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  <div class="mySlides">
    <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
    <p class="author">- John Keats</p>
  </div>

  <div class="mySlides">
    <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
    <p class="author">- Ernest Hemingway</p>
  </div>

  <div class="mySlides">
    <q>I have not failed. I've just found 10,000 ways that won't work.</q>
    <p class="author">- Thomas A. Edison</p>
  </div>

  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>


</div>
	</div>
	
	
	
		<br>
	<hr>
		<div class="row1">
           <div class="column1"><h2 class="colum1">Feedback</h2>
			<p>“I can just say a massive thank you to you for the great the great service. A*, well recomanded!” -Jan Foreman</p>
			<a href="index.html"><img src="../documente/logobun.jpg" width="250"></a></div>
			
			
 		   <div class="column1"><h2 class="colum1">Follow us</h2>
			<p>Follow DM Removals on the flollowing social media platforms:</p><br>
			<a href="https://www.facebook.com/DCourierRemovals/"><img src="image/images.png" width="50px"></a>
			<a href="instagram.com"><img src="image/62-instagram-512.png" width="50px"></a>
			<a href="gmail.com"><img src="image/social-05-512.png" width="50px"></a>
			</div>
			
			
           <div class="column1"><h2 class="colum1">Contact us</h2>
			   <p>For all enquiries please contact us on the following details:</p>
			<p>Telephone:07900190496</p>
			<p>E-mail:iftimi.daniel@yahoo.com</p>
			<p>Address:</p>
			<p>For full contact details, please <a href="contactus.php">click here</a></p>
	</div>
	</div>
	
	
	
		<script>var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
var time = 3000;
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
	setTimeout (" showSlides"), time;
 
}
	</script>
			</body>	
</html>
