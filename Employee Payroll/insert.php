<?php
	$host='127.0.0.1';
	$username='root';
	$password='';
	$db='employee';
	$con=mysql_connect($host,$username,$password);
	if(!$con){
		die('Could not connect');
	}
	else{
		if(isset($_POST['btnsubmit']))
		{
			mysql_select_db($db,$con);
            $fname= $_POST['fname'];
            $lname= $_POST['lname'];
            $gender= $_POST['gender'];
			$email=$_POST['email'];
            $mobile=$_POST['mob'];
            $emptype= $_POST['emptype'];
            $dept=$_POST['dept'];
            $username= $_POST['username'];
			$password= $_POST['psw'];
			//$hash=md5($password)
		   // $repPwd= $_POST['psw-repeat'];
			$Pswhash = base64_encode($password);
			echo $Pswhash;   
			$stmt="INSERT INTO personal_details(FirstName,LastName,Gender,Email,Mob,EmployeeType,Department,Username,Password)VALUES('$fname','$lname','$gender','$email','$mobile','$emptype','$dept','$username','$Pswhash')";
			if(!mysql_query($stmt,$con))
			{
				echo '<script language="javascript">';
				echo'alert("Failed!")';
				echo'</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo'alert("Employee Details Submitted!")';
				echo'</script>';
			}
			header("refresh:1;url=index.html");
			mysql_close($con);
			
		/*$stmt->bind_param("ssis",$username,$email,$mobile,$subject);
		$stmt->execute(); 
		echo"Contact Details Submitted";
		$stmt->close();
		$conn->close();*/
		}
	}
?>

