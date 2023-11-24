

function confirmDelete(userid){
    let confirmDelete = confirm("Are you sure you want to delete this consultant?")
    if(confirmDelete)
    {
        window.location.href="../controller/deleteconsultants.php?userid=" + userid;
    }
}