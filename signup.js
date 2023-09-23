function signup_validate() {
    if (regform.signupusername.value =="") {
        alert("provide your username!");
    }
    else if (regform.signupemail.value =="") {
        alert("provide your email!");
    }
    else if (regform.signuppassword.value =="") {
        alert("provide your password!");
    }
    else if (regform.signuprepeat.value =="") {
        alert("provide your repeat password!");
    }
}