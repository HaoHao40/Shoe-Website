function validations() {
    let usernameSValid = false;
    let passwordSValid = false;
    let genderSValid = false;
    let emailSValid = false;
    
    let usernames = document.getElementById("usernames").value;
    let passwords = document.getElementById("passwords").value;
    let genders = document.getElementById("genders").value;
    let emails = document.getElementById("emails").value;

    if(/^\w{1,20}$/.test(usernames) && usernames != "") {
        usernameSValid = true;
    }
    else {
        usernameSValid = false;
    }
    
    if(/^\w{1,20}$/.test(passwords) && passwords != "") {
        passwordSValid = true;
    }
    else {
        passwordSValid = false;
    }

    if(genders == "M" || genders == "F") {
        genderSValid = true;
    }
    else {
        genderSValid = false;
    }

    if(/^[\w.+\-]+@gmail\.com$/.test(emails) && emails != "") {
        emailSValid = true;
    }
    else {
        emailSValid = false;
    }

    if(usernameSValid == false || passwordSValid == false || genderSValid == false || emailSValid == false) {
        document.getElementById("ssubmitbtn").disabled = true;
    }
    else {
        document.getElementById("ssubmitbtn").disabled = false;
    }
}