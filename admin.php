<?php
// (A) LOGIN CHECKS
require "control.php";
 
// (B) LOGIN PAGE HTML
?>
<!DOCTYPE html> 
<html> 

<head> 
  <title>Admin Page</title> 
  <link rel="stylesheet"  href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <script>
    <?php
      // JavaScript code to show popup if login fails
      if (isset($failed)) {
        echo "window.onload = function() { alert('Invalid user or password.'); }";
      }
    ?>
  </script>
</head>

<body>
<header>
			<h1><a href="homepage.html"><i class="fa-solid fa-house"></i></a></h1>
	</header>

  <div class="main"> 
    <h1>Welcome Admin</h1> 
    <h3>Enter your login credentials</h3> 
    <form method="post"> 
      <label for="first"> Username: </label> <input type="text" id="first" name="user" placeholder="Enter your Username" required> 
      <label for="password">Password: 
    </label><input type="password" id="password" name="pass" placeholder="Enter your Password" required> 
             
      <button type="submit">Submit</button> 
    </form>  
  </div> 

    </body> 

</html>
