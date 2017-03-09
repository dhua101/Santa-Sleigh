<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $quantity = '';
    $file = fopen('cart.txt', 'a');
    $purchase = fopen('purchase.txt', 'a');
    $stuff = fopen("things.txt", "a");
    $stock = '';

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
    echo "Connection Successful<br>";

    mysql_select_db("santasleigh_db");

    if(isset($_GET['quantity1'])) {
        $quantity = $_GET['quantity1'];
        $image = 'http://localhost/Santa%20Sleigh/merrychristmas.jpg';
        $name = 'Merry Christmas Gift Card';
        $price = $_GET['value'] * $quantity;

        $file1r = fopen("item1gc.txt", "r");
        $stock = fgets($file1r);
        if($stock == 0) {
            $stock += 999999;
        }
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM stockcg_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgc_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("item1gc.txt", "w");
        fwrite($file1w, $stock);
        fclose($file1w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity2'])) {
        $quantity = $_GET['quantity2'];
        $image = 'http://localhost/Santa%20Sleigh/happyholiday.jpg';
        $name = 'Happy Holidays Gift Card';
        $price = $_GET['value'] * $quantity;

        $file2r = fopen("item2gc.txt", "r");
        $stock = fgets($file2r);
        if($stock == 0) {
            $stock += 999999;
        }
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM stockgc_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgc_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("item2gc.txt", "w");
        fwrite($file2w, $stock);
        fclose($file2w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    }

    fclose($file);
    fclose($purchase);
    fclose($stuff);
    mysql_close($connection);
    
    header('Location: giftcardmember.php');
?>