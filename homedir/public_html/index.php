<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Vaishnav Samiti</title>
  <meta name="description" content="vaishnav samiti website template" />
  <meta name="keywords" content="vaishnavsamiti vaishnav samiti vaishnavsamaj vaishnav" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body onload="checkMenuBar()">
	<script>
    function checkMenuBar() {
$("#menubar").find("li.current").removeClass("current"); 
  $("#menuHome").addClass("current");      
    }
    </script>
  <div id="main">
    <?php
include("htmlTemplate/header.html");
      ?>
    
	<div id="site_content">		
	<?php
        include("htmlTemplate/side-container.html");
        ?>
	  <div class="slideshow">
	    <ul class="slideshow">
                      <li class="show"><img width="500" height="250" src="images/gathering.jpg" alt="People Gathered at Function on 28 April 2013" /></li>
          <li><img width="500" height="250" src="images/prize1.jpg" alt="Prize To Meritorious Student at Function on 28 April 2013" /></li>
          <li><img width="500" height="250" src="images/prize2.jpg" alt="Prize To Meritorious Student at Function on 28 April 2013" /></li>
          <li><img width="500" height="250" src="images/speech.jpg" alt="Speech given by Kishan Lal Vaishnav (Organizer)" /></li>
          </ul>
      </div>	  	 
	 
	  <div id="content">
        <div class="content_item">
		  <h1 style="color:#43A9FF"><strong>Vaishnav Samiti</strong></h1> 
	      <div class="content_image">
		    <img style="height: 150px; width: 150px;" src="images/logo.jpg" alt="image1"/>
	      </div><p>This organization is founded by Kishan Lal Vaishnav. Purpose of this organization is to provide financial assistance to the students who are intelligent and have potential to achieve things if provided by good guidance and finance.</p>	
		  	  
		  <p>Lets part of this organization to help those students by any means you can through finance, guidance, etc. For more information please visit <a href="aboutus.html">here</a></p>
		  <br style="clear:both"/>
		  
		  <div class="content_container">
		    <p>List of students selected for the Education Assistance Program on 31 May, 2015.</p>
              <a href="images/meritList.png"><img style="width:300px;" src="images/meritList.png"/></a>
		  	<!--<div class="button_small">
		      <a href="#">Read more</a>
		    </div>--><!--close button_small-->
		  </div><!--close content_container-->
          <div class="content_container">
		    <p>Education Assistance Program by VaishnavSamiti will be organized on 31 May, 2015.</p>
              <a href="images/invitation.jpg"><img style="width:300px;" src="images/invitation.jpg"/></a>
		  	<div class="button_small">
		      <a href="updates.php">Read more</a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->			  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
<?php
    include("htmlTemplate/bottom-container.html");
?>
 
  </div><!--close main-->
  
<?php
include("htmlTemplate/footer.html");
?>
  
</body>
</html>
