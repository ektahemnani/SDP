<?php
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);

    session_start();
   /* $id= $_GET['edit'];
    $query="select * from salary where ID ='$id'";
    $result=mysql_query($query,$con);
       while( $row= mysql_fetch_array($result))
       {
            $name=$row['FirstName'];
            $surname= $row['LastName'];
            $dept= $row['Department'];
            $username=$row['Username'];
            $basic= $row['Basic'];
       } */
    if(isset($_POST['btnsubmit']))
    {
            $Dept=$_POST['dept'];
            $basic=$_POST['baseSalary'];
            $name=$_POST['fname'];
             $surname=$_POST['lname'];
            $Dept=$_POST['dept'];
            $user=$_POST['username'];
            $month= $_POST['Month'];
            $year= $_POST['Year'];
            $_SESSION['user']=$name;
              $_SESSION['lname']=$surname;
             $_SESSION['Dept']=$Dept;
                $a=$_SESSION['user'];
             $b=$_SESSION['lname'];
            $c=$_SESSION['Dept'];

        $query= mysql_query("select * from personal_details where FirstName='$name' AND LastName='$surname' AND  Username='$user'");
         $row=mysql_fetch_array($query);
         $id= $row['EmpId'];
        $username=$row['Username'];
            if($basic >=50000 )
            {
                $HRA= $basic * 15/100;
                $MA= $basic * 10/100;
                $DA= $basic * 15/100;
                $Itax= $basic * 10/100;
                $pTax= 200;
                $VA= $basic * 10/100;
            }
            elseif($basic >3000)
            {
                $HRA= $basic * 15/100;
                $MA= $basic * 10/100;
                $DA= $basic * 20/100;
                $Itax= $basic * 10/100;
                $pTax= 200;
                $VA= $basic * 10/100;
            }
            else{
                $HRA= $basic * 5/100;
                $MA= $basic * 10/100;
                $DA= $basic * 10/100;
                $Itax= $basic * 5/100;
                $pTax= 120;
                $VA= $basic * 5/100;
            }
            $gross= $basic + $HRA + $MA + $DA ; 
            $net=$gross - $Itax - $pTax - $VA;
            echo "Net Salary:" . $net;
            $stmt="INSERT INTO salary(ID,FirstName,LastName,Department,Username,Month,Year,Basic,HouseRentA,MedicalA,DearnessA,Gross,IncomeTax,ProfessionalTax,VehicleAdvance,Net) VALUES('$id','$name','$surname','$Dept','$username','$month','$year','$basic','$HRA','$MA','$DA','$gross','$Itax','$pTax','$VA','$net')";
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
			//header("refresh:1;url=index.html");
			mysql_close($con);
    }
?>
