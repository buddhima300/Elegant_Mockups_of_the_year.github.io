<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="blog.css">
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
								<li><a href="courses.php">BROWSE COURSES</a></li>
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
			<a href="blog.php">blog > </a>
		  </div>
		<!-- breadcrumb navigation close -->	
	</header>
<!-- this is exit of navigation pane of the page -->

    <main>
        <img src="images/bg7.jpg" id="headerimg">
        <h2 class="topic">OUR STORY</h2><hr>

        <div class="vimi">
            <div class="vission">
                <h2>our vision</h2>
                <p>"Painting the future with pixels and passion."</p>
            </div>
            <div class="mission">
                <h2>our mission</h2>
                <p>"Making Your Marketing Easy"</p>
            </div>
        </div>

        <!-- blog contents -->
        <!-- ! 01 -->
        <div class="story1">
            <div class="images"><img src="images/other/img2.jpg"></div>

            <div class="captions">
                <h2>why graphic design</h2>

                <p>In the ever-evolving landscape of communication, graphic design emerges as a vital tool that bridges the gap between ideas and their tangible manifestation. Like a magician conjuring spells, graphic design weaves visual enchantment that captivates and engages audiences in ways no other medium can. It breathes life into concepts, transforming them into immersive experiences that resonate with individuals on a profound level. Through the harmonious blend of typography, colors, imagery, and composition, graphic design possesses the power to evoke emotions, provoke thoughts, and ignite inspiration. It shapes the identity of brands, helping them stand out amidst a sea of competitors, while also providing a voice to causes and movements seeking to bring about positive change. With each stroke of a brush, click of a mouse, or tap of a stylus, graphic design enables us to communicate, persuade, and inspire, transcending language and cultural barriers. It is the creative force that breathes visual poetry into our world, leaving an indelible mark on the collective consciousness and reminding us of the transformative power of artistry and imagination.</p>
            </div>
        </div>


        <!-- ! 02 -->
        <div class="story1">
            <div class="captions">
                <h2>Once upon a time in the vibrant world of graphic design, there was a visionary named Maya. Maya possessed an unparalleled passion for creativity and a gift for transforming ideas into visual masterpieces.</h2>

                <p>In Maya's vision, graphic design was not just about creating aesthetically pleasing visuals; it was about telling compelling stories. Each design had a purpose, a narrative waiting to be shared with the world. Maya believed that every brand, every cause, and every message deserved to be represented in a visually captivating and meaningful way.

                With this vision in her heart, Maya set out on a journey to revolutionize the graphic design industry. She surrounded herself with a team of like-minded artists and dreamers, each bringing their unique talents and perspectives to the table. Together, they formed a collective known as "Visionscape Design Studio."

                Visionscape Design Studio became a haven for creative exploration and innovation. Maya and her team broke free from the confines of traditional design approaches and embraced a multidisciplinary approach. They seamlessly merged illustration, typography, photography, and digital techniques, blending the boundaries between art and design.</p>
            </div>
            <div class="images"><img src="images/other/img1.jpg"></div>
        </div>
        

        <!-- ! 03 -->
        <div class="story1">
            <div class="images"><img src="images/other/img3.jpg"></div>

            <div class="captions">
                <h2>what is graphic designing</h2>

                <p>Graphic design is a creative discipline that involves the art of visually communicating messages, ideas, and information through the use of typography, images, colors, and layout techniques. It is a versatile field that encompasses various mediums, including print, digital, and multimedia platforms.

                    Graphic designers utilize their artistic and technical skills to create visually appealing and effective designs that serve specific purposes. They work closely with clients or stakeholders to understand their goals, target audience, and desired message. With this understanding, they conceptualize, plan, and execute designs that effectively convey the intended message and achieve the desired outcome.
                    
                    In the realm of graphic design, professionals employ a range of tools and software applications to create designs. These may include illustration software, photo editing tools, layout programs, and animation software, among others. They combine elements such as typography, images, icons, illustrations, and color schemes to create visually cohesive and aesthetically pleasing designs.
                    
                    Graphic design finds its application in various fields, including advertising, marketing, branding, web design, user interface (UI) design, publication design, packaging design, and more. It plays a crucial role in visually communicating ideas, promoting products or services, enhancing brand identity, and engaging audiences.</p>
            </div>
        </div>

        <!-- ! 04 -->
        <div class="story1">
            <div class="captions">
                <h2>importance of graphic designing</h2>

                <p>Graphic design is important for a lot of reasons. First, it’s the basis of every logo design you’ve ever seen. Second, think about all of the social media content and advertisements you see every day. Yep, all graphic design.

                    In addition, graphic design is a part of book cover design, magazine page layouts, product design, apparel design and more.
                    
                    Here are a few statistics that help further our point of just how essential the graphic arts are.</p>
            </div>
            <div class="images"><img src="images/other/img4.jpg"></div>
        </div><br><br><br>
<hr>

        <div class="editor">
            <img src="images/pro.png" alt="">
            <h2>Written by Buddhima chathuranga lakmal</h2>
            <h2>undergraduate of Horizon campus</h2>
            <p>Hi! I am buddhima, an experienced graphic designer. I have 4+ years of experience in delivering best quality works for Websites and marketing in Adobe illustrator, and Photoshop. My design process is simple but research-based. I do consider UX while designing any website Because that's what makes your site usable for your audience.</p><br>

            <input type="text" placeholder="email us your suggesstions">
            <i class ="fa fa-arrow-right"></i>
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
	<script src="popup_script.js"></script>

</body>
</html>