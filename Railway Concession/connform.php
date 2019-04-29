<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Concession Form</title>
 <link rel="stylesheet" type="text/css" href="constyle.css">  
</head>
<body>
  <div class="header">
    <h2>Enter details</h2>
  </div>
  
  <form method="post" action="connform.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" placeholder="student name..." name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" placeholder="email..." name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>College ID number</label>
      <input type="text" name="password_1" placeholder="class-batch-roll">
    </div>
    <div class="input-group">
      <label>Confirm college ID number</label>
      <input type="text" name="password_2" placeholder="class-batch-roll">
    </div>
    <div class="input-group">
      <label>Address</label>
      <input type="text" placeholder="address..." name="address" value="<?php echo $address; ?>">
    </div>
    <div class="input-group">
      <label>Route</label>
      <input type="text" placeholder="source-destination" name="route" value="<?php echo $route; ?>">
    </div>
    <div class="input-group">
 <!--     <label>Please mention your gender: </label> -->
      <label>male</label>
      <input type="radio" name="selected_gender" value="male" >

       <label>female</label>
      <input type="radio" name="selected_gender" value="female" >
                                       
                                
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="con_user">Submit</button>
    </div>
  </form>
</body>
</html>