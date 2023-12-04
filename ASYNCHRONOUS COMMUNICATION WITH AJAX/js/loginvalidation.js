function loginval() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email === "") {
        alert("Please enter your EMAIL ID.");
        return false;
    }

    if (password === "") {
        alert("Please enter your PASSWORD.");
        return false;
    }
    return true;
}
