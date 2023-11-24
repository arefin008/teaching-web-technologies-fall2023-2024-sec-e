function updateConsultant() {
    let formData = new FormData(document.getElementById('updateForm'));

    if (!validateForm(formData)) {
        console.error('Form validation failed');
        return;
    }

    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'updateconsultant.php', true);

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            console.log('Update successful');
            location.reload(); 
        } else {
            console.error('Update failed');
        }
    };

    xhr.onerror = function () {
        console.error('Update failed');
    };

    xhr.send(formData);
}

function validateForm(formData) {
    let name = formData.get('name');
    if (!name || name.trim() === '') {
        alert('Name cannot be empty');
        return false;
    }


    return true;
}

