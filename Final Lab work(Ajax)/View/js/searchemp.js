function searchEmployee() {
    var employeeName = document.getElementById("employeeName").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", '../controller/searchempcheck.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            var data = JSON.parse(xhr.responseText);

            var user = data.user[0];

            document.getElementById("NAME").innerText = user.uname;
            document.getElementById("COMNAME").innerText = user.comname;
            document.getElementById("CONTACT").innerText = user.cntc;
        }
    };

    xhr.send('name=' + encodeURIComponent(employeeName));
}
