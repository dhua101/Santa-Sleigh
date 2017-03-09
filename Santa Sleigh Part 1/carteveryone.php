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
        $image = 'https://i5.walmartimages.com/asr/d4635b4a-4c23-4e9f-9afe-5adf825c534a_1.4004f22addec632d0b21f2b9d5bc16d1.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff';
        $name = 'Beats by Dr. Dre Studio Over-Ear Headphones';
        $price = 97.92 * $quantity;

        $file1r = fopen("item1eg.txt", "r");
        $stock = fgets($file1r);
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("item1eg.txt", "w");
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
        $image = 'http://i5.walmartimages.ca/images/Thumbnails/681/1_1/999999-888863126811_1.jpg';
        $name = 'Acer Aspire 15.6" Notebook with AMD A6-7310 Quad-Core Processor';
        $price = 468 * $quantity;

        $file2r = fopen("item2eg.txt", "r");
        $stock = fgets($file2r);
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("item2eg.txt", "w");
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
    } else if(isset($_GET['quantity3'])) {
        $quantity = $_GET['quantity3'];
        $image = 'http://i5.walmartimages.ca/images/Thumbnails/191/321/999999-650590191321.jpg';
        $name = 'Lexar JumpDrive S70 32B USB Flash';
        $price = 34.88 * $quantity;

        $file3r = fopen("item3eg.txt", "r");
        $stock = fgets($file3r);
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file3w = fopen("item3eg.txt", "w");
        fwrite($file3w, $stock);
        fclose($file3w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity4'])) {
        $quantity = $_GET['quantity4'];
        $image = 'http://i5.walmartimages.ca/images/Thumbnails/321/082/1321082.jpg';
        $name = 'Cruzer Glide USB Flash Drive - 16GB';
        $price = 10.98 * $quantity;

        $file4r = fopen("item4eg.txt", "r");
        $stock = fgets($file4r);
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("item4eg.txt", "w");
        fwrite($file4w, $stock);
        fclose($file4w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity5'])) {
        $quantity = $_GET['quantity5'];
        $image = 'http://i5.walmartimages.ca/images/Thumbnails/321/084/1321084.jpg';
        $name = 'Cruzer Glide USB Flash Drive - 64GB';
        $price = 24.98 * $quantity;

        $file5r = fopen("item5eg.txt", "r");
        $stock = fgets($file5r);
        $stock -= $quantity;
        $_SESSION['stock5'] = $stock;
        fclose($file5r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='5'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='5'";
        mysql_query($sqlupdate, $connection);

        $file5w = fopen("item5eg.txt", "w");
        fwrite($file5w, $stock);
        fclose($file5w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity6'])) {
        $quantity = $_GET['quantity6'];
        $image = 'http://i5.walmartimages.ca/images/Thumbnails/191/314/999999-650590191314.jpg';
        $name = 'Lexar JumpDrive S70 16B USB Flash';
        $price = 14.88 * $quantity;

        $file6r = fopen("item6eg.txt", "r");
        $stock = fgets($file6r);
        $stock -= $quantity;
        $_SESSION['stock6'] = $stock;
        fclose($file6r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='6'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='6'";
        mysql_query($sqlupdate, $connection);

        $file6w = fopen("item6eg.txt", "w");
        fwrite($file6w, $stock);
        fclose($file6w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity7'])) {
        $quantity = $_GET['quantity7'];
        $image = 'http://globintech.com/wp-content/uploads/2016/04/17.jpg';
        $name = 'Acer Aspire S7';
        $price = 511.00 * $quantity;

        $file7r = fopen("item7eg.txt", "r");
        $stock = fgets($file7r);
        $stock -= $quantity;
        $_SESSION['stock7'] = $stock;
        fclose($file7r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='7'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='7'";
        mysql_query($sqlupdate, $connection);

        $file7w = fopen("item7eg.txt", "w");
        fwrite($file7w, $stock);
        fclose($file7w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity8'])) {
        $quantity = $_GET['quantity8'];
        $image = 'http://localhost/Santa%20Sleigh/MMY32_AV1_JET_BLACK.jpeg';
        $name = 'iPhone 7 Jet Black';
        $price = 1029 * $quantity;

        $file8r = fopen("item8eg.txt", "r");
        $stock = fgets($file8r);
        $stock -= $quantity;
        $_SESSION['stock8'] = $stock;
        fclose($file8r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='8'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='8'";
        mysql_query($sqlupdate, $connection);

        $file8w = fopen("item8eg.txt", "w");
        fwrite($file8w, $stock);
        fclose($file8w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity9'])) {
        $quantity = $_GET['quantity9'];
        $image = 'http://multimedia.bbycastatic.ca/multimedia/products/150x150/103/10389/10389797.jpg';
        $name = 'Bose SoundLink II Over-Ear Wireless Headphones with Mic - Black';
        $price = 249.99 * $quantity;

        $file9r = fopen("item9eg.txt", "r");
        $stock = fgets($file9r);
        $stock -= $quantity;
        $_SESSION['stock9'] = $stock;
        fclose($file8r);

        $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='9'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockeg_tbl SET stock_quantity='$stock' WHERE stock_id='9'";
        mysql_query($sqlupdate, $connection);

        $file9w = fopen("item9eg.txt", "w");
        fwrite($file9w, $stock);
        fclose($file9w);

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
    
    header('Location: everyonegiftsmember.php');
?>