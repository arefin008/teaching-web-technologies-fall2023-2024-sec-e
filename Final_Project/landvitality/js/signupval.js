function signupval() {
    let id = document.getElementById("id").value;
    let fusername = document.getElementById("fusername").value;
    let lusername = document.getElementById("lusername").value;
    let password = document.getElementById("password").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let gender = document.getElementById("gender").value;
    let dateOfBirth = document.getElementById("date_of_birth").value;
    let userType = document.querySelector('input[name="usertype"]:checked').value;

    if (id === "") {
        alert("Please enter ID.");
        return false;
    }

    if (fusername === "") {
        alert("Please enter First Name.");
        return false;
    } else if (containsNumbers(fusername)) {
        alert("First Name must not contain numeric values.");
        return false;
    }

    if (lusername === "") {
        alert("Please enter Last Name.");
        return false;
    } else if (containsNumbers(lusername)) {
        alert("Last Name must not contain numeric values.");
        return false;
    }

    if (password === "") {
        alert("Please enter Password.");
        return false;
    }

    if (phone === "") {
        alert("Please enter Phone number.");
        return false;
    }

    if (email === "") {
        alert("Please enter Email.");
        return false;
    }

    if (gender === "none") {
        alert("Please select Gender.");
        return false;
    }

    if (dateOfBirth === "") {
        alert("Please enter Date of Birth.");
        return false;
    }

    if (userType === "") {
        alert("Please select User Type.");
        return false;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters.");
        return false;
    }

    if (phone.length < 11) {
        alert("Phone number must be at least 11 characters.");
        return false;
    }

    if (email.indexOf('@') === -1) {
        alert("Email address must contain '@'.");
        return false;
    }

    return true;
}

// Helper function to check if a string contains numeric values
function containsNumbers(input) {
    return /\d/.test(input);
}
