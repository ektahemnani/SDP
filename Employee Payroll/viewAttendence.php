<?php
//session_start();
//include_once 'connection.php';
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);
$query= "select * from attendence";

$result=mysql_query($query,$con);
?>

<!DOCTYPE HTML>
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
<table class="table table-bordered table-striped "align="center" border="2px" style="width: 600px; line-height: 40px;">
<tr>
<th colspan="11"> <center>EMPLOYEES ATTENDANCE </center></th>
</tr>
<tr>
<th> EMP ID </th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>DEPARTMENT</th>
<th>USERNAME</th>
<th>MONTH</th>
<th> YEAR </th>
<th>ATTENDED DAYS</th>
<th>TOTAL DAYS</th>
<th>UPDATE</th>
<th>DELET</th>
</tr>
<?php
while ($rows=mysql_fetch_assoc($result)) { ?>
	<tr>
		<td> <?php echo $rows['ID']; ?> </td>
		<td> <?php echo $rows['FirstName']; ?> </td>
		<td> <?php echo $rows['LastName']; ?> </td>
        <td> <?php echo $rows['Department']; ?> </td>
		<td> <?php echo $rows['Username']; ?> </td>
		<td> <?php echo $rows['Month']; ?> </td>
		<td> <?php echo $rows['Year']; ?> </td>
        <td> <?php echo $rows['AttendedDays']; ?> </td>
		<td> <?php echo $rows['TotalDays']; ?> </td>

		<td> <a href="editAttendence.php?editA= <?php echo $rows['ID']; ?>" class="btn btn-info" > EDIT </a> </td>
        <td><a href="deleteAttendence.php?delete=<?php echo $rows['ID']; ?>" class="btn btn-danger" > DELETE</td>
	</tr>
<?php
}
?>
</table>
</body>
</html>