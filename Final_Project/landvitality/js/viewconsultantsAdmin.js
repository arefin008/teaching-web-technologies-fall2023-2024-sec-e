function ajax(options) {
    const xhr = new XMLHttpRequest();

    xhr.open(options.method, options.url, true);

    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            options.success(xhr.responseText);
        } else {
            options.error(xhr.statusText);
        }
    };

    xhr.onerror = function() {
        options.error(xhr.statusText);
    };

    if (options.method === 'POST') {
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(options.data);
    } else {
        xhr.send();
    }
}

function viewAllConsultants() {
    //Using AJAX to fetch data from the database
    ajax({
        method: 'GET',
        url: '../controller/allconsultants.php',

        success: function(response) {
            //console.log(response);
            displayUsers(response);
        },
        error: function(error) {
            console.error(error);
        }
    });
}

function displayUsers(data) {
    const usersData = JSON.parse(data);

    // Accessing the array
    const table = document.createElement('table');
    table.style.width = '70%';
    table.style.borderCollapse = 'collapse';

    // Specifying table headers
    const headers = ['NAME','SPECIALITY','EXPERIENCE','GENDER','PHONE', 'EMAIL','Updation', 'Deletion'];

    // Creating a table header
    const headerRow = table.insertRow();
    headers.forEach(headerText => {
        const headerCell = headerRow.insertCell();
        headerCell.textContent = headerText;
        headerCell.style.border = '1px solid black';
        headerCell.style.padding = '8px';
    });

    // Populating table with user data
    usersData.user.forEach(user => {
        const row = table.insertRow();

        // Specifying properties to display in the same order as headers
        const properties = ['cname','specia', 'exper', 'gender', 'phone', 'email',];

        properties.forEach(property => {
            const cell = row.insertCell();

            cell.textContent = user[property];
            cell.style.border = '1px solid black';
            cell.style.padding = '8px';
        });

        // Adding Update button
        const updateCell = row.insertCell();
        const updateButton = document.createElement('button');
        updateButton.textContent = 'Update';
        updateButton.addEventListener('click', function () {
            //directing to cotroller
            window.location.href = '../view/updateconsulinfo.php?userid=' + user['userid'];
        });
        updateCell.appendChild(updateButton);

        // Adding Delete button
        const deleteCell = row.insertCell();
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.addEventListener('click', function () {
            //directing to cotroller
            window.location.href = '../controller/deleteconsultants.php?userid=' + user['userid'];
        });
        deleteCell.appendChild(deleteButton);
    });


    const usersDiv = document.getElementById('users');
    usersDiv.innerHTML = ''; 
    usersDiv.appendChild(table);
}

document.addEventListener('DOMContentLoaded', function () {
    viewAllConsultants();
});
