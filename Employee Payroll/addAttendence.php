<?php
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);

    session_start();
    $name=$_POST['fname'];
    $surname=$_POST['lname'];
    $Dept=$_POST['dept'];
    $user=$_POST['username'];
    $month=$_POST['Month'];
    $year=$_POST['Year'];
    $attended= $_POST['attendeddays'];
    $total=$_POST['Totaldays'];
    $query= mysql_query("select * from personal_details where FirstName='$name' AND LastName='$surname' AND  Username='$user'");
    $row=mysql_fetch_array($query);
    $id= $row['EmpId'];
    $username=$row['Username'];
    if(isset($_POST['btnsubmit']))
    {
            $attPer= ($attended/$total)*100;
            echo "Total Attendence:" .$attPer;
            $stmt="INSERT INTO Attendence(ID,FirstName,LastName,Department,Username,Month,Year,AttendedDays,TotalDays,Percentage) VALUES('$id','$name','$surname','$Dept','$username','$month','$year','$attended','$total','$attPer')";
            if(!mysql_query($stmt,$con))
			{
				echo '<script language="javascript">';
				echo'alert("Failed!")';
				echo'</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo'alert("Employee Attendence Submitted!")';
				echo'</script>';
			}
			//header("refresh:1;url=index.html");
			mysql_close($con);
    }
?>
