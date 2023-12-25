function RegisrationvalidateForm() {
    var firstName = document.forms["registrationForm"]["T_first_name"].value;
    var lastName = document.forms["registrationForm"]["T_last_name"].value;
    var email = document.forms["registrationForm"]["T_email"].value;
    var dob = document.forms["registrationForm"]["T_dob"].value;
    var phoneNumber = document.forms["registrationForm"]["T_phone"].value;
    var gender = document.forms["registrationForm"]["T_gender"].value;
    var teacherId = document.forms["registrationForm"]["T_id"].value;
    var password = document.forms["registrationForm"]["T_password"].value;

    clearErrors();

    if (firstName.length < 5) {
        showError('T_first_nameError', 'First name must be at least 5 characters');
        return false;
    }
    if (lastName.length < 5) {
        showError('T_last_nameError', 'Last name must be at least 5 characters');
        return false;
    }
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        showError('T_emailError', 'Invalid email address');
        return false;
    }
    if (!dob) {
        showError('T_dobError', 'Date of birth is required');
        return false;
    }
    var phonePattern = /^\d{11}$/;
    if (!phonePattern.test(phoneNumber)) {
        showError('T_phoneError', 'Invalid phone number (must be 11 digits)');
        return false;
    }
    if (!gender) {
        showError('T_genderError', 'Gender is required');
        return false;
    }
    if (!teacherId) {
        showError('T_idError', 'Teacher ID is required');
        return false;
    }
    if (!password || password.length < 6) {
        showError('T_passwordError', 'Password must be at least 6 characters');
        return false;
    }
    
    return true;
}
function clearErrors() {
    var errorFields = ['T_first_nameError', 'T_last_nameError', 'T_emailError', 'T_dobError', 'T_phoneError', 'T_genderError', 'T_idError', 'T_passwordError' ];

    for (var i = 0; i < errorFields.length; i++) {
        document.getElementById(errorFields[i]).innerHTML = '';
    }
}

function showError(field, message) {
    document.getElementById(field).innerHTML = message;
}

function loginFormvalid() {
    var teacherId = document.forms["loginForm"]["teacherId"].value;
    var password = document.forms["loginForm"]["password"].value;

    document.getElementById("T_idError1").innerHTML = "";
    document.getElementById("T_passError1").innerHTML = "";
    clearErrors1();

    if (teacherId === "") {
        document.getElementById("T_idError1").innerHTML = "Username is required";
        return false;
    }

    if (password === "") {
        document.getElementById("T_passError1").innerHTML = "Password is required";
        return false;
    }

    return true; 
}
function clearErrors1() {
    var errorFields = [ 'T_idError1', 'T_passError1' ];

    for (var i = 0; i < errorFields.length; i++) {
        document.getElementById(errorFields[i]).innerHTML = '';
    }
}



