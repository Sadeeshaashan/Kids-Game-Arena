<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kids Game Arena</title>

	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylesua.css">
	<link rel="stylesheet" type="text/css" href="css/stylemenu.css">
	<link rel="stylesheet" type="text/css" href="css/styleap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>

</head>

<body>
	<header id="top_header" class="gamearena">

		<div class="wrapper">

			
			<a class="navbar-brand" href="#">

				<img src="images/logoadmin.png" alt="Logo" title="Kids Game Arena" style="height:35px;"/>
				<div class="use">
                <div class="action">
                        <div class="profile" onclick="menu();">
                            <a href="#"></a><img src="images/useravataradmin.png" id = "use" width="25px" height="25px"></a>
                        </div>
                        <div class="menu">
                            
                            <h3>Hello!<br><span></h3><h2><?php echo $_SESSION['admin_name'] ?></span></h2>
                            <ul>
                                <li><img src="images/user.png"><a href="#">My Profile</a></li>
								<li><img src="images/income.png"><a href="#">Income</a></li>
								<li><img src="images/add.png"><a href="#">Add Games</a></li>
								<li><img src="images/settings.png"><a href="#">Settings</a></li>
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
				<a><i class="fa fa-circle" style="font-size:13px;color:#00FF00"></i> Online</a><a>1215+ Players</a> <a>Balance $452.12 </a>
			</nav>
		</div>
	</header>

	<section id="banner" class="gamearena">
		<div id="banner_content_wrapper">
			<div id="poster">
				<img src="images/useravataradmin.png" alt="Kart game" class="featured_image">
				
				
			</div>
			<div id="content">
				<h2 class="title"><?php echo $_SESSION['admin_name'] ?></h2>
				<i class="fa fa-check-circle" title="Verified" style="font-size:23px; color:#2bc4ff"></i>
				<i class="fa fa-user-secret" title="Admin" style="font-size:23px; color:#FFFFFF"></i>
				

				<p class="description"><i class="fa fa-gear fa-spin" style="font-size:15px; color:#FFFFFF"></i> System Administrator </p>

				<!--<p class="info">1215+ Players <span>|</span><i class="fa fa-circle" style="font-size:13px;color:#00FF00"></i> Online<span>|</span>Balance $452.12 </p>-->
			</div>
		</div>
	</section>





    <!--Admin Panel Code-->

    	<div class="row">
		   <div class="column">
			  <img src="images/adminpanle.png" width="300%;">
		   </div>

	    </div>
        
    

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