function validateForm() {
    const name = document.getElementById("name");
    const password = document.getElementById("password");
    const mobile = document.getElementById("mobile");
    const validationError = document.getElementById("validationError");

    nameBool = validateName(name.value);
    passwordBool = validatePassword(password.value);
    mobileBool = validateMobile(mobile.value);

    if (!nameBool) {
        validationError.style.display = "block";
        validationError.innerText = "Error: Name should be atleast 5 character long"
        return false;
    } else if (!passwordBool) {
        validationError.style.display = "block";
        validationError.innerText = "Error: Password should be atleast 8 character long"
        return false;
    } else if (!mobileBool) {
        validationError.style.display = "block";
        validationError.innerText = "Error: Mobile number should be 10 digit long"
        return false;
    } else {
        validationError.style.display = "none";
        return true;
    }
}

function validatePassword(password) {
    if (password.length >= 8) {
        return true;
    } else {
        return false;
    }
}

function validateMobile(mobile) {
    if (mobile.length == 10) {
        return true;
    } else {
        return false;
    }
}

function validateName(name) {
    if (name.length >= 5) {
        return true;
    } else {
        return false;
    }
}