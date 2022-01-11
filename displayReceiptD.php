<?php
$conn=mysqli_connect("localhost","root","","inceptor_db");
if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Removing SQL Injection
$receiptNumber = mysqli_real_escape_string($conn,$_POST['rNumber']);
$sql="SELECT * FROM receipts WHERE receipt_number='$receiptNumber'";
//Execute the query in $sql above
$result=$conn->query($sql);
if ($result->num_rows > 0)// If the table courses has data
{
    while ($row=$result->fetch_assoc())
    {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Update Course</title>
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
                    <h1>Delete</h1>
                </div>
            </div>
            <hr class="bg-white">
            <br>
            <div class="heading">
                <h2 class="text-center text-white bg-danger">Receipt</h2>
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
                    <form action="deleteReceipt.php" method="post">
                        <table class="table table-striped table-responsive-sm">
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Receipt Number : </b></label>
                                </td>
                                <td>
                                    <input type="text" name="rNumber" class="form-control" required value="<?php echo $row['receipt_number']?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Receipt Date : </b></label>
                                </td>
                                <td>
                                    <input type="date" name="rDate" class="form-control" required value="<?php echo $row['receipt_date']?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>First Name : </b></label>
                                </td>
                                <td>
                                    <input type="text" name="fName" class="form-control" required value="<?php echo $row['first_name']?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Middle Name : </b></label>
                                </td>
                                <td>
                                    <input type="text" name="mName" class="form-control" required value="<?php echo $row['middle_name']?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Last Name : </b></label>
                                </td>
                                <td>
                                    <input type="text" name="lName" class="form-control" required value="<?php echo $row['last_name']?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Course : </b></label>
                                </td>
                                <td>
                                    <input type="text" name="course" class="form-control" required value="<?php echo $row['course']?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Amount Paid : </b></label>
                                </td>
                                <td>
                                    <input type="text" name="aPaid" class="form-control" required value="<?php echo $row['amount_paid']?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="2">
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                    &nbsp;&nbsp;
                                    <a href="receipt.php" class="btn btn-outline-secondary">Cancel</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>
        <?php
    }
}
mysqli_close($conn);
?>
