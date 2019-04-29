<?php include('server.php') ?>
<html>
<head>
    <title>  Signin Form  </title>
    <link rel="stylesheet" type="text/css" href="style3.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
	<P> Please fill in this form to create an account.</p>
        <h1> Sign Up</h1>
		

            <form method="post" action="sign.php">
            <?php include('errors.php'); ?>

<div class="input-group">
      <label>Username</label>
      <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
    </div> 
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" placeholder="Enter Password">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2" placeholder="Enter Password">
    </div>
    <div class="input-group">
      <input type="submit" name="reg_user" value="Sign Up">
    </div>
              
            </form>
        
        
        </div>
    
    </body>
</html>