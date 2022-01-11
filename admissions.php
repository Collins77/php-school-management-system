<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link rel="icon" href="images/logo.png">
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
            <h1>Admission</h1>
        </div>
    </div>

    <hr class="bg-white">
    <br>
    <div class="heading">
        <h2 class="text-center text-white bg-danger">Students Admission</h2>
    </div>


                <form action="newAdmission.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
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

                                <a href="logOut.php"  class="btn btn-primary btn-block">Log Out</a>
                            </div>
                            <div class="col-sm-5">
                                <table class="table table-striped table-responsive-sm">
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Admission Number : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="aNumber" class="form-control" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Admission Date : </b></label>
                                        </td>
                                        <td>
                                            <input type="date" name="aDate" class="form-control" required>
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
                                            <label for=""><b>Gender : </b></label>
                                        </td>
                                        <td>
                                            <select name="gender" id="" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Date Of Birth : </b></label>
                                        </td>
                                        <td>
                                            <input type="date" name="dob" class="form-control" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Postal Address : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="pAddress" class="form-control" required>
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
                                            <label for=""><b>Reason of choice : </b></label>
                                        </td>
                                        <td>
                                            <textarea name="reason" id="reason" cols="35" rows=2" required></textarea>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-5">
                                <table class="table table-striped table-responsive-sm">
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Next of Kin : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="nok" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Relationship : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="rShip" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Next of Kin Phone Number : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="nokNumber" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>High School attended : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="highschool" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Year From : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="yFrom" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Year To : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="yTo" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Maths Grade : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="mGrade" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>English Grade : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="eGrade" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>Overall Grade : </b></label>
                                        </td>
                                        <td>
                                            <input type="text" name="oGrade" class="form-control" required>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for=""><b>How did you know about us? : </b></label>
                                        </td>
                                        <td>
                                            <select name="discovery" id="discovery">
                                                <option value="walkin">Walk-in Enquiry</option>
                                                <option value="media">Social Media</option>
                                                <option value="student">Student</option>
                                                <option value="signboard">Sign Board</option>
                                                <option value="friend">Friend</option>
                                                <option value="tv/radio">TV/Radio</option>
                                                <option value="marketing/Sales">Marketing/Sales</option>
                                                <option value="staff">Staff</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="admit" colspan="2">
                        <button type="submit" class="btn btn-primary">Admit Student</button>
                        &nbsp
                        <a href="searchAdmissionsU.php" class="btn btn-primary">Update</a>
                        &nbsp;&nbsp;
                        <a href="searchAdmissionD.php" class="btn btn-dark">Delete</a>
                    </div>

                </form>
    <br>
</div>
<br>



</body>
</html>
