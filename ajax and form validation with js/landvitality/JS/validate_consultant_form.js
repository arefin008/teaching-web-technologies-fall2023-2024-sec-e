function validateConsultantForm() {
    let id = document.getElementByName('id').value;
    let name = document.getElementByName('name').value;
    let phone = document.getElementByName('phone').value;
    let email = document.getElementByName('email').value;
    let speciality = document.getElementByName('speciality').value;
    let exp = document.getElementByName('exp').value;
    let gender = document.getElementByName('gender').value;

    if (id === "" || name === "" || phone === "" || email === "" || speciality === "" ||exp === "" || gender === "none") {
        alert("Please fill out all fields.");
        return false;
    }
    else{
        alert("Successfull");
        return true;
    }
}

