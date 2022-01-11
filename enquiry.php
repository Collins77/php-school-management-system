<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry</title>
    <link rel="icon" href="images/inceptor.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body class="bg-white">
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
            <h1>Enquiry</h1>
        </div>
    </div>
    <hr class="bg-white">
    <br>
    <div class="heading">
        <h2 class="text-center text-white bg-danger">Enquiries</h2>
    </div>
    <div class="container">
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
                <form action="newEnquiry.php" method="post">
                    <table class="table table-striped table-responsive-sm">
                        <tr>
                            <td class="text-right">
                                <label for=""><b>Enquiry ID : </b></label>
                            </td>
                            <td>
                                <input type="text" name="EID" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <label for=""><b>Enquiry Date : </b></label>
                            </td>
                            <td>
                                <input type="date" name="eDate" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <label for=""><b>First Name : </b></label>
                            </td>
                            <td>
                                <input type="text" name="fName" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <label for=""><b>Middle Name : </b></label>
                            </td>
                            <td>
                                <input type="text" name="mName" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <label for=""><b>Last Name : </b></label>
                            </td>
                            <td>
                                <input type="text" name="lName" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <label for=""><b>Telephone Number : </b></label>
                            </td>
                            <td>
                                <input type="text" name="telNumber" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <label for=""><b>Course : </b></label>
                            </td>
                            <td>
                                <input type="text" name="course" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <label for=""><b>Comments : </b></label>
                            </td>
                            <td>
                                <textarea name="comments" id="comments" cols="35" rows=2" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="2">
                                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
                                &nbsp;&nbsp;
                                <a href="searchEnquiryU.php" class="btn btn-primary">Update</a>
                                &nbsp;&nbsp;
                                <a href="searchEnquiryD.php" class="btn btn-dark">Delete</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
</body>
</html>