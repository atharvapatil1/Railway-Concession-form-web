<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
body {
    background-image: url("train1.jpg");
	background-size: cover;
	background-position: center;
}
* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
	color: black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 10px;
    margin-bottom: 16px;
    resize: vertical;
	
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
	margin: auto;
    width: 80%;
    
    border-radius: 10px;
    background-color: transparent;
    padding: 20px;
}

/* Create two columns that float next to eachother */
.column {
    float: center;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>



<div class="container">
  <div style="text-align:center">
    <font color="white"><h1>CONTACT US</h1>
    <p><sub>Swing by for a cup of coffee, or leave us a message...</sub></p></font>
  </div>
      <form method="post" action="contact.php">
        <?php include('errors.php'); ?>
        <label for="FName"><b><font color="#F4A460">First Name</label></font></b>
        <input type="text" id="FName" name="FName" placeholder="Your name..">
        <label for="LName"><b><font color="#F4A460">Last Name</label></font></b>
        <input type="text" id="LName" name="LName" placeholder="Your last name..">
        <label for="email"><b><font color="#F4A460">Email ID</label></font></b>
        <input type="text" id="email" name="email" placeholder="Your email id..">
        <label for="subject"><b><font color="#F4A460">Subject</label></font></b>
        <input type="text" id="subject" name="subject" placeholder="Write something..">
        <input type="submit" value="Submit" onclick="alert('Your data submitted succesfully')">
      </form>
    </div>
</body>
</html>`