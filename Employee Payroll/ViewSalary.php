<?php
//session_start();
//include_once 'connection.php';
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);
$query= "select * from salary";

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
<table class="table table-bordered table-striped "align="center" border="2px" style="width: 600px; line-height: 40px;">
<tr>
<th colspan="17"> <center>EMPLOYEES SALARY </center></th>
</tr>
<tr>
<th> EMP ID </th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>DEPARTMENT</th>
<th>USERNAME</th>
<th>MONTH</th>
<th> YEAR </th>
<th>BASIC SALARY</th>
<th>HOUSE RENT ALLOWANCE(E)</th>
<th>MEDICAL ALLOWANCE(E)</th>
<th>DEARNESS ALLOWANCE(E)</th>
<th> GROSS SALARY </th>
<th>INCOME TAX(D)</th>
<th>PROFESSIONAL TAX(D)</th>
<th>VEHICLE ADVACE(D)</th>
<th> NET SALARY </th>
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
        <td> <?php echo $rows['Basic']; ?> </td>
		<td> <?php echo $rows['HouseRentA']; ?> </td>
		<td> <?php echo $rows['MedicalA']; ?> </td>
		<td> <?php echo $rows['DearnessA']; ?> </td>
		<td> <?php echo $rows['Gross']; ?> </td>
		<td> <?php echo $rows['IncomeTax']; ?> </td>
		<td> <?php echo $rows['ProfessionalTax']; ?> </td>
		<td> <?php echo $rows['VehicleAdvance']; ?> </td>
        <td> <?php echo $rows['Net']; ?> </td>
		<td> <a href="editSalary.php?edit= <?php echo $rows['ID']; ?>" class="btn btn-info" > EDIT </a> </td>
        <!--<td><a href="addSalary.php?delete=<?php echo $rows['ID']; ?>" class="btn btn-danger" > DELETE</td>-->
	</tr>
<?php
}
?>
</table>
</body>
</html>