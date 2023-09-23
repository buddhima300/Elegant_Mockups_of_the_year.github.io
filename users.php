<?php
    $con = mysqli_connect('localhost','root','','elegant_mockups');
    if (!$con) {
        die('could not connect: '.mysqli-error());
    }else{
        // echo "connection established successfully!";
    }
    // for users who egister for future fascilities
    $query = "SELECT * FROM signup";
    $result = mysqli_query($con,$query);

    // taking values from templates table
    $query2 = "SELECT * FROM templates_login";
    $result2 = mysqli_query($con,$query2);

    // taking values from sellers table
    $query3 = "SELECT * FROM sellers";
    $result3 = mysqli_query($con,$query3);





    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="popup_styling.css">
    <link rel="stylesheet" href="footerstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <section>
        <header>
		<section>
			<div class="menubar">
				<img src="images/elegant logo.png" alt="logo" class="main-logo">
				<ul>
					<li class="active"><i class="fa fa-home"></i><a href="Elegant_homepage.php">HOME</a></li>
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
			<a href="users.php">Elegant users > </a>
		</div>
		<!-- breadcrumb navigation close -->	
		


	</header>
    <div class="users">
        <div class="background">
            <h1>OUR <br>ELEGANT CLIENT<br> BASE</h1>
            <div class="capt">
                <h2>Enrolling <br>Every 4SEC</h2>
                <h2>Engagment <br>1K+</h2>
                <h2>Reaches <br>35K+</h2>
            </div>
        </div>
    </div>

    <div class="subhead">
        <h2>ELEGANT USERS LEADER BOARD</h2>
    </div>
    



    <?php 
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
    ?>  
    <div class="cardbg">
        <div class="card">
            <img src="images/profile/p1.jpg" alt="">
            <h2><?php echo $row["name"]; ?></h2>
            <h3><?php echo $row["email"]; ?></h3>
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
    </div>
    <?php 
        }
    ?>

<section>
    </section>


    <div class="subhead2">
        <h2>ELEGANT TEMPLATES LEADER BOARD</h2>
    </div>

    <!-- templates leader board -->
    <?php 
        while($row2 = mysqli_fetch_assoc($result2)){
    ?>  
    <div class="cardbg2">
        <div class="card">
            <img src="images/profile/p2.jpg" alt="">
            <h2><?php echo $row2["username"]; ?></h2>
            <h3><?php echo $row2["email"]; ?></h3>
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
    </div>
    <?php 
        }
    ?>
    
</section>
<section>

    <div class="subhead">
        <h2>ELEGANT SELLERS LEADER BOARD</h2>
    </div>

    <!-- templates leader board -->
    <?php 
        while($row3 = mysqli_fetch_assoc($result3)){
            // $imageurl='images/uploads/'.$row3["picture"];
    ?>  
    <div class="cardbg">
        <div class="card">
            <img src="<?php echo $row3["picture"]; ?>" alt="">
            <h2><?php echo $row3["displayname"]; ?></h2>
            <h3><?php echo $row3["description"]; ?></h3>
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
    </div>
    <?php 
        }
    ?>
    
</section>




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
						<li><a href="">reviews</a></li>
						<li><a href="">invite a friend</a></li>
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
	<script src="home.js"></script>

</html>