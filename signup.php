<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="footerstyle.css">
	<link rel="stylesheet" href="mainstyle.css">
	<link rel="stylesheet" href="popup_styling.css">
    <link rel="stylesheet" href="signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<script src="signup.js"></script>

</head>
<body>
    <!-- this is for navigation pane of the page -->
	
	<header>
		<section>
			<div class="menubar">
				<img src="images/elegant logo.png" alt="logo" class="main-logo" id="homelogo">
				<ul>
					<li class="active"><i class="fa fa-home"></i><a href="Elegant_homepage.php">HOME</a></li>
					<li><i class="fa fa-search"></i><a href="#">SEARCH</a>
						<div class="submenu-1">
							<div class="search">
								<form action="default.html/search" method="get" class="search-bar">
									<input type="text" placeholder="what service are you looking for today?" name="searching">
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						
					</li>
					<li><i class="fa fa-list"></i><a href="#">CATEGORIES</a>
						<div class="submenu-1">
							<ul>
								<li><img src="images/cards/f1.jpg" alt=""><a href="Elegant_homepage.php#logos1">logo design</a></li>
								<li><img src="images/logo/logo 25 3D.jpg" alt=""><a href="Elegant_homepage.php#flyer1">flyer design</a></li>
								<li><img src="images/media/s1.jpg" alt=""><a href="Elegant_homepage.php#social1"> social-media post</a></li>
								<li><img src="images/business/bcard1.jpg" alt=""><a href="Elegant_homepage.php#business">business-card</a></li>
								<li><img src="images/app/a1.jpg" alt=""><a href="#">App design</a></li>
								<li><img src="images/resume/r1.jpg" alt=""><a href="#">resume design</a></li>
								<li><img src="images/shirts/st4.jpg" alt=""><a href="Elegant_homepage.php#shirts1">T-shirt design</a></li>
								<li><img src="images/other/p1.jpg" alt=""><a href="Elegant_homepage.php#home">house plans</a></li>
								
							</ul>
						</div>
					
					</li>

					<li><i class="fa fa-download"></i><a href="temp_reg.php">TEMPLATES</a></li>
					<li><i class="fa fa-pencil"></i><a href="#">COURSES</a>
						<div class="submenu-1">
							<ul>
								<!-- opening a popup window -->
								<li><a href="#" onclick="openPopup()" class="reg">REGISTER</a>
									<div id="regPopup" class="popup">
										<div class="popup-head">
											<i class ="fa fa-user-circle"></i>
											<i class ="fa fa-window-close" onclick="closePopup()"></i>
											<h2>registering for the courses</h2>
										</div>

										<div class="popup-main">
											<p>fill this form to enroll for the courses.</p>
											<form action="#" name="myform" class="course-signup">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" placeholder="Enter your name">
												<label for="country-name">country</label>
												<input type="text" name="country" id="country" placeholder="Enter your country">
												<label for="email-name">email</label>
												<input type="email" name="email" id="email" placeholder="Enter your email-address">
												<label for="password-name">password</label>
												<input type="password" name="password" id="password" placeholder="Enter a password">

												<button type="submit" onclick="validate()">submit
												</button>

											</form>
										</div>

										
										
									</div>
								
								</li>
								<!-- closing the popup window -->
								

								<!-- courses login page start -->
								<li><a href="#" onclick="openPopup2()">LOGIN</a>
									<div id="login-popup" class="popup">
										<div class="popup-head">
											<i class ="fa fa-user-circle"></i>
											<i class ="fa fa-window-close" onclick="closePopup2()"></i>
											<h2>login for the courses</h2>
										</div>

										<div class="popup-main">
											<form action="#" name="myform2" class="course-signup">
												<label for="name">email</label>
												<input type="email" name="email" id="logemail" placeholder="Enter your email-address">
												<label for="password">password</label>
												<input type="password" name="password" id="logpassword" placeholder="Enter a password" autocomplete="current-password">

												<button type="submit" onclick="logvalidate()" id="l-submit">submit
												</button>
												
											</form>
										</div>

										
										
									</div>
								
								</li>
								<!-- courses login page close -->
								<li><a href="courses.php">BROWSE COURSES</a></li>
							</ul>
						</div>
					
					</li>

					<li><i class="fa fa-user-circle"></i><a href="#">PROFILE</a>
						<div class="submenu-1">
							<ul>
								<li><a href="signup.php">SIGN-UP</a></li>
								<li><a href="signin.php">SIGN-IN</a></li>
								<li><a href="careers.php">CAREERS</a></li>
								<li><a href="selling.php">BECOME A SELLER</a></li>
								<li><a href="blog.php">BLOG</a></li>
								<li><a href="users.php">ELEGANT USERS</a></li>
								
							</ul>
						</div>
					</li>
					
				</ul>
				
			</div>
		</section>
		<!-- breadcrumb navigation start -->
		<div class="breadcrumb">
			<a href="Elegant_homepage.php">Home > </a>
			<a href="signup.php">Signup > </a>
		  </div>
		<!-- breadcrumb navigation close -->	
	</header>
