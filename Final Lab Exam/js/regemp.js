
function regval() {
    let id = document.getElementById("name").value;
    let username = document.getElementById("username").value;
    let contact = document.getElementById("contact").value;
    let password = document.getElementById("password").value;

    if (id === "" || username === "" || contact === "" || password === "") {
        alert("Please fill out all fields.");
        return false;
    }
}


