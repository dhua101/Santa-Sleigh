<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    unlink('cart.txt');
    unlink('purchase.txt');
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

    $sqldropping1 = "DROP TABLE stock_tbl";
    $sqldropping2 = "DROP TABLE stockeg_tbl";
    $sqldropping3 = "DROP TABLE stockgg_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);
    $sqldroptable2 = mysql_query($sqldropping2, $connection);
    $sqldroptable3 = mysql_query($sqldropping3, $connection);

    $sqlnewtable1 = "CREATE TABLE stock_tbl LIKE stock_backup_tbl";
    $sqlnewtable2 = "CREATE TABLE stockeg_tbl LIKE stockeg_backup_tbl";
    $sqlnewtable3 = "CREATE TABLE stockgg_tbl LIKE stockgg_backup_tbl";
    $sqlcreate1 = mysql_query($sqlnewtable1, $connection);
    $sqlcreate2 = mysql_query($sqlnewtable2, $connection);
    $sqlcreate3 = mysql_query($sqlnewtable3, $connection);

    $sqlnewdata1 = "INSERT INTO stock_tbl SELECT * FROM stock_backup_tbl";
    $sqlnewdata2 = "INSERT INTO stockeg_tbl SELECT * FROM stockeg_backup_tbl";
    $sqlnewdata3 = "INSERT INTO stockgg_tbl SELECT * FROM stockgg_backup_tbl";
    $sqlinsert1 = mysql_query($sqlnewdata1, $connection);
    $sqlinsert2 = mysql_query($sqlnewdata2, $connection);
    $sqlinsert3 = mysql_query($sqlnewdata3, $connection);

    $sqldropping1 = "DROP TABLE stock_backup_tbl";
    $sqldropping2 = "DROP TABLE stockeg_backup_tbl";
    $sqldropping3 = "DROP TABLE stockgg_backup_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);
    $sqldroptable2 = mysql_query($sqldropping2, $connection);
    $sqldroptable3 = mysql_query($sqldropping3, $connection);

    unlink("item1.txt");
    unlink("item2.txt");
    unlink("item3.txt");
    unlink("item4.txt");
    unlink("item5.txt");
    unlink("item6.txt");
    unlink("item7.txt");
    unlink("item8.txt");
    unlink("item9.txt");
    unlink("item10.txt");
    unlink("item11.txt");
    unlink("item12.txt");

    unlink("item1eg.txt");
    unlink("item2eg.txt");
    unlink("item3eg.txt");
    unlink("item4eg.txt");
    unlink("item5eg.txt");
    unlink("item6eg.txt");
    unlink("item7eg.txt");
    unlink("item8eg.txt");
    unlink("item9eg.txt");

    unlink("item1gg.txt");
    unlink("item2gg.txt");
    unlink("item3gg.txt");
    unlink("item4gg.txt");
    unlink("item5gg.txt");
    unlink("item6gg.txt");
    unlink("item7gg.txt");
    unlink("item8gg.txt");

    rename("item1_backup.txt", "item1.txt");
    rename("item2_backup.txt", "item2.txt");
    rename("item3_backup.txt", "item3.txt");
    rename("item4_backup.txt", "item4.txt");
    rename("item5_backup.txt", "item5.txt");
    rename("item6_backup.txt", "item6.txt");
    rename("item7_backup.txt", "item7.txt");
    rename("item8_backup.txt", "item8.txt");
    rename("item9_backup.txt", "item9.txt");
    rename("item10_backup.txt", "item10.txt");
    rename("item11_backup.txt", "item11.txt");
    rename("item12_backup.txt", "item12.txt");

    rename("item1eg_backup.txt", "item1eg.txt");
    rename("item2eg_backup.txt", "item2eg.txt");
    rename("item3eg_backup.txt", "item3eg.txt");
    rename("item4eg_backup.txt", "item4eg.txt");
    rename("item5eg_backup.txt", "item5eg.txt");
    rename("item6eg_backup.txt", "item6eg.txt");
    rename("item7eg_backup.txt", "item7eg.txt");
    rename("item8eg_backup.txt", "item8eg.txt");
    rename("item9eg_backup.txt", "item9eg.txt");

    rename("item1gg_backup.txt", "item1gg.txt");
    rename("item2gg_backup.txt", "item2gg.txt");
    rename("item3gg_backup.txt", "item3gg.txt");
    rename("item4gg_backup.txt", "item4gg.txt");
    rename("item5gg_backup.txt", "item5gg.txt");
    rename("item6gg_backup.txt", "item6gg.txt");
    rename("item7gg_backup.txt", "item7gg.txt");
    rename("item8gg_backup.txt", "item8gg.txt");

    mysql_close($connection);

    header("Location: santasleigh.php");
?>