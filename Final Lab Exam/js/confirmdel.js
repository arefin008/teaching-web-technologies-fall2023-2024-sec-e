

function confirmDelete(userId) {
    let confirmDelete = confirm("Are you sure you want to delete this user?");
    if (confirmDelete) {
        window.location.href = "../controller/deleteusers.php?userid=" + userId;
    }
}
