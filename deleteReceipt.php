<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Success</title>
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
            <h1>Delete Receipt</h1>
        </div>
    </div>
    <hr class="bg-white">
    <?php
    $conn = mysqli_connect("localhost","root","","inceptor_db");
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }
    // Remove SQL Injections
    $receiptNumber = mysqli_real_escape_string($conn,$_POST['rNumber']);

    // Create the query in $sql that will post the data in the courses table
    $sql = "delete from receipts where receipt_number = '$receiptNumber'";
    // Executing the query
    if ($conn->query($sql) == true){
        print "<p>Receipt deleted successfully</p>";
        print "<a href='receipt.php' class='btn btn-primary'>Back to Receipts</a>";
    }
    else{
        print "<p>Course not deleted.</p>";
        print "<a href='searchReceiptD.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>