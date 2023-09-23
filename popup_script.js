// courses page validation and other stuffs
// registration popup page
function openPopup() {
    var popup = document.getElementById("regPopup");
    popup.style.display = "block";
}

function closePopup() {
    var popup = document.getElementById("regPopup");
    popup.style.display = "none";
}

// login-popup page
function openPopup2() {
    var logpopup = document.getElementById("login-popup");
    logpopup.style.display = "block";
}

function closePopup2() {
    var logpopup = document.getElementById("login-popup");
    logpopup.style.display = "none";
}

// validating the courses registration form
function validate(){
    if (myform.name.value=="") {
        alert("provide your name!");
        myform.name.focus();
        return false;
    }
    else if (myform.country.value=="") {
        alert("provide your country!");
        myform.country.focus();
        return false;
    }
    else if (myform.email.value=="") {
        alert("provide your email!");
        myform.email.focus();
        return false;
    }
    else if (myform.password.value=="") {
        alert("provide valid password!");
        myform.password.focus();
        return false;
    }
    else{
        
        // clear the entire form once data are submitted
        // alert("submitted successfully");
        var name = document.getElementById('name'); 
        var country = document.getElementById('country'); 
        var email = document.getElementById('email'); 
        var password = document.getElementById('password'); 
        name.value = '';
        country.value = '';
        email.value = '';
        password.value = '';
    }
}

function logvalidate() {
    var email = document.getElementById('logemail').value;
    var password = document.getElementById('logpassword').value;


    if (myform2.email.value=="") {
        alert("provide your email!");
        myform.email.focus();
        return false;
    }
    else if (myform2.password.value=="") {
        alert("provide valid password!");
        myform.password.focus();
        return false;
    }
    else{
        alert("login fail");
    }
}
