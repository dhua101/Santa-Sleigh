<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    unlink('cart.txt');
    unlink('purchase.txt');
    unlink('money.txt');
    unlink('emails.txt');
    unlink('things.txt');

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

    $sqldropping1 = "DROP TABLE stock_backup_tbl";
    $sqldropping2 = "DROP TABLE stockeg_backup_tbl";
    $sqldropping3 = "DROP TABLE stockgg_backup_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);
    $sqldroptable2 = mysql_query($sqldropping2, $connection);
    $sqldroptable3 = mysql_query($sqldropping3, $connection);

    unlink("item1_backup.txt");
    unlink("item2_backup.txt");
    unlink("item3_backup.txt");
    unlink("item4_backup.txt");
    unlink("item5_backup.txt");
    unlink("item6_backup.txt");
    unlink("item7_backup.txt");
    unlink("item8_backup.txt");
    unlink("item9_backup.txt");
    unlink("item10_backup.txt");
    unlink("item11_backup.txt");
    unlink("item12_backup.txt");

    unlink("item1eg_backup.txt");
    unlink("item2eg_backup.txt");
    unlink("item3eg_backup.txt");
    unlink("item4eg_backup.txt");
    unlink("item5eg_backup.txt");
    unlink("item6eg_backup.txt");
    unlink("item7eg_backup.txt");
    unlink("item8eg_backup.txt");
    unlink("item9eg_backup.txt");

    unlink("item1gg_backup.txt");
    unlink("item2gg_backup.txt");
    unlink("item3gg_backup.txt");
    unlink("item4gg_backup.txt");
    unlink("item5gg_backup.txt");
    unlink("item6gg_backup.txt");
    unlink("item7gg_backup.txt");
    unlink("item8gg_backup.txt");

    mysql_close($connection);

    header('Location: santasleigh.php');
?>