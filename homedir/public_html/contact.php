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
  $("#menuContact").addClass("current");      
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
		  <div class="form_settings">
            <h2>Contact Us</h2>
              
            <h3 style="color:#43A9FF"><strong>Kishan Lal Vaishnav</strong></h3>
              <p>Suprintendent (Customs and Central Excise)</p>
              <p>Contact No. : 9829162357</p>
              <p>Email: klv5557@gmail.com</p>
              <br/><hr><br/>
                          <h3 style="color:#43A9FF"><strong>Praful Vaishnav</strong></h3>
              <p>Software Developer (Bangalore)</p>
              <p>Contact No. : 9902623168</p>
              <p>Email: praful.vaishnav@gmail.com</p>
              <br/><hr><br/>
                          <h3 style="color:#43A9FF"><strong>Shiv Prasad Vaishnav</strong></h3>
              <p>Contact No. : 9636349522</p>
              <p>Email: shivvaishnav.vaishnav0@gmail.com</p>
          </div><!--close form_settings-->
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
