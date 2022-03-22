<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Students-Project</title>
    <style>
      /* Modifying the background color */
       
      .navbar-custom {
          background-color: rgb(238, 201, 38);
      }
      /* Modify brand and text color */
       
      .navbar-custom .navbar-brand,
      .navbar-custom .navbar-text {
          color: rgb(2, 12, 2);
      }
  </style>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

        <!--NAVIGATOR BAR-->

  <nav class = "navbar navbar-custom">
        <!--LOGO AND TITLE SECTION-->
        <img id = "logoimg" src="img/logoimg.png" style="width: 100%;max-width:60px">
        <strong style="font-size:40px;font-family: 'Times New Roman', Times, serif;" >Student Records</strong>
        <!--END OF LOGO AND TITLE SECTION-->

        <!--HOME PAGE HYPERLINK-->
        <a href="https://localhost/project_students/html/home.html">
            <img id="homeimg" src="img/homeimg.png" align="right" alt="Home Page" style="width:100%;max-width:40px">
         </a>
        <!--END OF HOME PAGE HYPERLINK-->  

        <!--INFORMATION HYPERLINK-->     
        <a href="https://localhost/project_students/html/information.html">
           <img id = "infoimg" src="img/infoimg.png" align="right" alt="Info Page" style="width:100%;max-width:40px">
         </a>  
        <!--END OF INFORMATION HYPERLINK-->

        <!--CONTACT HYPERLINK-->
        <a href="https://localhost/project_students/html/contact.html">
           <img id="contactimg" src="img/contactimg.png" align="right" alt="Contact Page" style="width:100%;max-width:40px">
        </a>
        <!--END OF CONTACT HYPERLINK-->


  </nav> 
     <!--THE END OF NAVIGATOR BAR-->
     <br>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
    <!-- <div class="type-dropdown">
    <label for="type" class="Type">Type</label>
    <div class="type-content">
    <select data-tax="Type" data-id="type" id="<?php //echo $type; ?>" name="type" style="width: 40%; height: 100%;">
        <option value="">choose...</option>
        <option value="Student">Student</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Admin">Admin</option>
    </select>
    </div>
  </div>-->
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>