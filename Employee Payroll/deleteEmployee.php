<?php
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);

    session_start();
        $id= $_GET['delete'];
        $query="select * from personal_details where EmpId ='$id'";
        $result=mysql_query($query,$con);
           while( $row= mysql_fetch_array($result))
           {
    
                $username=$row['Username'];
                
           }
           //if(isset($_POST['btnUpdate']))
           //{
            $query="DELETE FROM personal_details WHERE EmpId='$id' AND Username='$username'";
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