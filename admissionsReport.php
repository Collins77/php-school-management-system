<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Report</title>
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
            <h1>Students Report</h1>
        </div>
    </div>
    <hr class="bg-white">
    <br>
    <div class="heading">
        <h2 class="text-center text-white bg-danger">Students Report</h2>
    </div>
   <div class="table-responsive">
       <table class="table table-bordered table-striped table-responsive-sm">
           <tr>
               <th>Adm Number</th>
               <th>Adm Date</th>
               <th>First Name</th>
               <th>Middle Name</th>
               <th>Last Name</th>
               <th>Gender</th>
               <th>DOB</th>
               <th>Address</th>
               <th>NOK</th>
               <th>Relnship</th>
               <th>NOK Number</th>
               <th>Highschool</th>
               <th>From</th>
               <th>To</th>
               <th>Maths Grade</th>
               <th>English Grade</th>
               <th>Overall Grade</th>
               <th>Course</th>
               <th>Reason</th>
               <th>Discovery</th>
           </tr>
           <?php
           $conn=mysqli_connect("localhost","root","","inceptor_db");
           if (!$conn)
           {
               die("Connection Failed: ".mysqli_connect_error());
           }
           //Removing SQL Injection
           // $cCode = mysqli_real_escape_string($conn,$_POST['cCode']);
           $sql="SELECT * FROM students";
           //Execute the query in $sql above
           $result=$conn->query($sql);
           if ($result->num_rows > 0)// If the table courses has data
           {
               while ($row=$result->fetch_assoc())
               {
                   ?>
                   <tr>
                       <td><?php echo $row['admission_number']?></td>
                       <td><?php echo $row['admission_date']?></td>
                       <td><?php echo $row['first_name']?></td>
                       <td><?php echo $row['middle_name']?></td>
                       <td><?php echo $row['last_name']?></td>
                       <td><?php echo $row['gender']?></td>
                       <td><?php echo $row['DOB']?></td>
                       <td><?php echo $row['postal_address']?></td>
                       <td><?php echo $row['NOK']?></td>
                       <td><?php echo $row['relationship']?></td>
                       <td><?php echo $row['NOK_number']?></td>
                       <td><?php echo $row['highschool']?></td>
                       <td><?php echo $row['year_from']?></td>
                       <td><?php echo $row['year_to']?></td>
                       <td><?php echo $row['maths_grade']?></td>
                       <td><?php echo $row['english_grade']?></td>
                       <td><?php echo $row['overall_grade']?></td>
                       <td><?php echo $row['course']?></td>
                       <td><?php echo $row['reason']?></td>
                       <td><?php echo $row['discovery']?></td>
                   </tr>
                   <?php
               }
           }
           mysqli_close($conn);
           ?>
       </table>
   </div>
    <div class="back text-center" width="50"   >
        <a href="reports.php" class="btn btn-primary">Back</a>
    </div>
</div>
</body>
</html>