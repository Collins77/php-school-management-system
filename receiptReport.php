<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry Report</title>
    <link rel="icon" href="images/inceptor.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container bg-danger">
    <div class="row">
        <div class="col-sm-3">
            <img src="images/inceptor.png" alt="Logo" class="logo" width="225" height="100">
        </div>
        <div class="col-sm-6">
            <div class="company"><h1><b><span class="text-white">Inceptor</span> Innovation Centre</b></h1></div>
        </div>
        <div class="col-sm-3 banner bg-primary text-center text-white" >
            <h1>Receipt Report</h1>
        </div>
    </div>
    <hr class="bg-white">
    <br>
    <div class="heading">
        <h2 class="text-center text-white bg-danger">Receipts Report</h2>
    </div>
    <table class="table table-bordered table-striped table-responsive-sm">
        <tr>
            <th>Receipt No</th>
            <th>Receipt Date</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>Amount Paid</th>
        </tr>
        <?php
        $conn=mysqli_connect("localhost","root","","inceptor_db");
        if (!$conn)
        {
            die("Connection Failed: ".mysqli_connect_error());
        }
        //Removing SQL Injection
        // $cCode = mysqli_real_escape_string($conn,$_POST['cCode']);
        $sql="SELECT * FROM receipts";
        //Execute the query in $sql above
        $result=$conn->query($sql);
        if ($result->num_rows > 0)// If the table courses has data
        {
            while ($row=$result->fetch_assoc())
            {
                ?>
                <tr class="text-white">
                    <td><?php echo $row['receipt_number']?></td>
                    <td><?php echo $row['receipt_date']?></td>
                    <td><?php echo $row['first_name']?></td>
                    <td><?php echo $row['middle_name']?></td>
                    <td><?php echo $row['last_name']?></td>
                    <td><?php echo $row['course']?></td>
                    <td><?php echo $row['amount_paid']?></td>
                </tr>
                <?php
            }
        }
        mysqli_close($conn);
        ?>
    </table>
    <div class="back text-center" width="50"   >
        <a href="reports.php" class="btn btn-primary">Back</a>
    </div>
</div>
</body>
</html>