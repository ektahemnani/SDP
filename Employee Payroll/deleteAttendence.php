<?php
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);

    session_start();
        $id= $_GET['delete'];
        $query="select * from attendence where ID ='$id'";
        $result=mysql_query($query,$con);
           while( $row= mysql_fetch_array($result))
           {
                $name=$row['FirstName'];
                $surname= $row['LastName'];
                $dept= $row['Department'];
                $username=$row['Username'];
                $month=$row['Month'];
                $year=$row['Year'];
                $attended= $row['AttendedDays'];
                $total=$row['TotalDays'];
           }
           //if(isset($_POST['btnUpdate']))
           //{
            $query="DELETE FROM Attendence WHERE ID='$id' AND Month='$month' AND Year='$year'";
            if(!mysql_query($query,$con))
            {
                echo '<script language="javascript">';
                echo'alert("Failed!")';
                echo'</script>';
            }
            else
            {
                echo '<script language="javascript">';
                echo'alert("Employee Record Deleted!")';
                echo'</script>';
             }
              mysql_close($con);
        

           //}
?>