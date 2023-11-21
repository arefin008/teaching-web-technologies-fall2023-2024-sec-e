<!DOCTYPE html>
<html>
<head>
    <title>SEARCH EMPLOYEE</title>
</head>
<body>
    <fieldset>
        <legend>Search Employee here</legend>
        <center>
            <form method="post" action="../controller/searchempcheck.php">
            <table>
                <tr>
                    <td>NAME OF THE EMPLOYEE:</td>
                    <td><input type="text" id="employeeName" placeholder="Search by typing Name here!"></td>
                    <td><button onclick="searchEmployee()">Search</button></td>
                </tr>
            </table>
        </form>
        </center>
        <b>NAME:</b><h3 id="NAME"><i>EMPLOYEE's NAME</i></h3>
        <b>COMPANY NAME:</b><h3 id="COMNAME"><i>COMPANY's NAME</i></h3>
        <b>CONTACT:</b><h3 id="CONTACT"><i>CONTACT INFO</i></h3>
    </fieldset>

    <script src="../js/searchemp.js"></script>
</body>
</html>
