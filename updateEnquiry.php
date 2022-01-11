<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Success</title>
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
            <h1>Updates</h1>
        </div>
    </div>
    <hr class="bg-white">
    <br>
    <div class="heading">
        <h2 class="text-center text-white bg-danger">Enquiries</h2>
    </div>
    <?php
    $conn = mysqli_connect("localhost","root","","inceptor_db");
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }
    // Remove SQL Injections
    $EID = mysqli_real_escape_string($conn,$_POST['EID']);
    $enquiryDate = mysqli_real_escape_string($conn,$_POST['eDate']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $telNumber = mysqli_real_escape_string($conn,$_POST['telNumber']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $comments = mysqli_real_escape_string($conn,$_POST['comments']);

    // Create the query in $sql that will post the data in the courses table
    $sql = "update enquiry set enquiry_date = '$enquiryDate',first_name = '$firstName',middle_name = '$middleName',last_name = '$lastName',course = '$course',telephone_number = '$telNumber',comments = '$comments'
where enquiry_id = '$EID'";
    // Executing the query
    if ($conn->query($sql) == true){
        print "<p>Receipt details updated successfully</p>";
        print "<a href='enquiry.php' class='btn btn-primary'>Back to Enquiries</a>";
    }
    else{
        print "<p>An Error Occured</p>";
        print "<a href='searchEnquiryU.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>