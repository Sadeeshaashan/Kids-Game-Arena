
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
	<title>Kids Game Arena</title>

	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/stylesua.css">
	<link rel="stylesheet" type="text/css" href="css/stylemenu.css">
	<link rel="stylesheet" type="text/css" href="css/stylepayment.css">
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
                            
                            <h3>Hello!<br><span></h3><h2><?php echo $_SESSION['user_name'] ?></span></h2>
                            <ul>
                            	<li><img src="images/home.png"><a href="index.php">Home</a></li>
                                <li><img src="images/user.png"><a href="userpage.php">My Profile</a></li>
                                <li><img src="images/game.png"><a href="userpricelist.php">Subscription</a></li>
								<li><img src="images/payment.png"><a href="#">Payments</a></li>
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
				<a href="newgames.php">New Games</a>
				<a href="multigames.php">Multiplayer Games</a>
				<a href="contactus.php">Contact Us</a>
			</nav>
		</div>
	</header>

	<section id="banner" class="gamearena">
		<div id="banner_content_wrapper">
			<div id="poster">
				<img src="images/useravatar.png" alt="Kart game" class="featured_image">
				
				
			</div>
			<div id="content">
				<h2 class="title"><?php echo $_SESSION['user_name'] ?></h2>
				<i class="fa fa-check-circle" title="Verified" style="font-size:23px; color:#2bc4ff"></i>
				

				<p class="description"> Activation Date: May 21st Next Billing Date: Aug 21st </p>

				<p class="info">11+ <span>|</span> <i class="fa fa-bolt" style="font-size:13px;"></i> Premium User <span>|</span><i class="fa fa-circle" style="font-size:13px;color:#00FF00"></i> Online<span>|</span> Joined 22 May 2022</p>
			</div>
		</div>
	</section>



    <section id="games-barfirst" class="gamearena">
		
		 <div class="container">

    <form action="userpage.php">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="malmi fernando">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="matara">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="sri lanka">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/cardimg.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. kimuthu kisal">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="+94 71 123 5678">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

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