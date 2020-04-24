<?php
//session_start();
//include_once 'connection.php';
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);
$query= "select EmpId,FirstName,LastName,Gender,Email,Mob,EmployeeType,Department from personal_details";

$result=mysql_query($query,$con);
?>

<!DOCTYPE HTML >
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Employees</title>
</head>
<body>
<table class="table table-bordered table-striped"align="center" border="1px" style="width: 600px; line-height: 40px;">
<tr>
<th colspan="10"> <center>EMPLOYEES </center></th>
</tr>
<tr>
<th> EMP ID </th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>MOBILE</th>
<th>EMP TYPE</th>
<th>DEPARTMENT</th>
<th> UPDATE </th>
<th> DELETE </th>
</tr>
<?php
while ($rows=mysql_fetch_assoc($result)) { ?>
	<tr>
		<td> <?php echo $rows['EmpId']; ?> </td>
		<td> <?php echo $rows['FirstName']; ?> </td>
		<td> <?php echo $rows['LastName']; ?> </td>
		<td> <?php echo $rows['Gender']; ?> </td>
		<td> <?php echo $rows['Email']; ?> </td>
		<td> <?php echo $rows['Mob']; ?> </td>
		<td> <?php echo $rows['EmployeeType']; ?> </td>
		<td> <?php echo $rows['Department']; ?> </td>

		<td> <a href="editEmployee.php?edit= <?php echo $rows['EmpId']; ?>" class="btn btn-info" > EDIT </a> </td>
        <td><a href="deleteEmployee.php?delete=<?php echo $rows['EmpId']; ?>" class="btn btn-danger" > DELETE</td>
	</tr>
<?php
}
?>
</table>
</body>
</html>