<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Admission</title>
    <link rel="icon" href="images/inceptor.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="container bg-danger">
    <div class="row">
        <div class="col-sm-3">
            <img src="images/inceptor.png" alt="Logo" class="logo" width="225" height="100">
        </div>
        <div class="col-sm-6">
            <div class="company"><h1><b><span class="text-white">Inceptor</span> Innovation Centre</b></h1></div>
        </div>
        <div class="col-sm-3 banner bg-primary text-center text-white" >
            <h1>New Entry</h1>
        </div>
    </div>
    <hr class="bg-white">
    <br>

    <?php
    $conn = mysqli_connect("localhost","root","","inceptor_db");
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }

    // Remove SQL Injections
    $admissionNumber = mysqli_real_escape_string($conn,$_POST['aNumber']);
    $admissionDate = mysqli_real_escape_string($conn,$_POST['aDate']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $DOB = mysqli_real_escape_string($conn,$_POST['dob']);
    $postalAddress = mysqli_real_escape_string($conn,$_POST['pAddress']);
    $NOK = mysqli_real_escape_string($conn,$_POST['nok']);
    $relationship = mysqli_real_escape_string($conn,$_POST['rShip']);
    $NOKnumber = mysqli_real_escape_string($conn,$_POST['nokNumber']);
    $highschool = mysqli_real_escape_string($conn,$_POST['highschool']);
    $yearFrom = mysqli_real_escape_string($conn,$_POST['yFrom']);
    $yearTo = mysqli_real_escape_string($conn,$_POST['yTo']);
    $mathsGrade = mysqli_real_escape_string($conn,$_POST['mGrade']);
    $englishGrade = mysqli_real_escape_string($conn,$_POST['eGrade']);
    $overallGrade = mysqli_real_escape_string($conn,$_POST['oGrade']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $reason = mysqli_real_escape_string($conn,$_POST['reason']);
    $discovery = mysqli_real_escape_string($conn,$_POST['discovery']);
    // Create the query in $sql that will post the data in the courses table
    $sql = "insert into students(admission_number,admission_date,first_name,middle_name,last_name,gender,DOB,postal_address,NOK,relationship,NOK_number,highschool,year_from,year_to,maths_grade,english_grade,overall_grade,course,reason,discovery)
values ('$admissionNumber','$admissionDate','$firstName','$middleName','$lastName','$gender','$DOB','$postalAddress','$NOK','$relationship','$NOKnumber','$highschool','$yearFrom','$yearTo','$mathsGrade','$englishGrade','$overallGrade','$course','$reason','$discovery')";
    // Executing the query
    if ($conn->query($sql) == true){
        print "<p>Successful Admission</p>";
        print "<a href='admissions.php' class='btn btn-primary'>New Admission</a>";
    }
    else{
        print "<p>An error occured</p>";
        print "<a href='admissions.php' class='btn btn-dark'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>