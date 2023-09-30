<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:loginuser.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kids Game Arena - feedback</title>

	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/stylesfeedback.css">
	<link rel="stylesheet" type="text/css" href="css/stylemenu.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>

</head>

<body>
	<header id="top_header" class="gamearena">

		<div class="wrapper">

			
			<a class="navbar-brand" href="#">

				<a href="index.php"><img src="images/logo.png" alt="Logo" title="Kids Game Arena" style="height:35px;"/></a>
				<div class="use">
                <div class="action">
                        <div class="profile" onclick="menu();">
                            <a href="#"></a><img src="images/useravatar.png" id = "use" width="25px" height="25px"></a>
                        </div>
                        <div class="menu">
                            
                            <h5>Hello!<br><span></h5><h4><?php echo $_SESSION['user_name'] ?></span></h4>
                            <ul>
                                <li><img src="images/home.png"><a href="index.php">Home</a></li>
                                <li><img src="images/user.png"><a href="userpage.php">My Profile</a></li>
                                <li><img src="images/game.png"><a href="userpricelist.php">Subscription</a></li>
								<li><img src="images/payment.png"><a href="userpayments.php">Payments</a></li>
								<li><img src="images/feedback.png"><a href="feedback.php">Feedback</a></li>	
								<li><img src="images/logout.png"><a href="index.html">Logout</a></li>
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
				<a href="popgames.php">Popular Games</a>
				<a href="newgames.php" >New Games</a>
				<a href="multigames.php">Multiplayer Games</a>
				<a href="contactus.php">Contact Us</a>
			</nav>
		</div>
	</header>

	<section id="banner" class="gamearena">
		
			<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Feedback</h2>
				<form method="post" action="feedbackcheck.php">
				<input type="text" name="#" class="field" placeholder="Your Name">
				<textarea name="message" placeholder="How was your experience" class="field"></textarea>
				<button type="submit" class="btn">Send</button><br>
				<br><a style="color: #27ae60;">Thanks,</a>
				<?php  


if (isset($_POST['name']) && isset($_POST['message'])) {
	include 'config.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name)) {
		header("Location: feedback.php");
	}else {

		$sql = "INSERT INTO feedback(name, message) VALUES('$name', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your feedback was sent successfully!";
		}else {
			echo "Your feedback could not be sent!";
		}
	}

}else {
	header("Location: feedback.php");
}
?>
			</form>
			</div>
		</div>
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