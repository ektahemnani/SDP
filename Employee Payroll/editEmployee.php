<?php
$con= mysql_connect("localhost","root",'');
$db=mysql_select_db("Employee",$con);

    session_start();
        $id= $_GET['edit'];
        $query="SELECT * from personal_details WHERE EmpId ='$id'";
        $result=mysql_query($query,$con);
           while( $row= mysql_fetch_array($result))
           {
                $name=$row['FirstName'];
                $surname= $row['LastName'];
                $gender=$row['Gender'];
                $Email= $row['Email'];
                $Mob=$row['Mob'];
                $empType=$row['EmployeeType'];
                $dept= $row['Department'];
                $username=$row['Username'];
           }
           if(isset($_POST['btnUpdate']))
           {
             $email=$_POST['email'];
             $mob=$_POST['mob'];
             $empType=$_POST['emptype'];
             $deptu=$_POST['dept'];
             $usernameu=$_POST['username'];
            $query="UPDATE personal_details SET  Email='$email', Mob='$mob', EmployeeType='$empType',Department='$deptu',Username='$usernameu' WHERE EmpId='$id'";
            if(!mysql_query($query,$con))
            {
                echo '<script language="javascript">';
                echo'alert("Failed!")';
                echo'</script>';
            }
            else
            {
                echo '<script language="javascript">';
                echo'alert("Employee Details Updated!")';
                echo'</script>';
             }
              mysql_close($con);
        

           }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Employee Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Signupstyle.css">
	     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       <!--<script>
         function validatepwd()
         {
           var pwd1=document.getElementById("password1");
           var pwd2=document.getElementById("password2");
           if(pwd1.value != pwd2.value)
           {
                pwd2.setCustomValidity("Passwords don't  match";)
           }
           else{
             pwd2.setCustomValidity('');
           }
         }
       </script> -->
    </head>
    <body>
    <form  method="POST"  style="border:1px solid #ccc">
                    <div class="container">
                      <h1>Update Employee Details</h1>
                      <!--<p>Please fill in this form to create an account.</p> -->
                      <hr>
                      
                      <label for="name"><b>First Name</b></label>
                      <input type="text" class="form-control" placeholder="Enter Name" name="fname" required pattern="[a-zA-Z]+" title=" Name Should contain alphabets only" autocomplete="off" value="<?php echo $name; ?>">

                      <label for="name"><b>LastName</b></label>
                      <input type="text" class="form-control" placeholder="Enter Name" name="lname" required pattern="[a-zA-Z]+" title="Last Name Should contain alphabets only" autocomplete="off" value="<?php echo $surname; ?>">
                      <br> 
                      
                      <label for="radio"><b>Gender</b></label>
                      <br>
                      <label class="radio-inline"><input type="radio"  name="gender" value="Male" required> Male </label>
                      <label class="radio-inline"><input type="radio" name="gender" value="Female"> Female </label> 
                      <br>
                      <br>
                      <label for="email" ><b>Email</b></label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required autocomplete="off" value="<?php  echo $Email?>">
                      <br>
                      <label for="mob"><b>Mobile No</b></label>
                      <input type="text" class="form-control" placeholder="Enter Mobile No" name="mob" required pattern="[0-9]{10}"  title="Mobile no Should contain *10* digits only" maxlength="10" autocomplete="off" value="<?php echo $Mob; ?>">

                      <label for="emptype"><b>Employee Type</b></label>
                      <br>
                      <label class="radio-inline"><input type="radio"  name="emptype" value="Jr. Clerk" required> Junior Clerk </label>
                      <label class="radio-inline"><input type="radio"  name="emptype" value="sr. Clerk" required> Senior Clerk </label>
                      <label class="radio-inline"><input type="radio"  name="emptype" value="Jr. Manager"> Junior Manager </label>
                      <br> <br>
                      <label for="dept"><b>Department</b></label>
                      <input type="text" class="form-control" placeholder="Enter Department" name="dept" required autocomplete="off" value="<?php echo $dept; ?>" >

                        <br>
                      <label for="username"><b>Username</b></label>
                      <input type="text" class="form-control" placeholder="Enter Username" name="username" required pattern="[a-zA-Z0-9]+" title="Username must be unique and Should contain alphabets or digits only" autocomplete="off" value="<?php echo $username; ?>">
                      
                      <!--<br>
                      <label for="Month"><b>Month</b></label>
                      <select name="Month" value="<?php echo $month;?>" class="form-control" >
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October </option>
                        <option>November</option>
                        <option>December</option>
                      </select>

                      <br>
                      <label for="Year"><b>Year</b></label>
                      <select name="Year" value="<?php echo $year;?> " class="form-control">
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                      </select>-->


                      <!--<br> 
                      <label for="attendeddays"><b>Attended Days</b></label>
                      <input type="text" class="form-control" placeholder="Enter Attended Days" name="attendeddays" required pattern="[0-9]+" title="Attended Days must contain digits only"autocomplete="off" value="<?php echo $attended; ?> " >
                  
                      <br> 
                      <label for="totaldays"><b>Total Days</b></label>
                      <input type="text" class="form-control" placeholder="Enter Total Days" name="Totaldays" required pattern="[0-9]+" title="Total Days must contain digits only"autocomplete="off" value="<?php echo $total; ?>" >
        -->
                      <!--<label for="psw"><b>Password</b></label>
                      <input type="password" class="form-control" placeholder="Enter Password" name="psw" id="password1" required maxlength="10"> -->
                  
                    <!--  <label for="psw-repeat"><b>Repeat Password</b></label>
                      <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat" id="password2" required maxlength="10" > -->
                  
                     <!--- <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                      </label> -->
                  
                      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                  
                      <div class="clearfix">
                        <!--<span><input type="reset" class="btn btn-default" value="Reset" name="btnReset"></span> -->
                        <span><input type="submit" class="btn btn-info" value="Update" name="btnUpdate"></span>
                      </div>
                    </div>
                  </form>
           
                  
    </body>
</html>