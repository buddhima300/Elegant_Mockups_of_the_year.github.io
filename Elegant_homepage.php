<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>homepage</title>
	<link rel="stylesheet" href="homestyle.css">
	<link rel="stylesheet" href="mainstyle.css">
	<link rel="stylesheet" href="footerstyle.css">
	<link rel="stylesheet" href="popup_styling.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	
	
</head>
<body>
<!-- this is for navigation pane of the page -->
	
	<header>
		<section>
			<div class="menubar">
				<img src="images/elegant logo.png" alt="logo" class="main-logo">
				<ul>
					<li class="active"><i class="fa fa-home"></i><a href="#">HOME</a></li>
					<li><i class="fa fa-search"></i><a href="#">SEARCH</a>
						<div class="submenu-1">
							<div class="search">
								<form class="search-bar">
									<input type="text" placeholder="what service are you looking for today?" id="searching" onkeyup="search()">
									<button onclick="search()"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						
					</li>
					<li><i class="fa fa-list"></i><a href="#">CATEGORIES</a>
						<div class="submenu-1">
							<ul>
								<li><img src="images/cards/f1.jpg" alt=""><a href="#logos1">logo design</a></li>
								<li><img src="images/logo/logo 25 3D.jpg" alt=""><a href="#flyer1">flyer design</a></li>
								<li><img src="images/media/s1.jpg" alt=""><a href="#social1"> social-media post</a></li>
								<li><img src="images/business/bcard1.jpg" alt=""><a href="#business">business-card</a></li>
								<li><img src="images/app/a1.jpg" alt=""><a href="#">App design</a></li>
								<li><img src="images/resume/r1.jpg" alt=""><a href="#">resume design</a></li>
								<li><img src="images/shirts/st4.jpg" alt=""><a href="#shirts1">T-shirt design</a></li>
								<li><img src="images/other/p1.jpg" alt=""><a href="#home">house plans</a></li>
								
							</ul>
						</div>
					
					</li>

					<li><i class="fa fa-download"></i><a id="template" href="temp_reg.php">TEMPLATES</a></li>
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
											<form action="course_reg.php" onsubmit="return(validate())" method="POST" name="myform" class="course-signup">
												<label for="name">Name</label>
												<input type="text" name="cname" id="name" placeholder="Enter your name">

												<label for="country-name">country</label>
												<input type="text" name="ccountry" id="country" placeholder="Enter your country">

												<label for="email-name">email</label>
												<input type="email" name="cemail" id="email" placeholder="Enter your email-address">

												<label for="password-name">password</label>
												<input type="password" name="cpassword" id="password" placeholder="Enter a password">

												<button type="submit">submit
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
												<input type="email" name="logemail" id="logemail" placeholder="Enter your email-address">
												<label for="password">password</label>
												<input type="password" name="logpassword" id="logpassword" placeholder="Enter a password" autocomplete="current-password">

												<button type="submit" onclick="logvalidate()" id="l-submit">submit
												</button>
												
											</form>
										</div>

										
										
									</div>
								
								</li>
								<li><a href="courses.php">BROWSE COURSES</a></li>
								<!-- courses login page close -->
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
		</div>
		<!-- breadcrumb navigation close -->	
		


	</header>
<!-- this is exit of navigation pane of the page -->





	<!-- dominant content of the page -->
	<main>
		<div class="caption">
			<div class="introbox">
				<h2>Hi.!<br> <span>Are you looking for something unique and professional</span> </h2>
				<div>
					<a href="signup.php"><input type="button" value="Sign-up"></a>
					<a href="signin.php"><input type="button" value="Sign-in"></a>
				</div>
				
			</div>
			<div class="introbox2">
				<h2>Hi! I am buddhima, an experienced graphic designer. I have 4+ years of experience in delivering best quality works for Websites and marketing in Adobe illustrator, and Photoshop. My design process is simple but research-based. I do consider UX while designing any website Because that's what makes your site usable for your audience. </h2>
			</div>
			
				
		</div>
		<div class="card-container" id="card_container">

			<!-- flyer designs samples content -->
			<h2 id="flyer1">FLYER DESIGNS</h2>
			<div class="row">
				
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/cards/f1.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>flyer designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/cards/f2.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>flyer designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/cards/f3.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>flyer designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/cards/f4.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>flyer designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/cards/f5.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>flyer designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
			</div>

