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
  $("#menuApply").addClass("current");      
    }
    </script>
  <div id="main">
  <div id="main">
    <?php
include("htmlTemplate/header.html");
      ?>
	<div id="site_content">	
        
        <div id="applicationForm">
            <h2 style="text-align: center; margin-top: 10px; color: #A39AFF"><strong>STUDENT REGISTRATION FORM</strong></h3>
<form action="formSubmit.php" method="POST">
 <table width="600" border="1">
  <tbody>
    <tr>
      <td width="241">Name</td>
      <td width="362" colspan="3"><input name="name" type="text" id="name" size="60"></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td colspan="3"><select name="Birthday_day" id="Birthday_Day">
  <option value="-1">Day</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
        
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
        
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
        
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
        
  <option value="31">31</option>
  </select>&nbsp;<select id="Birthday_Month" name="Birthday_Month">
  <option value="-1">Month</option>
  <option value="January">Jan</option>
  <option value="February">Feb</option>
  <option value="March">Mar</option>
  <option value="April">Apr</option>
  <option value="May">May</option>
  <option value="June">Jun</option>
  <option value="July">Jul</option>
  <option value="August">Aug</option>
  <option value="September">Sep</option>
  <option value="October">Oct</option>
  <option value="November">Nov</option>
  <option value="December">Dec</option>
  </select>
        
  <select name="Birthday_Year" id="Birthday_Year">
    
  <option value="-1">Year</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
  <option value="2008">2008</option>
  <option value="2007">2007</option>
  <option value="2006">2006</option>
  <option value="2005">2005</option>
  <option value="2004">2004</option>
  <option value="2003">2003</option>
  <option value="2002">2002</option>
  <option value="2001">2001</option>
  <option value="2000">2000</option>
    
  <option value="1999">1999</option>
  <option value="1998">1998</option>
  <option value="1997">1997</option>
  <option value="1996">1996</option>
  <option value="1995">1995</option>
  <option value="1994">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
    
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option value="1982">1982</option>
  <option value="1981">1981</option>
  <option value="1980">1980</option>
</select></td>
    </tr>
    <tr>
      <td height="23">Studying in Class</td>
      <td colspan="3"><input name="classStudying" type="text" id="classStudying" size="60"></td>
    </tr>
    <tr>
      <td height="23">School/College Name</td>
      <td colspan="3"><input name="currentSchoolName" type="text" id="currentSchoolName" size="60"></td>
    </tr>
    <tr>
      <td height="23">School/College Address</td>
      <td colspan="3"><input name="schoolAddress" type="text" id="schoolAddress" size="100"></td>
    </tr>
    <tr>
      <td height="23">Coaching Name</td>
      <td colspan="3"><input name="coachingName" type="text" id="coachingName" size="60"></td>
    </tr>
    <tr>
      <td height="23">Tick Approrpriately</td>
      <td height="23" colspan="4"><input type="checkbox" name="handicap" value="handicap">
        Handicap  &nbsp;&nbsp;<input type="checkbox" name="woman" value="woman">
        Woman  &nbsp;&nbsp;<input type="checkbox" name="bpl" value="bpl">
        B.P.L  &nbsp;&nbsp;<input type="checkbox" name="widow" value="widow">
        Widow  &nbsp;&nbsp;<input type="checkbox" name="rural" value="rural">
        Rural  &nbsp;&nbsp;<input type="checkbox" name="others" value="others">
        Others</td>
    </tr>
    <tr>
      <td height="23">Gautra</td>
      <td colspan="3"><input name="gautra" type="text" id="gautra" size="60"></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p><strong>Academic Details :</strong></p>
<table width="600" border="1">
  <tbody>
    <tr>
      <td width="51">Class</td>
      <td width="50">Roll No.</td>
      <td width="64">Maximum Marks</td>
      <td width="56">Marks Obtained</td>
      <td width="67">Percentage</td>
      <td width="55">Year of Passing</td>
      <td width="211">Name of School/College</td>
    </tr>
    <tr>
      <td><input name="class_1" type="text" size="10"></td>
      <td><input type="text" name="rollNo_1" size="10"></td>
      <td><input name="maximumMarks_1" type="text" size="10"></td>
      <td><input name="marksObtained_1" type="text" size="10"></td>
      <td><input name="percentage_1" type="text" size="10"></td>
      <td><input name="yearOfPassing_1" type="text" size="10" maxlength="4"></td>
      <td><input name="schoolName_1" type="text" id="schoolName_1" size="30"></td>
    </tr>
    <tr>
      <td><input name="class_2" type="text" size="10"></td>
      <td><input type="text" name="rollNo_2" size="10"></td>
      <td><input name="maximumMarks_2" type="text" size="10"></td>
      <td><input name="marksObtained_2" type="text" size="10"></td>
      <td><input name="percentage_2" type="text" size="10"></td>
      <td><input name="yearOfPassing_2" type="text" size="10" maxlength="4"></td>
      <td><input name="schoolName_2" type="text" id="schoolName_2" size="30"></td>
    </tr>
    <tr>
      <td><input name="class_3" type="text" size="10"></td>
      <td><input type="text" name="rollNo_3" size="10"></td>
      <td><input name="maximumMarks_3" type="text" size="10"></td>
      <td><input name="marksObtained_3" type="text" size="10"></td>
      <td><input name="percentage_3" type="text" size="10"></td>
      <td><input name="yearOfPassing_3" type="text" size="10" maxlength="4"></td>
      <td><input name="schoolName_3" type="text" id="schoolName_3" size="30"></td>
    </tr>
    <tr>
      <td><input name="class_4" type="text" size="10"></td>
      <td><input type="text" name="rollNo_4" size="10"></td>
      <td><input name="maximumMarks_4" type="text" size="10"></td>
      <td><input name="marksObtained_4" type="text" size="10"></td>
      <td><input name="percentage_4" type="text" size="10"></td>
      <td><input name="yearOfPassing_4" type="text" size="10" maxlength="4"></td>
      <td><input name="schoolName_4" type="text" id="schoolName_4" size="30"></td>
    </tr>
    <tr>
      <td><input name="class_5" type="text" size="10"></td>
      <td><input type="text" name="rollNo_5" size="10"></td>
      <td><input name="maximumMarks_5" type="text" size="10"></td>
      <td><input name="marksObtained_5" type="text" size="10"></td>
      <td><input name="percentage_5" type="text" size="10"></td>
      <td><input name="yearOfPassing_5" type="text" size="10" maxlength="4"></td>
      <td><input name="schoolName_5" type="text" id="schoolName_5" size="30"></td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>
