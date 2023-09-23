function selling_validate() {
    if (detailsform.firstname.value=="" || detailsform.lastname.value=="") {
        alert("check the name again");
    }
    else if (detailsform.display_name.value=="") {
        alert("check the name that want to display in your profile");
    }
    else if (detailsform.display_name.value=="") {
        alert("check the name that want to display in your profile");
    }  
    else if (detailsform.description.value=="") {
        alert("say something about your experience");
    } 

    // validating the combo boxes in the form
    const language= document.getElementById('language');
    const selectedoption= language.value;

    if (selectedoption=="") {
        alert("select a language to complete the process");
    }  
    const language_level= document.getElementById('language');
    const selectedoption2= language_level.value;

     if (selectedoption2=="") {
        alert("select a language proficiency");
    }  
    


}