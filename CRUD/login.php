<?php
 include 'connect.php';
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $password=$_POST['password'];
     $sql="insert into `tbl_crud` (name,email,mobile,password)
     values('$name','$email','$mobile','$password')";
     $result=mysqli_query($con,$sql);
     if($result){
         echo "Insert data successfully";
     }else{
         die(mysqli_error($con));
     }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
<link href="css/style.css" rel="stylesheet" type="text/css" />
<body>
<form method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" >

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" >

    <label for="mobile"><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile" name="mobile" >

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
  
</form>

</body>
</html>