<p><strong>Family Members Details :</strong></p>
<table width="600" border="1">
  <tbody>
    <tr>
      <td width="101">Name</td>
      <td width="55">Relation with Applicant</td>
      <td width="74">Qualification</td>
      <td width="241">Occupation Details</td>
      <td width="83">Annual Income</td>
    </tr>
    <tr>
      <td><input name="familyName_1" type="text" size="20"></td>
      <td><input type="text" name="familyRelation_1" size="10"></td>
      <td><input name="familyQualification_1" type="text" size="10"></td>
      <td><input name="familyOccupation_1" type="text" size="50"></td>
      <td><input name="familyIncome_1" type="text" size="10"></td>
    </tr>
    <tr>
      <td><input name="familyName_2" type="text" size="20"></td>
      <td><input type="text" name="familyRelation_2" size="10"></td>
      <td><input name="familyQualification_2" type="text" size="10"></td>
      <td><input name="familyOccupation_2" type="text" size="50"></td>
      <td><input name="familyIncome_2" type="text" size="10"></td>
    </tr>
    <tr>
      <td><input name="familyName_3" type="text" size="20"></td>
      <td><input type="text" name="familyRelation_3" size="10"></td>
      <td><input name="familyQualification_3" type="text" size="10"></td>
      <td><input name="familyOccupation_3" type="text" size="50"></td>
      <td><input name="familyIncome_3" type="text" size="10"></td>
    </tr>
    <tr>
      <td><input name="familyName_4" type="text" size="20"></td>
      <td><input type="text" name="familyRelation_4" size="10"></td>
      <td><input name="familyQualification_4" type="text" size="10"></td>
      <td><input name="familyOccupation_4" type="text" size="50"></td>
      <td><input name="familyIncome_4" type="text" size="10"></td>
    </tr>
    <tr>
      <td><input name="familyName_5" type="text" size="20"></td>
      <td><input type="text" name="familyRelation_5" size="10"></td>
      <td><input name="familyQualification_5" type="text" size="10"></td>
      <td><input name="familyOccupation_5" type="text" size="50"></td>
      <td><input name="familyIncome_5" type="text" size="10"></td>
    </tr>
    <tr>
      <td><input name="familyName_6" type="text" size="20"></td>
      <td><input type="text" name="familyRelation_6" size="10"></td>
      <td><input name="familyQualification_6" type="text" size="10"></td>
      <td><input name="familyOccupation_6" type="text" size="50"></td>
      <td><input name="familyIncome_6" type="text" size="10"></td>
    </tr>
  </tbody>
</table>
    
<p>&nbsp;</p>
<table width="600" border="1">
  <tbody>
    <tr>
      <td width="224">Family Annual Income (in digits)</td>
      <td width="360"><input name="annualIncomeDigits" type="text" id="annualIncomeDigits" size="60"></td>
    </tr>
    <tr>
      <td>Family Annual Income (in words)</td>
      <td><input name="annualIncomeWords" type="text" id="annualIncomeWords" size="60"></td>
    </tr>
    <tr>
      <td>Current Address where Applicant is studying</td>
      <td><textarea name="currentAddress" cols="60" rows="4" id="currentAddress"></textarea></td>
    </tr>
    <tr>
      <td>Permanent Address</td>
      <td><textarea name="permanentAddress" cols="60" rows="4" id="permanentAddress"></textarea></td>
    </tr>
    <tr>
      <td>Mobile No.</td>
      <td><input name="contactNo" type="text" id="contactNo" size="60"></td>
    </tr>
      
    <tr>
      <td>Name of Person motivated you to join VaishnavSamiti</td>
      <td><input name="motivatorName" type="text" id="motivatorName" size="60"></td>
    </tr>
      
    <tr>
      <td>Contact Numbre of Person motivated you to join VaishnavSamiti</td>
      <td><input name="motivatorContact" type="text" id="motivatorContact" size="60"></td>
    </tr>

  </tbody>
</table>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</form></div>
 
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
