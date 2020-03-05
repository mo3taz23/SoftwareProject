<html>
<head>
<link rel="stylesheet" type="text/css" href="css/addcourses.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="HTTPS://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="HTTPS://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css">

<?php
include "database.php";
if(isset($_POST['submit']))
        {
           
            $coursename=$_POST['name'];
            $courseid=$_POST['courseid'];
            $courseweeks=$_POST['weeks'];
            $coursehours=$_POST['hours'];
            $coursetype=$_POST['type'];
            $coursecost=$_POST['cost'];
            $startdate=date("Y-m-d");
            $enddate=date("Y-m-d");
          
		 
		
if(!empty($coursename)&&!empty($courseid)&&!empty($courseweeks)&&!empty($coursehours)&&!empty($coursetype)&&!empty($coursecost)&&!empty($startdate)&&!empty($enddate)){
$sql="INSERT INTO Courses (CourseName,CourseID,CourseWeeks,CourseHours,Start_Date,End_Date,CourseType,CourseCost) VALUES('$coursename','$courseid','$courseweeks','$coursehours','$startdate','$enddate','$coursetype','$coursecost');";

if( mysqli_query($mysqli,$sql)){
echo"successfully";
}
else{
echo"Error".mysqli_error($mysqli);
}
 } 
 else{
	 echo"<h3>Fill all fields</h3>";
 }
		
	
		}
?>


</head>
<body id="body">

    <form action="#" method="post">
    
    <div class="lb">
    <h1>Add Courses</h1>

         <div class="b ba">
    <label>CourseName </label><br>
    
    <input type="text" maxlength="16" name="name" id="name"  >
    <span id="availability"></span>
            <br><br>
    <label>CourseID</label><br>
    <input type="text" maxlength="16" name="courseid" id="courseid" required>
            <br><br>
    
    <label>CourseWeeks</label><br>
    <input type="text" maxlength="11" name="weeks" id="weeks" required >
            <br><br>        

    <label>CourseHours</label><br>
            
    <input type="text" name="hours" id="hours" required>
            <br><br>
    <label>CourseType</label><br>
    <input type="text" maxlength="30" name="type" id="types" required>
            <br><br>
    <label>CourseCost</label><br>
    <input type="text" maxlength="30" name="cost" id="cost" required>
            <br><br>        

    <label>StartDate</label><br>
    <input type="date" name="start" id="start" required>
        <br><br>    

    <label>EndDate</label><br>
    <input type="date" name="end" id="end" required>
           
            <br>
        </div>
    <input type="submit" value="Submit" name="submit">

    </div>
    </form>
