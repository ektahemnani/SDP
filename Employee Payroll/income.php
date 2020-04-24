<?php
error_reporting(0);
session_start();
//include_once 'connection.php';
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);
//$_SESSION['user']=$_POST['username'];
//$_SESSION['pwd']=$_POST['pass'];
//$a=$_SESSION['user'];
//$b=$_SESSION['pwd'];
$query= "select * from personal_details where Username='$_SESSION[username]' AND Password='$_SESSION[pass]'";
$result=mysql_query($query,$con);
$row=mysql_fetch_array($result);
$_SESSION['id']=$row['EmpId'];
$_SESSION['username']=$row['Username'];
$Id=$_SESSION['id'];
$username=$_SESSION['username'];
/*$attended= $_SESSION['attendedDays'];
    $total= $_SESSION['totalDays'];
    $absent= $total - $attended;
    $leave= $absent * 200;*/
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Profile</title>
</head>
<body>
<nav class="navbar  navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="#">Employee Management System</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="navb" class="collapse navbar-collapse ">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="Profile.php">EMPLOYEE</a></li>
			<li class="nav-item"><a class="nav-link" href="attendence.php">ATTENDENCE</a></li>
<!--			<li class="nav-item"><a class="nav-link" href="">Updates</a></li>-->
			<li class="nav-item"><a class="nav-link active " href="income.php">INCOME</a></li>
			<!--<li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Book Now</a></li> -->
<!--			<li class="nav-item"><a class="nav-link" href="chat.html">Chat</a></li>-->
        </ul>
		<ul class="navbar-nav float-right-md">
			<li class="nav-item"><a class="nav-link text-light" href="#"> <?php echo $_SESSION["username"]; ?> </div></a></li>
			<li class="nav-item"><a class="nav-link text-light" href="logout.php"> Logout</a></li>
		</ul> 
	</div>
</nav>
<br>
<form  method="post" action="income.php">
<label for="Month"><b>Month</b></label>
                      <select name="Month" value="January">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October </option>
                        <option>November</option>
                        <option>December</option>
                      </select>

                      <label for="Year"><b>Year</b></label>
                      <select name="Year" value="2020">
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                      </select>
                      <input type="Submit" value ="Submit" />

 <?php 
$month= $_POST['Month'];
$year= $_POST['Year'];
/*$stmt="SELECT * FROM Attendence WHERE Id='$id' AND Username='$username' AND Month='$month' AND Year='$year' ";
$res= mysql_query($stmt,$con);
$row=mysql_fetch_array($res);
//$basesalary= $row['Basic'];
$attendeddays= $row['AttendedDays'];
$total=$row['TotalDays'];
$leave=$total-$attended;*/

$query="select * from salary  where ID='$Id' AND  Username='$username' AND Month='$month' AND Year='$year'";
$result=mysql_query($query,$con);
if(mysql_num_rows($result)==1)
{
?>
 <br>
<table class="table table-striped table-bordered" align="center" border="1px" style="width: 600px; line-height: 40px;">
<tr>
<th colspan="10" style="align-item:center;"><center>Employee Salary Profile</center> </th>
</tr> 
<tr>
<?php
while ($rows=mysql_fetch_array($result)) {  ?>
	<tr>
         <th>Emp ID</th>
        <td> <?php echo $rows['ID']; ?> </td>
    </tr> 
    <tr>
        <th>Username</th>
        <td> <?php echo $rows['Username']; ?> </td>
    </tr>
    <tr>
        <th>Month</th>
        <td> <?php echo $rows['Month']; ?> </td>
    </tr>
    <tr>
        <th>Year</th>
        <td> <?php echo $rows['Year']; ?> </td>
    </tr>
    <tr>
        <th>Basic Salary</th>
        <td> <?php echo $rows['Basic']; ?> </td>
       <!-- <td>
        <a href="editSalary.php?edit= <?php echo $rows['ID']; ?>" class="btn btn-info" > EDIT </a> -->
        <!--<a href="addSalary.php?delete=<?php echo $rows['ID']; ?>" class="btn btn-danger" > DELETE </a> -->
    </tr>
</table>
<table class="table table-striped table-bordered" align="center" border="1px" style="width: 600px; line-height: 40px;"> 
<th colspan="2"><center>Earnings </center></th>
    <tr>   
        <th>House Rent Allowance(E)</th>
        <td> <?php echo $rows['HouseRentA']; ?> </td>
    </tr>
    <tr>   
        <th>Medical Allowance(E)</th>
        <td> <?php echo $rows['MedicalA']; ?> </td>
    </tr>
    <tr>   
        <th>Dearness Allowance(E)</th>
        <td> <?php echo $rows['DearnessA']; ?> </td>
    </tr>
</table>
<table class="table table-striped table-bordered" align="center" border="1px" style="width: 600px; line-height: 40px;">
    <tr>
        <th>Gross Salary</th>
        <td> <?php echo $rows['Gross']; ?> </td>  
    </tr>  
    </table>
<table class="table table-striped table-bordered" align="center" border="1px" style="width: 600px; line-height: 40px;"> 
<th colspan="3"> <center>Deductions</center></th> 
    <tr>   
        <th>Income Tax(D)</th>
        <td> <?php echo $rows['IncomeTax']; ?> </td>
    </tr>
    <tr>   
        <th>Professional Tax(D)</th>
        <td> <?php echo $rows['ProfessionalTax']; ?> </td>
    </tr>
    <tr>   
        <th>Vehicle Advance(D)</th>
        <td> <?php echo $rows['VehicleAdvance']; ?> </td>
    </tr>
  <!--  <tr>   
        <th>Leave(D)</th>
        <td> <?php  
         $gross= $rows['Gross'];
         $Attded= $gross-$Attdedamount;
         echo $Attded;?> </td> 
    </tr>-->
    <!--<tr>   
        <th>Total Absent Days(D)</th>
        <td><?php echo $absent; ?> </td>
    </tr>
    <tr>   
        <th>Absent Days Salary(D)</th>
        <td> <?php echo $leave; 
                $loss= $_SESSION['gross'] - $leave; ?> </td>
    </tr> -->
    </table>
    <table class="table table-striped table-bordered" align="center" border="1px" style="width: 600px; line-height: 40px;">
    <tr>
        <th>Net Salary</th>
        <td> <?php echo $rows['Net' ];
         $_SESSION['net']=$rows['Net']; ?> </td>  
    </tr>
   
</table> 
<?php
 }
}
/*else{
    echo '<script language="javascript">';
    echo 'alert("Invalid Credentials")';
    echo '</script>';
    header("location:index.html");
} */
?>
</table>
<center><button onclick="window.print()" class="btn btn-primary">Print</button></center>
</body>
</html> 