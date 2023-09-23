function signin_validate() {
    if (logform.email.value ==="" || logform.email.value.indexOf("@")===-1 || logform.email.value.indexOf(".")===-1) {
        alert("check the email");
    }else if (logform.password.value =="") {
        alert("check the password");
    }
}
