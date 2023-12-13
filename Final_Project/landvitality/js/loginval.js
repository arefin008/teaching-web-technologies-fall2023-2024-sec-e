// loginval.js
function loginval() {
    let userId = document.getElementById("usid").value;
    let password = document.getElementById("uspass").value;
    let userType = document.querySelector('input[name="usertype"]:checked');

    if (userId === "") {
        alert("Please enter your User ID.");
        return false;
    }

    if (password === "") {
        alert("Please enter your password.");
        return false;
    }

    if (!userType) {
        alert("Please select a user type (Admin or User).");
        return false;
    }
    return true;
}
