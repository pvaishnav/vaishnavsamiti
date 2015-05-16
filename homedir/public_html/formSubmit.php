<?php
$dbhost = "localhost";
$dbuser = "klv5557";
$dbpass = "123welcome";
$dbname = "VaishnavSamiti";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error)
{
    echo "Failed to submit the Application. Please try again latter.";
    die("Could not connect : " . mysql_error());
}

//echo "VALUES $_POST['name'] (".getCurrentDate().", 'john@example.com')";
    
function getValues($value) {
    if(isset($_POST[$value])) {
        return $_POST[$value];
    }
        return 'null';
}

function getCurrentDate() {
    $mydate = getdate(date("U"));
    return '"'.$mydate['weekday']." ".$mydate['month']." ".$mydate['mday']." ".$mydate['year'].'"';
}


$woman = getValues('woman');
$handicap = getValues('handicap');
$bpl = getValues('bpl');
$widow = getValues('widow');
$rural = getValues('rural');
$date = getCurrentDate();

$sql = "INSERT INTO ApplicationForms ". "(name, date, dayDOB, monthDOB, yearDOB, classStudying, schoolStudying, coachingName, handicap, woman, bpl, widow, rural, class_1, rollno_1, maxMarks_1, marksObtained_1, percentage_1, 
passingYear_1, schoolName_1,
class_2, rollno_2, maxMarks_2, marksObtained_2, percentage_2 , 
passingYear_2, schoolName_2,
class_3, rollno_3, maxMarks_3, marksObtained_3, percentage_3, 
passingYear_3, schoolName_3,
class_4, rollno_4, maxMarks_4, marksObtained_4, percentage_4, 
passingYear_4, schoolName_4,
class_5, rollno_5, maxMarks_5, marksObtained_5, percentage_5, 
passingYear_5, schoolName_5,
familyIncomeDigit, familyIncomeWord, currentAddress, permanentAddress, mobileNumber, options_1, options_2) ".
"VALUES ("
    .((empty($_POST['name'])) ? '""' :'"'.$_POST['name'].'"').","
    ."$date,"
    .((empty($_POST['Birthday_day'])) ? '""' :'"'.$_POST['Birthday_day'].'"').","
    .((empty($_POST['Birthday_Month'])) ? '""' :'"'.$_POST['Birthday_Month'].'"').","
    .((empty($_POST['Birthday_Year'])) ? '""' :'"'.$_POST['Birthday_Year'].'"').","
    .((empty($_POST['classStudying'])) ? '""' :'"'.$_POST['classStudying'].'"').","
    .((empty($_POST['currentSchoolName'])) ? '""' : '"'.$_POST['currentSchoolName'].'"').","
    .((empty($_POST['coachingName'])) ? '""' : '"'.$_POST['coachingName'].'"').","
    
    ."$handicap,"
    ."$woman,"
    ."$bpl,"
    ."$widow,"
    ."$rural,"
    
    .((empty($_POST['class_1'])) ? '""' : '"'.$_POST['class_1'].'"').","
    .((empty($_POST['rollNo_1'])) ? '""' : '"'.$_POST['rollNo_1'].'"').","
    .((empty($_POST['maximumMarks_1'])) ? '""' : '"'.$_POST['maximumMarks_1'].'"').","
    .((empty($_POST['marksObtained_1'])) ? '""' : '"'.$_POST['marksObtained_1'].'"').","
    .((empty($_POST['percentage_1'])) ? '""' : '"'.$_POST['percentage_1'].'"').","
    .((empty($_POST['yearOfPassing_1'])) ? '""' : '"'.$_POST['yearOfPassing_1'].'"').","
    .((empty($_POST['schoolName_1'])) ? '""' : '"'.$_POST['schoolName_1'].'"').","
    
    .((empty($_POST['class_2'])) ? '""' : '"'.$_POST['class_2'].'"').","
    .((empty($_POST['rollNo_2'])) ? '""' : '"'.$_POST['rollNo_2'].'"').","
    .((empty($_POST['maximumMarks_2'])) ? '""' : '"'.$_POST['maximumMarks_2'].'"').","
    .((empty($_POST['marksObtained_2'])) ? '""' : '"'.$_POST['marksObtained_2'].'"').","
    .((empty($_POST['percentage_2'])) ? '""' : '"'.$_POST['percentage_2'].'"').","
    .((empty($_POST['yearOfPassing_2'])) ? '""' : '"'.$_POST['yearOfPassing_2'].'"').","
    .((empty($_POST['schoolName_2'])) ? '""' : '"'.$_POST['schoolName_2'].'"').","
    
    .((empty($_POST['class_3'])) ? '""' : '"'.$_POST['class_3'].'"').","
    .((empty($_POST['rollNo_3'])) ? '""' : '"'.$_POST['rollNo_3'].'"').","
    .((empty($_POST['maximumMarks_3'])) ? '""' : '"'.$_POST['maximumMarks_3'].'"').","
    .((empty($_POST['marksObtained_3'])) ? '""' : '"'.$_POST['marksObtained_3'].'"').","
    .((empty($_POST['percentage_3'])) ? '""' : '"'.$_POST['percentage_3'].'"').","
    .((empty($_POST['yearOfPassing_3'])) ? '""' : '"'.$_POST['yearOfPassing_3'].'"').","
    .((empty($_POST['schoolName_3'])) ? '""' : '"'.$_POST['schoolName_3'].'"').","
    
    .((empty($_POST['class_4'])) ? '""' : '"'.$_POST['class_4'].'"').","
    .((empty($_POST['rollNo_4'])) ? '""' : '"'.$_POST['rollNo_4'].'"').","
    .((empty($_POST['maximumMarks_4'])) ? '""' : '"'.$_POST['maximumMarks_4'].'"').","
    .((empty($_POST['marksObtained_4'])) ? '""' : '"'.$_POST['marksObtained_4'].'"').","
    .((empty($_POST['percentage_4'])) ? '""' : '"'.$_POST['percentage_4'].'"').","
    .((empty($_POST['yearOfPassing_4'])) ? '""' : '"'.$_POST['yearOfPassing_4'].'"').","
    .((empty($_POST['schoolName_4'])) ? '""' : '"'.$_POST['schoolName_4'].'"').","
    
    .((empty($_POST['class_5'])) ? '""' : '"'.$_POST['class_5'].'"').","
    .((empty($_POST['rollNo_5'])) ? '""' : '"'.$_POST['rollNo_5'].'"').","
    .((empty($_POST['maximumMarks_5'])) ? '""' : '"'.$_POST['maximumMarks_5'].'"').","
    .((empty($_POST['marksObtained_5'])) ? '""' : '"'.$_POST['marksObtained_5'].'"').","
    .((empty($_POST['percentage_5'])) ? '""' : '"'.$_POST['percentage_5'].'"').","
    .((empty($_POST['yearOfPassing_5'])) ? '""' : '"'.$_POST['yearOfPassing_5'].'"').","
    .((empty($_POST['schoolName_5'])) ? '""' : '"'.$_POST['schoolName_5'].'"').","
    
    .((empty($_POST['annualIncomeDigits'])) ? '""' : '"'.$_POST['annualIncomeDigits'].'"').","
    .((empty($_POST['annualIncomeWords'])) ? '""' : '"'.$_POST['annualIncomeWords'].'"').","
    .((empty($_POST['currentAddress'])) ? '""' : '"'.$_POST['currentAddress'].'"').","
    .((empty($_POST['permanentAddress'])) ? '""' : '"'.$_POST['permanentAddress'].'"').","
    .((empty($_POST['contactNo'])) ? '""' : '"'.$_POST['contactNo'].'"').","
    .((empty($_POST['options_1'])) ? '""' : '"'.$_POST['options_1'].'"').","
    .((empty($_POST['options_2'])) ? '""' : '"'.$_POST['options_2'].'"')  
    
    .")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="index.php">Go to Home</a>
