window.onload = runScript;

function runScript() {

    var myForm = document.forms.addUser;

//variables
    var f_name = myForm.f_name;
    var l_name = myForm.l_name;
    var username = myForm.username;
    var email = myForm.email;
    var password = myForm.password;
    var confirmPassword = myForm.confirmPassword;


//Function
    myForm.onsubmit = validateForm;

    function validateForm() {
        if(f_name.value === "" || f_name.value === null){
            f_name.style.background = "red";
            f_name.focus();
            return false;
        }
        if(l_name.value === "" || l_name.value === null){
            l_name.style.background = "red";
            l_name.focus();
            return false;
        }
        if(username.value === "" || username.value === null){
            username.style.background = "red";
            username.focus();
            return false;
        }
        if(email.value === "" || email.value === null){
            email.style.background = "red";
            email.focus();
            return false;
        }
        if(password.value === "" || password.value === null){
            password.style.background = "red";
            password.focus();
            return false;
        }
        if(confirmPassword.value === "" || confirmPassword.value === null){
            confirmPassword.style.background = "red";
            confirmPassword.focus();
            return false;
        }

        if(password.value !== confirmPassword.value){
            confirmPassword.style.background = "red";
            confirmPassword.focus();
            alert("Please Confirm Your Password")
            return false;
        }


    }


}