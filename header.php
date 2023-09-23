<header>
		<section>
			<div class="menubar">
				<img src="images/elegant logo.jpg" alt="logo" class="main-logo">
				<ul>
					<li class="active"><i class="fa fa-home"></i><a href="#">HOME</a></li>
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
								<li><a href="#logos1">logo design</a></li>
								<li><a href="#flyer1">flyer design</a></li>
								<li><a href="#social1"> social-media post design</a></li>
								<li><a href="#">business-card & stationary design</a></li>
								<li><a href="#">image editing</a></li>
								<li><a href="#">App design</a></li>
								<li><a href="#">resume design</a></li>
								<li><a href="#shirts1">T-shirt design</a></li>
								<li><a href="#">presentation design</a></li>
								<li><a href="#">background removal</a></li>
								
							</ul>
						</div>
					
					</li>

					<li><i class="fa fa-download"></i><a href="templates.html">TEMPLATES</a></li>
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
							</ul>
						</div>
					
					</li>

					<li><i class="fa fa-user-circle"></i><a href="#">PROFILE</a>
						<div class="submenu-1">
							<ul>
								<li><a href="signup.html">SIGN-UP</a></li>
								<li><a href="signin.html">SIGN-IN</a></li>
								<li><a href="selling.html">BECOME A SELLER</a></li>
								
							</ul>
						</div>
					</li>
					
				</ul>
				
			</div>
		</section>
		<!-- breadcrumb navigation start -->
		<div class="breadcrumb">
			<a href="Elegant_homepage.html">Home > </a>
		  </div>
		<!-- breadcrumb navigation close -->	
	</header>