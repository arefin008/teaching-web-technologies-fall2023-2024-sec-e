<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Live Search Users
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../js/liveserach.js"></script>
    </head>
    <body>
    <fieldset>
            <h3>LIVE SEARCH USERS</h3>
        </fieldset>
        <fieldset>
            <legend>Live Search</legend>
            <center>
                <h3><i>SEARCH ANY USERS HERE!</i></h3>
                <input type="text" id="liv_srch" placeholder="Search by name!">
            </center>
            <div id="searchresult"> </div>
        </fieldset>
    </body>
</html>