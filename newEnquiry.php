<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Enquiry</title>
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
    $enquiryID = mysqli_real_escape_string($conn,$_POST['EID']);
    $enquiryDate = mysqli_real_escape_string($conn,$_POST['eDate']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $telNumber = mysqli_real_escape_string($conn,$_POST['telNumber']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $comments = mysqli_real_escape_string($conn,$_POST['comments']);

    // Create the query in $sql that will post the data in the courses table
    $sql = "insert into enquiry(enquiry_id,enquiry_date,first_name,middle_name,last_name,telephone_number,course,comments)
values ('$enquiryID','$enquiryDate','$firstName','$middleName','$lastName','$telNumber','$course','$comments')";
    // Executing the query
    if ($conn->query($sql) == true){
        print "<p>Enquiry Submitted</p>";
        print "<a href='enquiry.php' class='btn btn-primary'>New Enquiry</a>";
    }
    else{
        print "<p>An error occured</p>";
        print "<a href='enquiry.php' class='btn btn-dark'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>