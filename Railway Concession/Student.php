<?php include('server.php'); ?>
<html>
<head>
    <title>  Login Form  </title>
    <link rel="stylesheet" type="text/css" href="studentstyle.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1> Student Login </h1>

<form method="post" action="Student.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter Username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password">
    </div>
    <div class="input-group">
        <input type="submit" name="login_user" value="Login">
    </div>
  </form>
        
        </div>
    
    </body>
</html>