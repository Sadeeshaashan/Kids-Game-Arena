<?php
error_reporting(0);
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:adminpage.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:userpage.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
};
?>

<!DOCTYPE html>
<html>
<head>
   
	<title>Kids Game Arena | Login</title>

	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/stylemenu.css">
	<link rel="stylesheet" type="text/css" href="css/stylephp.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>

</head>

<body>
	<header id="top_header" class="gamearena">

		<div class="wrapper">

			
			<a class="navbar-brand" href="index.html">

				<img src="images/logo.png" alt="Logo" title="Kids Game Arena" style="height:35px;"/>
				<div class="use">
                <div class="action">
                        <div class="profile" onclick="menu();">
                            <a href="#"></a><img src="images/user.png" id = "use" width="25px" height="25px"></a>
                        </div>
                        <div class="menu">
                        	<h3>Welcome<br><span></h3><h2>Let's Play!</span></h2>
                            
                            <ul>
                               
								<li><img src="images/register.png"><a href="registeruser.php">Sign Up</a></li>
								 
							</ul>
                        </div>
                    </div>
                </div>
                <script>
                    function menu()
                    {
                        const toggle = document.querySelector('.menu');
                        toggle.classList.toggle('active');
                    }
                </script>
			</a> 
		
			<a href="#" class="menun"><i class="fa fa-bars"></i></a>
			<nav id="main_nav">
				<a href="popgames.html">Popular Games</a>
				<a href="newgames.html">New Games</a>
				<a href="multigames.html">Multiplayer Games</a>
				<a href="contactus.html">Contact Us</a>
			</nav>
		</div>
	</header>

	<section id="banner" class="gamearena">
		<div id="banner_content_wrapper">
		<div class="form-container">

   <form action="" method="post" >
   	<img src="images/useravatar.png" alt="Logo" title="Kids Game Arena" style="height:175px;"/>
      <h3>Login Now!</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="registeruser.php">register now</a></p>
   </form>

</div>

	</section>
		


    
	<section id="footer">

		
		<footer id="main_footer">
		<a href="#"><img src="images/logofooter.png" alt="Logo" title="Kids Game Arena" style="height:35px;"/></a>
		<p class="copyright">&copy;2022 Kids Game Arena. All Rights Reserved.</p>
		<div class="links">
			<a href="#">Terms of Service</a>
			<a href="#">Privacy Policy</a>
			
		</div>
		    <div class="social">
		    <a href="https://www.facebook.com"><img src="images/facebook.png" alt="Facebook" title="Facebook" style="height:25px;"/></a>
			<a href="https://www.instagram.com"><img src="images/instagram.png" alt="Instagram" title="Instagram" style="height:25px;"/></a>
			<a href="https://twitter.com"><img src="images/twitter.png" alt="Twitter" title="Twitter" style="height:25px;"/></a>
		</div>
		
			
	</footer>
	</section>

</body>
</html>