<!-- this is exit of navigation pane of the page -->

<!-- open-content of the page -->
<main>
	<div class="bg">
		<div class="signup-container">
			<div class="img-card">
				<img src="images/mockups.jpg" alt="banner">
			</div>
			<div class="form-card">
				<form action="register.php" method="POST" name="regform" onsubmit="return(signup_validate())" class="reg-form">
					<label>USERNAME</label>
					<input type="text" name="username" id="signupusername" placeholder="username">

					<label for="username">EMAIL</label>
					<input type="email" name="email" id="signupemail" placeholder="email">

					<label for="username">PASSWORD</label>
					<input type="password" name="password" id="signuppassword" placeholder="Password">

					<label for="username">REPEAT PASSWORD</label>
					<input type="password" name="rpassword" id="signuprepeat" placeholder="Repeat password" >

					<button>GET STARTED</button>
					<a href="signin.php">i am already a member</a>

				</form>
			</div>
		</div>
	</div>

	<div class="work-banner">
		<h2 id="mainh2">How it works</h2>
		<div class="tags">
			<div class="tag1">
				<i class="fa fa-download"></i>
				<h2>1.DOWNLOAD TEMPLATES</h2>
				<p>Sign up for free, and download free and pro templates </p>
			</div>
			<div class="tag2">
				<i class="fa fa-graduation-cap"></i>
				<h2>2.ENROLL FOR COURSES</h2>
				<p>Sign up for free, and enroll free for learn graphics </p>
			</div>
			<div class="tag3">
				<i class="fa fa-trophy"></i>
				<h2>3.WORK AS FREELANCER</h2>
				<p>Sign up for free, set up your Gig, and offer your work to our local audience </p>
			</div>
			
		</div>
	</div>
	
</main>
<!-- close-content of the page -->





    	<!-- footer section -->
	<footer class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="footer-col">
					<h4>categories</h4>
					<ul>
						<li><a href="Elegant_homepage.php#flyer1">flyer design</a></li>
						<li><a href="Elegant_homepage.php#logos1">logo design</a></li>
						<li><a href="Elegant_homepage.php#shirts1">shirt design</a></li>
						<li><a href="Elegant_homepage.php#social1">social-media post design</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>about us</h4>
					<ul>
						<li><a href="careers.php">careers</a></li>
						<li><a href="">partnerships</a></li>
						<li><a href="">terms of services</a></li>
						<li><a href="">privacy policy</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>support</h4>
					<ul>
						<li><a href="">Help & support</a></li>
						<li><a href="">trust & safety</a></li>
						<li><a href="selling.php">selling on elegant</a></li>
						<li><a href="">contact-us</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>community</h4>
					<ul>
						<li><a href="blog.php">blogs</a></li>
						<li><a href="users.php">Elegant users</a></li>
						<li><a href="">invite a friend</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>social</h4>
					<ul>
						<i class="fab fa-facebook"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-whatsapp"></i>
					</ul>
				</div>
			</div>
			<div class="footer-logo">
				<img src="images/elegant logo.jpg" alt="footer-logo">
			</div>
		</div>
		
	</footer>
	<!-- footer section closed -->

</body>

	<script src="popup_script.js"></script>

</html>