<!-- social media post designs content -->

		<h2 id="social1">SOCIAL MEDIA-POST DESIGNS</h2>
		
			<div class="row">
				
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/media/s1.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>social media designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/media/s7.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>social media designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/media/s3.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>social media designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/media/s4.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>social media designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/media/s5.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>social media designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/media/s6.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>social media designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					
			</div>
			
<!-- LOGO DESIGN CONTENT -->

		<h2 id="logos1">LOGO DESIGNS</h2>
			<div class="row">
				
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/logo/divine logo.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>logo designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/logo/E boX review 14.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>logo designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/logo/ECOSTA logo.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>logo designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/logo/logo 25 3D.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>logo designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					
					
			</div>
			<!-- T-shirt designing content -->
		<h2 id="shirts1">T-SHIRT DESIGNS</h2>
			<div class="row">
				
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/shirts/st1.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>T-shirt designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/shirts/st2.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>T-shirt designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/shirts/st3.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>T-shirt designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/shirts/st4.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>T-shirt designs</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					
					
			</div>
		<h2 id="business">BUSINESS-CARDS</h2>
			<div class="row">
				
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/business/bcard1.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>Business-card</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/business/bcard2.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>Business-card</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/business/bcard3.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>Business-card</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/business/bcard4.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>Business-card</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<img src="images/business/bcard5.jpg" alt="card image">
							</div>	
							<div class="content">
								<h3>Business-card</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div>
					</div>
					
					
					
			</div>
		
			<h2 id="home">HOUSE PLANS DESIGN</h2>
			<div class="row">
				
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<!-- <img src="images/business/bcard1.jpg" alt="card image"> -->
								<video autoplay loop muted>
									<source src="images/home/home1.mp4" type="video/mp4">
								</video>
							</div>	
							<div class="content">
								<h3>HOUSE PLAN</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div> 	
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<!-- <img src="images/business/bcard1.jpg" alt="card image"> -->
								<video autoplay loop muted>
									<source src="images/home/home2.mp4" type="video/mp4">
								</video>
							</div>	
							<div class="content">
								<h3>HOUSE PLAN</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div> 	
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<!-- <img src="images/business/bcard1.jpg" alt="card image"> -->
								<video autoplay loop muted>
									<source src="images/home/home3.mp4" type="video/mp4">
								</video>
							</div>	
							<div class="content">
								<h3>HOUSE PLAN</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div> 	
					</div>
					<div class="cards">
						<div class="card-bg">
							
							<div class="card-img">
								<!-- <img src="images/business/bcard1.jpg" alt="card image"> -->
								<video autoplay loop muted>
									<source src="images/home/home4.mp4" type="video/mp4">
								</video>
							</div>	
							<div class="content">
								<h3>HOUSE PLAN</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, incidunt!</p>
							</div>
							<div class="textarea">
								<i class="fa fa-bars"></i>
								<i class="fa fa-heart"></i>
								<i class="fa fa-share-alt"></i>
							</div>
						</div> 	
					</div>
					
					
					
					
			</div>


		</div>
		
		
			
		<hr>
	</main>

	<video autoplay loop muted>
        <source src="images/logoreveal2.mp4" type="video/mp4">
    </video>



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
						<li><a href="blog.php">blog</a></li>
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


	<script src="templates.js"></script>
	<script src="popup_script.js"></script>
	<script src="home.js"></script>


</body>

</html>