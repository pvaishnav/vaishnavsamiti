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
$others = getValues('others');
$date = getCurrentDate();

$sql = "INSERT INTO ApplicationForms ". "(name, date, dayDOB, monthDOB, yearDOB, classStudying, schoolStudying, coachingName, schoolAddress, gautra, handicap, woman, bpl, widow, rural, others, 

class_1, rollno_1, maxMarks_1, marksObtained_1, percentage_1, passingYear_1, schoolName_1,

class_2, rollno_2, maxMarks_2, marksObtained_2, percentage_2 , passingYear_2, schoolName_2,

class_3, rollno_3, maxMarks_3, marksObtained_3, percentage_3, passingYear_3, schoolName_3,

class_4, rollno_4, maxMarks_4, marksObtained_4, percentage_4, passingYear_4, schoolName_4,

class_5, rollno_5, maxMarks_5, marksObtained_5, percentage_5, passingYear_5, schoolName_5,

familyName_1, familyRelation_1, familyQualification_1, familyOccupation_1, familyIncome_1,

familyName_2, familyRelation_2, familyQualification_2, familyOccupation_2, familyIncome_2,

familyName_3, familyRelation_3, familyQualification_3, familyOccupation_3, familyIncome_3,

familyName_4, familyRelation_4, familyQualification_4, familyOccupation_4, familyIncome_4,

familyName_5, familyRelation_5, familyQualification_5, familyOccupation_5, familyIncome_5,

familyName_6, familyRelation_6, familyQualification_6, familyOccupation_6, familyIncome_6,

familyIncomeDigit, familyIncomeWord, currentAddress, permanentAddress, mobileNumber, motivatorName, motivatorContact) ".
"VALUES ("
    .((empty($_POST['name'])) ? '""' :'"'.$_POST['name'].'"').","
    ."$date,"
    .((empty($_POST['Birthday_day'])) ? '""' :'"'.$_POST['Birthday_day'].'"').","
    .((empty($_POST['Birthday_Month'])) ? '""' :'"'.$_POST['Birthday_Month'].'"').","
    .((empty($_POST['Birthday_Year'])) ? '""' :'"'.$_POST['Birthday_Year'].'"').","
    .((empty($_POST['classStudying'])) ? '""' :'"'.$_POST['classStudying'].'"').","
    .((empty($_POST['currentSchoolName'])) ? '""' : '"'.$_POST['currentSchoolName'].'"').","
    .((empty($_POST['coachingName'])) ? '""' : '"'.$_POST['coachingName'].'"').","
    .((empty($_POST['schoolAddress'])) ? '""' : '"'.$_POST['schoolAddress'].'"').","
    .((empty($_POST['gautra'])) ? '""' : '"'.$_POST['gautra'].'"').","    
    ."$handicap,"
    ."$woman,"
    ."$bpl,"
    ."$widow,"
    ."$rural,"
    ."$others,"
    
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
    
    .((empty($_POST['familyName_1'])) ? '""' : '"'.$_POST['familyName_1'].'"').","
    .((empty($_POST['familyRelation_1'])) ? '""' : '"'.$_POST['familyRelation_1'].'"').","
    .((empty($_POST['familyQualification_1'])) ? '""' : '"'.$_POST['familyQualification_1'].'"').","
    .((empty($_POST['familyOccupation_1'])) ? '""' : '"'.$_POST['familyOccupation_1'].'"').","
    .((empty($_POST['familyIncome_1'])) ? '""' : '"'.$_POST['familyIncome_1'].'"').","
    
    .((empty($_POST['familyName_2'])) ? '""' : '"'.$_POST['familyName_2'].'"').","
    .((empty($_POST['familyRelation_2'])) ? '""' : '"'.$_POST['familyRelation_2'].'"').","
    .((empty($_POST['familyQualification_2'])) ? '""' : '"'.$_POST['familyQualification_2'].'"').","
    .((empty($_POST['familyOccupation_2'])) ? '""' : '"'.$_POST['familyOccupation_2'].'"').","
    .((empty($_POST['familyIncome_2'])) ? '""' : '"'.$_POST['familyIncome_2'].'"').","
    
    .((empty($_POST['familyName_3'])) ? '""' : '"'.$_POST['familyName_3'].'"').","
    .((empty($_POST['familyRelation_3'])) ? '""' : '"'.$_POST['familyRelation_3'].'"').","
    .((empty($_POST['familyQualification_3'])) ? '""' : '"'.$_POST['familyQualification_3'].'"').","
    .((empty($_POST['familyOccupation_3'])) ? '""' : '"'.$_POST['familyOccupation_3'].'"').","
    .((empty($_POST['familyIncome_3'])) ? '""' : '"'.$_POST['familyIncome_3'].'"').","
    
    .((empty($_POST['familyName_4'])) ? '""' : '"'.$_POST['familyName_4'].'"').","
    .((empty($_POST['familyRelation_4'])) ? '""' : '"'.$_POST['familyRelation_4'].'"').","
    .((empty($_POST['familyQualification_4'])) ? '""' : '"'.$_POST['familyQualification_4'].'"').","
    .((empty($_POST['familyOccupation_4'])) ? '""' : '"'.$_POST['familyOccupation_4'].'"').","
    .((empty($_POST['familyIncome_4'])) ? '""' : '"'.$_POST['familyIncome_4'].'"').","
    
    .((empty($_POST['familyName_5'])) ? '""' : '"'.$_POST['familyName_5'].'"').","
    .((empty($_POST['familyRelation_5'])) ? '""' : '"'.$_POST['familyRelation_5'].'"').","
    .((empty($_POST['familyQualification_5'])) ? '""' : '"'.$_POST['familyQualification_5'].'"').","
    .((empty($_POST['familyOccupation_5'])) ? '""' : '"'.$_POST['familyOccupation_5'].'"').","
    .((empty($_POST['familyIncome_5'])) ? '""' : '"'.$_POST['familyIncome_5'].'"').","
    
    .((empty($_POST['familyName_6'])) ? '""' : '"'.$_POST['familyName_6'].'"').","
    .((empty($_POST['familyRelation_6'])) ? '""' : '"'.$_POST['familyRelation_6'].'"').","
    .((empty($_POST['familyQualification_6'])) ? '""' : '"'.$_POST['familyQualification_6'].'"').","
    .((empty($_POST['familyOccupation_6'])) ? '""' : '"'.$_POST['familyOccupation_6'].'"').","
    .((empty($_POST['familyIncome_6'])) ? '""' : '"'.$_POST['familyIncome_6'].'"').","
    
    
    .((empty($_POST['annualIncomeDigits'])) ? '""' : '"'.$_POST['annualIncomeDigits'].'"').","
    .((empty($_POST['annualIncomeWords'])) ? '""' : '"'.$_POST['annualIncomeWords'].'"').","
    .((empty($_POST['currentAddress'])) ? '""' : '"'.$_POST['currentAddress'].'"').","
    .((empty($_POST['permanentAddress'])) ? '""' : '"'.$_POST['permanentAddress'].'"').","
    .((empty($_POST['contactNo'])) ? '""' : '"'.$_POST['contactNo'].'"').","
    .((empty($_POST['motivatorName'])) ? '""' : '"'.$_POST['motivatorName'].'"').","
    .((empty($_POST['motivatorContact'])) ? '""' : '"'.$_POST['motivatorContact'].'"')  
    
    .")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="index.php">Go to Home</a>
