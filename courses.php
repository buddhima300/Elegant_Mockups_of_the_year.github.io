<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses page</title>
    <link rel="stylesheet" href="homestyle.css">
	<link rel="stylesheet" href="mainstyle.css">
	<link rel="stylesheet" href="footerstyle.css">
	<link rel="stylesheet" href="popup_styling.css">
	<link rel="stylesheet" href="courses.css">
	<script src="popup_script.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <!-- this is for navigation pane of the page -->
	
	<header>
		<section>
			<div class="menubar">
				<img src="images/elegant logo.png" alt="logo" class="main-logo">
				<ul>
					<li><i class="fa fa-home"></i><a href="Elegant_homepage.php">HOME</a></li>
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
					<li class="active"><i class="fa fa-pencil"></i><a href="#">COURSES</a>
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
			<a href="Elegant_homepage.php">Home ></a>
			<a href="courses.php">Courses</a>
		  </div>
		<!-- breadcrumb navigation close -->	
	</header>
<!-- this is exit of navigation pane of the page -->

    <main>
        <!-- divide the page for two columns by div tags -->
        <div class="sidepanelbg">
            <div class="sidepanel">
                <h2>$50: Digital Marketing</h2>
                <button>Buy Course</button>
                <button>Free Preview</button>
                <hr>
                
                <p>30-day money-back guarantee</p>
                <p>Unlimited access, anywhere, anytime</p>
                <p>Learn from hand-vetted instructors, experts in their field</p>
            </div>
            <div class="sidepanel">
                <h2>Course Syllabus</h2>
                <h3>chapter 1:Introduction</h3>
                <hr>
                
                <p>1. Personal Branding (2:37) Course Downloads</p>
                <p>2. Course Organization is Made Up of Strategy and Tactics (1:54)</p>
                <p>3. Personal Brand Manager Inputs and Outputs, Repurposing Content (2:17)</p>
                <p>Quiz: Chapter 1: Introduction</p>
            </div>
            <div class="sidepanel">
                <h3>chapter 2 :plumbing</h3>
                <hr>
                
                <p>5. Inception of Products, People Buy from People (4:22)</p>
                <p>6. Facebook Public Figure Page (22:02)</p>
                <p>7. Boosting Posts (3:05)</p>
                <p>Quiz: Chapter 2: Plumbing</p>
            </div>
            <div class="sidepanel">
                <h3>chapter 3 :Blogging</h3>
                <hr>
                
                <p>8. Repurposing Content Process for Selecting People on Fiverr (2:50)</p>
                <p>9. Topic Wheel, 6 Topics (4:37)</p>
            </div>
            <div class="sidepanel">
                <h3>chapter 4 :Networking</h3>
                <hr>
                
                <p>10. Power Networking Networking (3:36)</p>
                <p>11. Topic Wheel, 6 Topics (4:37)</p>
                <p>12. 6 Types of Figureheads (1:42)</p>
                <p>13. Building a WHY, 3x3 Goals Sheet (3:33)</p>
            </div>
            
        </div>
        


        <!-- right Side of the page -->
        <div class="contentpanel">

            <h2>Personal Branding: Creating A Strong Online <br> Presence</h2>
            <p>Learn how to create, strategize, launch and grow a personal brand with this in-depth course led by a worldwide branding expert.</p>
            <video autoplay loop muted id="myvideo">
                <source src="images/vid6.mp4" type="video/mp4">
            </video>

            <h2>After Completing This Course  You Will Be Able To</h2>
            <p>1.Guarantee 10,000 views of your interview or podcast</p>
            <p>2.Use a 4-part framework to collect your assets and execute all components of building your personal brand</p>
            <p>3.Define an authentic “Why” that will attract people to your personal brand</p>
            <p>4.Use inception techniques to get your message to your audience</p>
            <p>5.Repurpose content to create hundreds of pieces of content in a few hours</p><hr>

            <h3>About This Course</h3>
            <p>Create a strong personal brand with content that people believe in, trust and want to consume. Learn about the inputs and outputs of a personal brand manager, how to build your why, map your personal goals, make money via the ascension ladder, use Elegant to your advantage and guarantee 10k+ views of your message. The course covers both strategies (overall map of how to get something done) and tactics (step-by-step tasks to achieve your goals) to growing your personal brand. You will learn about all of the foundational elements including the strategy brief, asset production, distribution and amplification of your personal brand. This course is for all levels of experience and you can follow even if you do not have a budget or a dedicated team.</p>

            <div class="shareon">
                <p>Share On</p>
                <i class="bx bxl-whatsapp"></i>
                <i class="bx bxl-facebook"></i>
                <i class="bx bxl-twitter"></i>
                <i class="bx bxl-linkedin"></i>
            </div>

            <h3>What You Will Learn</h3>
            <p>✔How to create pillar and derivative content and outsource your content creation<p>
            <p>✔How to ensure that you maximize your content to resonate with your network<p>
            <p>✔How to organize your highest authority pieces of content into a topic wheel<p>
            <p>✔How to use mapping to establish quantifiable business goals for your personal brand<p>
            <p>✔The importance of Googling yourself to assess your content ranking<p>
            <p>✔How to boost posts for profit and to build authenticity in your field<p>
            <p>✔Create a Public Figure Page to build trust and authority for your brand<p>
            <p>✔How to use a three-by-three personal goal sheet to establish your “why” and start producing relevant content for the right audience<p>
        </div>
    </main>






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
</body>
</html>