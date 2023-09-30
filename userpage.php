
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
	<link rel="stylesheet" type="text/css" href="css/stylesua.css">
	<link rel="stylesheet" type="text/css" href="css/stylemenu.css">
	<link rel="stylesheet" type="text/css" href="css/search.css">
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
                                <li><img src="images/user.png"><a href="#">My Profile</a></li>
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
				

				<p class="description"><i class="fa fa-gamepad" style="font-size:20px;"></i> Top Rated Gamer </p>

				<p class="info">11+ <span>|</span> <i class="fa fa-bolt" style="font-size:13px;"></i> Premium User <span>|</span><i class="fa fa-circle" style="font-size:13px;color:#00FF00"></i> Online<span>|</span> Joined 22 May 2022</p>
			</div>
		</div>
	</section>

	<div class="search-box" title="Search">
      <input type="text" placeholder="Type to search..">
      <div class="search-icon">
        <i class="fas fa-search"></i>
      </div>
<div class="cancel-icon">
        <i class="fas fa-times"></i>
      </div>
<div class="search-data">
</div>
</div>
<script>
      const searchBox = document.querySelector(".search-box");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const searchInput = document.querySelector("input");
      const searchData = document.querySelector(".search-data");
      searchBtn.onclick =()=>{
        searchBox.classList.add("active");
        searchBtn.classList.add("active");
        searchInput.classList.add("active");
        cancelBtn.classList.add("active");
        searchInput.focus();
        if(searchInput.value != ""){
          var values = searchInput.value;
          searchData.classList.remove("active");
          searchData.innerHTML = "You just typed " + "<span style='font-weight: 500;'>" + values + "</span>";
        }else{
          searchData.textContent = "";
        }
      }
      cancelBtn.onclick =()=>{
        searchBox.classList.remove("active");
        searchBtn.classList.remove("active");
        searchInput.classList.remove("active");
        cancelBtn.classList.remove("active");
        searchData.classList.toggle("active");
        searchInput.value = "";
      }
    </script>



    	<section id="games-barsecond" class="gamearena">
		<div class="wrapper">
			<header class="gamearena">
				<h2><a style="color:#73e298"><?php echo $_SESSION['user_name'] ?></a>, Recently Played</h2> <i class='fa fa-history' style='font-size:24px'></i>
				<a href="#"><p class="view_more">View All Games</p></a>
			</header>

			<div class="row">
				<div class="post">
					<img src="images/Img/Multiplayer/13.jpg" alt="The Martian">
					<h3 class="title">Lego</h3>
					<p class="post_info">11+</p>
				</div>
			
				<div class="post">
					<img src="images/Img/Multiplayer/14.jpg" alt="Inside Out">
					<h3 class="title">Ninjago</h3>
					<p class="post_info">13+</p>
				</div>
			
				<div class="post">
					<img src="images/Img/Multiplayer/15.jpg" alt="Jurassic World">
					<h3 class="title">Futty Squiad</h3>
					<p class="post_info">13+</p>
				</div>
			
				<div class="post">
					<img src="images/Img/Multiplayer/16.jpg" alt="Mad Max">
					<h3 class="title">Clank Rhttechet</h3>
					<p class="post_info">12+</p>
				</div>
			
				<div class="post">
					<img src="images/Img/Multiplayer/17.jpg" alt="Star Wars">
					<h3 class="title">Jurassic World</h3>
					<p class="post_info">14+</p>
				</div>
			
				<div class="post">
					<img src="images/Img/Multiplayer/18.jpg" alt="The Avengers">
					<h3 class="title">Adventure City</h3>
					<p class="post_info">14+</p>
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