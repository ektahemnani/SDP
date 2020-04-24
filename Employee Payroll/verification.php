<?php

$a=$_POST['uname'];
$b=$_POST['psw'];

if($a == "adminEkta" && $b == "EktaH")
{
   header( 'Location: AdminPage.html' ) ;
 }
else
{

	echo "<script>alert('Login Failed !')</script>";
     
}

?>
