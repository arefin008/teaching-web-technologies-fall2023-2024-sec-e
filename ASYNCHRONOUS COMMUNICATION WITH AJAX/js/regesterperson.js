function ajax(options) {
    const xhr = new XMLHttpRequest();

    xhr.open(options.method, options.url, true);

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            options.success(xhr.responseText);
        } else {
            options.error(xhr.statusText);
        }
    };

    xhr.onerror = function () {
        options.error(xhr.statusText);
    };

    if (options.method === 'POST') {
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(options.data);
    } else {
        xhr.send();
    }
}

// function to fetch and display emails
function email() {
    ajax({
        method: 'GET',
        url: '../controller/emailcheck.php',
        success: function (response) {
            displayEmails(response);
        },
        error: function (error) {
            console.error(error);
        }
    });
}

// function to display emails and store them
function displayEmails(data) {
    const emailsData = JSON.parse(data);
    const emails = emailsData.user.map(user => user.email);
    window.serverEmails = emails;
}

// function to check if entered email matches any email from the database
function checkEmailMatch() {
    var emailInput = document.getElementById('email').value;
    if (window.serverEmails && window.serverEmails.includes(emailInput)) {
        document.getElementById('emailError').innerText = 'Email already EXISTS in the DATABASE';
        return false;
    } else {
        document.getElementById('emailError').innerText = '';
        return true;
    }
}

// Validating functions
function registerVal() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;

    // reseting error messages
    document.getElementById('nameError').innerText = '';
    document.getElementById('phoneError').innerText = '';
    document.getElementById('emailError').innerText = '';
    document.getElementById('passwordError').innerText = '';
    document.getElementById('confirmPasswordError').innerText = '';

    // performing validation checks
    let isValid = true;

    if (name.trim() === '') {
        document.getElementById('nameError').innerText = 'Name can not be empty';
        isValid = false;
    }

    if (phone.trim() === '') {
        document.getElementById('phoneError').innerText = 'Phone can not be empty';
        isValid = false;
    } else if (isNaN(phone) || phone.length !== 11) {
        document.getElementById('phoneError').innerText = 'Invalid phone number (must be 11 digits)';
        isValid = false;
    }

    if (email.trim() === '') {
        document.getElementById('emailError').innerText = 'Email can not be empty';
        isValid = false;
    } else if (!isValidEmail(email)) {
        document.getElementById('emailError').innerText = 'Invalid email address';
        isValid = false;
    } else if (!checkEmailMatch()) {
        return false;
    }

    if (password.trim() === '') {
        document.getElementById('passwordError').innerText = 'Password can not be empty';
        isValid = false;
    } else if (password.length < 8) {
        document.getElementById('passwordError').innerText = 'Password must be at least 8 characters';
        isValid = false;
    }

    if (confirmPassword.trim() === '') {
        document.getElementById('confirmPasswordError').innerText = 'Confirm Password can not be empty';
        isValid = false;
    } else if (confirmPassword !== password) {
        document.getElementById('confirmPasswordError').innerText = 'Passwords do not match';
        isValid = false;
    }

    return isValid;
}

function isValidEmail(email) {
    let atIndex = email.indexOf('@');
    let dotIndex = email.lastIndexOf('.');
    return atIndex > 0 && dotIndex > atIndex + 1 && dotIndex < email.length - 1;
}

// fetching and displaying emails on page load
document.addEventListener('DOMContentLoaded', function () {
    email();
});
