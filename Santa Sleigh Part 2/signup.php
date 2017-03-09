<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    //$servername = "127.0.0.1:3306";
    $servername = "localhost";
    $username = "dhua3";
    $password = "OpTicGen101";

    // Create the connection
    $connection = mysql_connect($servername, $username, $password);

    // Check the connection
    if(!$connection) {
        die("Connection Failed");
    }

    mysql_select_db("santasleigh_db");
    $countuser = count($_GET['user']);
    $countpass = count($_GET['pass']);

    $username = $_GET['user'];
    $password = $_GET['pass'];

    if($_GET['pass'] == $_GET['confirm']) {
        $sqlsignup = "INSERT INTO account_tbl (username, password) VALUES ('$username', '$password')";
        $sqlquery = mysql_query($sqlsignup, $connection);
        header("Location: santasleigh.php");
    } else if($countuser > 12) {
        header("Location: accountuser.php");
    } else if($countpass > 18) {
        header("Location: accountpass.php");
    } else if($_GET['pass'] != $_GET['confirm']) {
        header("Location: accountmatch.php");
    }

    mysql_close($connection);
?>