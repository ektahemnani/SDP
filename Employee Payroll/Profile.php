<?php
session_start();
//include_once 'connection.php';
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);
$a = $_POST["username"];
$b = $_POST["pass"];
$bb=base64_encode($b);
$_SESSION["username"]= $a;
$_SESSION["pass"]=$bb;
$user=$_SESSION["username"];
$pass=$_SESSION["pass"];
$query= "select EmpId,FirstName,LastName,Gender,Email,Mob,EmployeeType,Department from personal_details where Username = '$user' AND Password = '$pass'";
/*if(!$user || !$pass )
{
    echo '<script language="javascript">';
    echo 'alert("Invalid Credentials")';
    echo '</script>';
}*/

$result=mysql_query($query,$con);
if(mysql_num_rows($result)==1)
{
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
			<li class="nav-item"><a class="nav-link active" href="Profile.php">EMPLOYEE</a></li>
			<li class="nav-item"><a class="nav-link" href="attendence.php">ATTENDENCE</a></li>
<!--			<li class="nav-item"><a class="nav-link" href="">Updates</a></li>-->
			<li class="nav-item"><a class="nav-link" href="income.php">INCOME</a></li>
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
<br> <br>
<table class="table table-striped table-bordered" align="center" border="1px" style="width: 600px; line-height: 40px;">
<tr>
<th colspan="10" style="align-item:center;"><center>Employee Profile</center> </th>
</tr> 
<tr>
<?php
while ($rows=mysql_fetch_array($result)) { ?>
	<tr>
         <th>Emp ID</th>
        <td> <?php echo $rows['EmpId']; ?> </td>
    </tr>  
    <tr>     
         <th>FirstName</th>
        <td> <?php echo $rows['FirstName']; ?> </td>
    </tr>      
    <tr>
         <th>Lastname</th>
        <td> <?php echo $rows['LastName']; ?> </td>
    </tr>
    <tr>
        <th>Gender</th>
        <td> <?php echo $rows['Gender']; ?> </td>
    </tr>
    <tr>   
        <th>Email</th>
        <td> <?php echo $rows['Email']; ?> </td>
    </tr>
    <tr>
        <th>Mobile No</th>
        <td> <?php echo $rows['Mob']; ?> </td>  
    </tr>   
    <tr>
        <th>Emp Type</th>
        <td> <?php echo $rows['EmployeeType']; ?> </td>
    </tr>
    <tr>
        <th>Department</th>
        <td> <?php echo $rows['Department']; ?> </td>
	</tr>
<?php
 }
}
else{
    echo '<script language="javascript">';
    echo 'alert("Invalid Credentials")';
    echo '</script>';
    header("location:index.html");
}
?>
</table>
</body>
</html> 