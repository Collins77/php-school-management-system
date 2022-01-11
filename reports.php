<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="images/inceptor.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
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
            <h1>Reports</h1>
        </div>
    </div>
    <hr class="bg-white">
    <div class="heading">
        <h2 class="text-center text-white bg-danger">Reports</h2>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <a href="mainDashboard.php"  class="btn btn-primary btn-block">Home</a>

            <!--End of  collapsible-->

            <a href="admissions.php" class="btn btn-primary btn-block">Student Records</a>

            <!--End of  collapsible-->

            <a href="billing.php"  class="btn btn-primary btn-block">Billing</a>

            <!--End of  collapsible-->

            <a href="receipt.php"  class="btn btn-primary btn-block">Receipt</a>

            <!--End of  collapsible-->

            <a href="enquiry.php"  class="btn btn-primary btn-block">Enquiries</a>

            <!--End of  collapsible-->
            <a href="reports.php"  class="btn btn-primary btn-block">Reports</a>

            <a href="logout.php"  class="btn btn-primary btn-block">Log Out</a>
        </div>
        <div class="col-sm-6">
            <p class="text-white">Click these to view reports : </p>
            <div>
                <a href="admissionsReport.php" class="btn btn-dark">Students Details</a>
                <a href="billingReport.php" class="btn btn-dark">Billing</a>
                <a href="receiptReport.php" class="btn btn-dark">Receipts</a>
                <a href="enquiryReport.php" class="btn btn-dark">Enquiries</a>
            </div>

        </div>
    </div>
    <br>
</div>
</body>
</html>