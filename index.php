<?php
	date_default_timezone_set('US/Eastern');
	include 'dbh.inc.php';
	include 'comments.inc.php';
	
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adil's Photography </title>
    <link rel="stylesheet"  href="styles.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">
  </head>

<body>




  <div class = "top-container">

    <img class = "top-cloud" src="gallary/cloud.png" alt="cloud">


    
    <a class="footer-link" href="#opening">About</a>
    <a class="footer-link" href="#myHeader">Gallary</a>
    <a class="footer-link" href="#myreview">Reviews</a>
    <a class="footer-link" href="blog.php">Blog</a>
    <a class="footer-link" href="#fourth">Contact</a>

    <h1>I'm Adil Rahman.</h1>



    <h3>Photographer in New York City.</h3>
    <h3>Weddings | Special Events </h3>
    <img class= "bottom-cloud" src="gallary/cloud.png" alt="cloud">
    <img src="gallary/mountain.png" alt="mountain">

  </div>

  <div class="middle-container">
    <div id = "opening" class="profile">
      <img class="profile-pic" src="gallary/portrait4.jpg" alt="profile picture">
      <h2>Hello</h2>
      <p class="intro">A wise person once said "You don't take a photograph. You ask quietly to borrow it." I came to fall in love with the small things in life because of photography. To be able to capture a sentimental moment or reflect through my lens the modern world's beauty in the midst of rapid industrial growth is what made me passionate about photography. I have grown a lot as a photographer ever since I started at the age of 17 and I am always looking to improve my skill.</p>
    </div>
    <hr>


    <!-- Header -->
  <div class="header" id="myHeader">
    <h2>Sneek Peek</h2>
    <h3>Click on the buttons to change the  view.</h3>
    <button class="btn" onclick="one()">1</button>
    <button class="btn active" onclick="two()">2</button>
    <button class="btn" onclick="four()">4</button>
  </div>

  <!-- Photo Grid -->
  <div class="row">
    <div class="column">
      <img src="work1.jpg" style="width:100%" alt = "work 1">
      <img src="work2.jpg" style="width:100%" alt = "work 2">
      <img src="work3.jpg" style="width:100%" alt = "work 3">
      <img src="work4.jpg" style="width:100%" alt = "work 4">
      <img src="work5.jpg" style="width:100%" alt = "work 5">
      <img src="work6.jpg" style="width:100%" alt = "work 6">
      <img src="work7.jpg" style="width:100%" alt = "work 7">
    </div>
    <div class="column">
      <img src="work8.jpg" style="width:100%" alt = "work 8">
    <img src="work9.jpg" style="width:100%" alt = "work 9">
    <img src="work10.jpg" style="width:100%" alt = "work 10">
    <img src="work11.jpg" style="width:100%" alt = "work 11">
    <img src="work12.jpg" style="width:100%" alt = "work 12">
    <img src="work13.jpg" style="width:100%" alt = "work 13">
    <img src="work23.jpg" style="width:100%" alt = "work 23">
    </div>
    <div class="column">
      <img src="gallary/work14.jpg" style="width:100%" alt = "work 14">
<img src="work15.jpg" style="width:100%" alt = "work 15">
<img src="work16.jpg" style="width:100%" alt = "work 16">
<img src="work17.jpg" style="width:100%" alt = "work 17">
<img src="work18.jpg" style="width:100%" alt = "work 18">
<img src="work19.jpg" style="width:100%" alt = "work 19">
    </div>
    <div class="column">
      <img src="work21.jpg" style="width:100%" alt = "work 21">
 <img src="work22.jpg" style="width:100%" alt = "work 22">
 <img src="work24.jpg" style="width:100%" alt = "work 24">
 <img src="work26.jpg" style="width:100%" alt = "work 26">
 <img src="work25.png" style="width:100%" alt = "work 25">
 <img src="work20.jpg" style="width:100%" alt = "work 20">
    </div>
  </div>

  <script>
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");

  // Declare a loop variable
  var i;

  // Full-width images
  function one() {
      for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "100%";  // IE10
      elements[i].style.flex = "100%";
    }
  }

  // Two images side by side
  function two() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "50%";  // IE10
      elements[i].style.flex = "50%";
    }
  }

  // Four images side by side
  function four() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "25%";  // IE10
      elements[i].style.flex = "25%";
    }
  }

  // Add active class to the current button (highlight it)
  var header = document.getElementById("myHeader");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>

<hr>
    <div id = "myreview" class = "userReview">
      <h2> Reviews </h2>
      <h3> Share Your Thoughts </h3>
      <p>Share your thoughts on the Photos!</p>
	  
	<div class = "container">
<?php 
	echo"<form method = 'POST' action='".setComments($conn)."'>
    <div class='row'>
      <div class='col-25'>
        <label for='fname'>Full Name</label>
      </div>
      <div class='col-75'>
        
		<input type='text' id='fname' name='uid' value = '' placeholder='Your name..'>
	<input type = 'hidden' name = 'date' value='".date('Y-m-d H:i:s')."'>	

      </div>
    </div>

    <div class='row'>
      <div class='col-25'>
        <label for='subject'>Message</label>
      </div>
      <div class='col-75'>
        <textarea id='subject' name='message' placeholder='Write something..' style='height:200px'></textarea>
      </div>
    </div>
    <div class='row'>
      <input type='submit' name='commentSubmit'  >
    </div>
	
  </form>";
  
  
  
  
  
?>
<hr>
 <h2> Client's Opinion </h2>
 <?php
 getComments($conn);
 ?>





 </div>
    </div>

    <hr>
    <div id = "fourth" class="contact-me">
      <h2>Get In Touch</h2>
      <h3>Love what I do? </h3>
      <p>Send me an Email & follow on Social Media!</p>


      <a class="myButton" href="mailto:rahmanadil63@gmail.com">CONTACT ME</a>
    </div>
  </div>


  <div class="bottom-container">
    <a class="footer-link" href="https://500px.com/adilrahman?fbclid=IwAR3sI2zgZzk3NioZ-p4oAkYc3b8Kx5YHcA6Yux1tpyPfE34hvxKMsEgd5dM" target="_blank">500px</a>
    <a class="footer-link" href="https://www.instagram.com/_adilrahman/" target="_blank">Instagram</a>
    <a class="footer-link" href="https://www.facebook.com/adil.rahman13" target="_blank">Facebook</a>
    <p>© 2019 All images belong to Adil Rahman.</p>
  </div>


  <button onclick="topFunction()" id="myBtn2" title="Go to top">Home</button>





  <script>
  //Get the button
  var mybutton2 = document.getElementById("myBtn2");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton2.style.display = "block";
    } else {
      mybutton2.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>



</body>
</html>
