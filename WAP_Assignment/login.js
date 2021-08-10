function validationl() {
    let usernameLValid = false;
    let passwordLValid = false;
    
    let usernamel = document.getElementById("usernamel").value;
    let passwordl = document.getElementById("passwordl").value;

    if(/^\w{1,20}$/.test(usernamel) && usernamel != "") {
        usernameLValid = true;
    }
    else {
        usernameLValid = false;
    }
    
    if(/^\w{1,20}$/.test(passwordl) && passwordl != "") {
        passwordLValid = true;
    }
    else {
        passwordLValid = false;
    }
    if(usernameLValid == false || passwordLValid == false) {
        document.getElementById("lsubmitbtn").disabled = "disabled";
    }
    else {
        document.getElementById("lsubmitbtn").disabled = false;
    }
}