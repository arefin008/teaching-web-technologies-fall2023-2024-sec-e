// loginval.js
function loginval() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("uspass").value;

    if (userId === "") {
        alert("Please enter your User ID.");
        return false;
    }

    if (password === "") {
        alert("Please enter your password.");
        return false;
    }
    return true;
}
