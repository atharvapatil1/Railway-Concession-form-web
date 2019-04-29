<?php

$host="localhost";
$password="";
$db="test";
$con=mysqli_connect($host,$password);
mysqli_select_db($con,"test");
if(isset($_POST['password'])){
    $password=$_POST['password'];
    $sql= "select * from adminl where passw= '".$password."'limit 1";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        echo"You have logged in successfully";
        exit();
    }
    else{
        echo "Invalid Login!";
        exit();
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin Login  </title>
    <link rel="stylesheet" type="text/css" href="style2.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1> Admin Login </h1>
            <form method="POST" action="#">
            
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
                
            </form>
        
        
        </div>
    
    </body>
</html>