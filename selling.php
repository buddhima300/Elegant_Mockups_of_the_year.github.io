<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seller page</title>
    <link rel="stylesheet" href="selling.css">
	<script src="popup_script.js"></script>
</head>
<body>

    <header>
        <div class="video-container">
            <img src="images/bg8.jpg" alt="">
            <div class="content">
                <h1>Work Your Way</h1>
                <h2>you bring the skill. We'll make earning easy</h2>
                <a href="#f-name"><input type="button" value="Become a seller"></a><br>
                <a href="Elegant_homepage.php"><input type="button" value="sign-out"></a>
            </div>
            <div class="content2">
                <div class="c-text">
                    <h2>A Gig is Bought Every <br><span>4 SEC</span></h2>
                    <h2>Transaction<br><span>50M+</span></h2>
                    <h2>Price Range<br><span>$5 - $100</span></h2>
                </div>
            </div>
            
        </div>
    </header>
        <section class="down">
            <div class="openincaps">
                <h1>what can you Sell?</h1>
                <p>Everything that's digital and creative, from website templates to stock footage.</p>
            </div>
            <div class="otherbg">
                <div class="other1">
                    <h1>Your work.<br>Your way.</h1>
                    <p>Speak with your own voice! On our marketplaces you can maintain your identity, build your brand and promote your
                    work to the community - however you like.
                    </p>
                </div>

                <div class="other2">
                    <img src="images/bg6.jpg" alt="">
                    <img src="images/bg8.jpg" alt="">
                    <img src="images/bg9.jpg" alt="">
                    <img src="images/bg10.jpg" alt="">
                    <img src="images/bg11.jpg" alt="">
                </div>
            </div>
            <div class="otherbg">
                <div class="other1">
                    <h1>Focus on Quality</h1>
                    <p>Becoming an Elegant Seller means that, like us,you care deeply about the high quality of theproducts you sell to our global audience.
                    </p>
                </div>

                <div class="other2">
                    <img src="images/background6.jpg" alt="">
                    <img src="images/background5.jpg" alt="">
                    <img src="images/bg9.jpg" alt="">
                    <img src="images/background3.jpg" alt="">
                    <img src="images/background7.jpg" alt="">
                </div>
            </div>
            
        </section>
    <!-- body of this page -->
    <main>
        <div class="c-container">
            <h2>Personal Info</h2>
            <p>
                Tell us a bit about yourself. This information will appear on your <br>
                public profile, so that potential buyers can get to know you better.
            </p>
        </div>
        <div class="d-form">
            <form action="submit.php" method="post" name="detailsform" class="details" enctype="multipart/form-data">
                <label for="fullname1">Fullname</label>
                <input type="text" name="firstname" placeholder="First Name" id="f-name">
                <input type="text" name="lastname" placeholder="Last Name">
                <br><br><br>
                <label for="display name1">Display Name</label>
                <input type="text" name="display_name" placeholder="Type Your Display Name">
                <br><br><br><br><br><br>
                <label for="Profilepic">Profile Picture</label>
                <input type="file" name="profile" id="pro-image" class="file-input">
                <div class="propic">
                    <img id="preview" src="#" alt="Preview" class="preview-image">
                </div>
                <!-- scrpting for profile picture display -->
                <script>
                    const fileInput = document.getElementById('pro-image');
                    const previewImage = document.getElementById('preview');

                    fileInput.addEventListener('change', function() {
                    const file = this.files[0];
                    
                    if (file) {
                        const reader = new FileReader();

                        reader.addEventListener('load', function() {
                        previewImage.setAttribute('src', this.result);
                        });

                        reader.readAsDataURL(file);
                    } else {
                        previewImage.setAttribute('src', '#');
                    }
                    });

                </script>
                <br><br>
                
                <label for="description">Desrciption</label>
                <textarea name="description" placeholder="share bit about your working experience"></textarea>
                
                <br><br><br><br><br>
                <label for="language">Language</label>
                <select id="language" name="combo1">
                    <option value="" disabled selected>Select language</option>
                    <option value="english">English</option>
                    <option value="sinhala">Sinhala</option>
                    <option value="tamil">Tamil</option>
                  </select>

                <select id="language_level" name="combo2">
                    <option value="" disabled selected>Select language level</option>
                    <option value="basic">Basic</option>
                    <option value="conversational">Conversational</option>
                    <option value="fluent">Fluent</option>
                    <option value="native">Native/bilingual</option>
                  </select><br>
                  
                <button name="submit" onclick="selling_validate()">confirm</button>

            </form>
        </div>

       
    </main>
  
    <!-- body of this page -->


   
    <script src="selling.js"></script>
      
</body>
</html>