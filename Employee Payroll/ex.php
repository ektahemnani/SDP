<?php

$a=$_POST['Domain'];
$b=$_POST['Domain'];

if($a == "admin" && $b == "admin")
{
   
 
    
   header( 'Location: AdminPage.html' ) ;


 }
else
{

	echo "<script>alert('Login Failed !')</script>";
     
}

?>
