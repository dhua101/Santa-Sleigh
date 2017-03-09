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
        $image = 'https://us-i5.tb.wal.co/asr/7e952054-bcee-473f-94e5-9e87982ff6a6_1.58fb4ae6dec9b2fd73b5cf79c5d307a9.jpeg?odnWidth=180&odnHeight=180&odnBg=ffffff';
        $name = 'National Tree Pre-Lit 12 feet Tiffany Fir Hinged Artificial Christmas Tree with 1400';
        $price = 939.99 * $quantity;

        $file1r = fopen("item1.txt", "r");
        $stock = fgets($file1r);
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("item1.txt", "w");
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
        $image = 'https://us-i5.tb.wal.co/asr/568b6900-1cea-4546-96dd-08ce728d6a5d_1.2298c14306e00ac57e6449327758ad8d.jpeg?odnWidth=180&odnHeight=180&odnBg=ffffff';
        $name = 'National Tree Pre-Lit 7-1/2 feet Feel-Real Downswept Douglas Fir Hinged Artificial';
        $price = 268.52 * $quantity;

        $file2r = fopen("item2.txt", "r");
        $stock = fgets($file2r);
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("item2.txt", "w");
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
        $image = 'https://us-i5.tb.wal.co/asr/649c7c9f-389c-4c41-8d54-aec005398f56_1.9e97bb91e6ebbba6a256a5ad9dfa8dcf.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff';
        $name = 'Holiday Time Pre-Lit 4 feet Blue Tinsel Artificial Christmas Tree, Clear Lights';
        $price = 25.00 * $quantity;

        $file3r = fopen("item3.txt", "r");
        $stock = fgets($file3r);
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file3w = fopen("item3.txt", "w");
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
    } else if(isset($_GET['quantity2'])) {
        $quantity = $_GET['quantity2'];
        $image = 'https://us-i5.tb.wal.co/asr/5fc1416f-1fbb-4876-bb3e-41546f3f829b_1.27fefb99ef2ca749b712fce51b0e63e2.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff';
        $name = '9 feet Pre-Lit Slim Red Ashley Spruce Artificial Christmas Tree - Red Lights';
        $price = 803.74 * $quantity;

        $file4r = fopen("item4.txt", "r");
        $stock = fgets($file4r);
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("item4.txt", "w");
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
        $image = 'http://s7d9.scene7.com/is/image//TheBay//400882603045_main?$THUMBLARGE$';
        $name = 'Woodland Sparkle Pre-lit 24 Inch Wreath';
        $price = 67.49 * $quantity;

        $file5r = fopen("item5.txt", "r");
        $stock = fgets($file5r);
        $stock -= $quantity;
        $_SESSION['stock5'] = $stock;
        fclose($file5r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='5'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='5'";
        mysql_query($sqlupdate, $connection);

        $file5w = fopen("item5.txt", "w");
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
        $image = 'http://s7d9.scene7.com/is/image//TheBay//859161026837_main?$THUMBLARGE$';
        $name = 'Caribou Multi Stripe Stocking';
        $price = 28.00 * $quantity;

        $file6r = fopen("item6.txt", "r");
        $stock = fgets($file6r);
        $stock -= $quantity;
        $_SESSION['stock6'] = $stock;
        fclose($file6r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='6'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='6'";
        mysql_query($sqlupdate, $connection);

        $file6w = fopen("item6.txt", "w");
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
        $image = 'http://www.ikea.com/PIAimages/0456377_PE604069_S3.JPG';
        $name = 'FENOMEN: Unscented Block Candle, Set of 5';
        $price = 8.99 * $quantity;

        $file7r = fopen("item7.txt", "r");
        $stock = fgets($file7r);
        $stock -= $quantity;
        $_SESSION['stock7'] = $stock;
        fclose($file7r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='7'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='7'";
        mysql_query($sqlupdate, $connection);

        $file7w = fopen("item7.txt", "w");
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
        $image = 'http://www.ikea.com/PIAimages/0419161_PE576134_S3.JPG';
        $name = 'KRUSIDULLER: Gift Ribbon, 3 Pack';
        $price = 1.99 * $quantity;

        $file8r = fopen("item8.txt", "r");
        $stock = fgets($file8r);
        $stock -= $quantity;
        $_SESSION['stock8'] = $stock;
        fclose($file8r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='8'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='8'";
        mysql_query($sqlupdate, $connection);

        $file8w = fopen("item8.txt", "w");
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
        $image = 'http://www.ikea.com/PIAimages/0456505_PE604125_S3.JPG';
        $name = 'VINTER 2016: Scented Candle in Glass';
        $price = 2.99 * $quantity;

        $file9r = fopen("item9.txt", "r");
        $stock = fgets($file9r);
        $stock -= $quantity;
        $_SESSION['stock9'] = $stock;
        fclose($file9r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='9'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='9'";
        mysql_query($sqlupdate, $connection);

        $file9w = fopen("item9.txt", "w");
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
    } else if(isset($_GET['quantity10'])) {
        $quantity = $_GET['quantity10'];
        $image = 'http://www.toysrus.ca/graphics/product_images/pTRUCA1-24204038_alternate1_t130.jpg';
        $name = 'Ever After High - Friends Ever After Dolls 4-Pack';
        $price = 27.97 * $quantity;

        $file10r = fopen("item10.txt", "r");
        $stock = fgets($file10r);
        $stock -= $quantity;
        $_SESSION['stock10'] = $stock;
        fclose($file10r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='10'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='10'";
        mysql_query($sqlupdate, $connection);

        $file10w = fopen("item10.txt", "w");
        fwrite($file10w, $stock);
        fclose($file10w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity11'])) {
        $quantity = $_GET['quantity11'];
        $image = 'http://www.toysrus.ca/graphics/product_images/pTRUCA1-23588221_alternate1_t130.jpgg';
        $name = 'Littlest Pet Shop Slumber Party Fun';
        $price = 34.99 * $quantity;

        $file11r = fopen("item11.txt", "r");
        $stock = fgets($file11r);
        $stock -= $quantity;
        $_SESSION['stock11'] = $stock;
        fclose($file11r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='11'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='11'";
        mysql_query($sqlupdate, $connection);

        $file11w = fopen("item11.txt", "w");
        fwrite($file11w, $stock);
        fclose($file11w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity12'])) {
        $quantity = $_GET['quantity12'];
        $image = 'http://www.toysrus.ca/graphics/product_images/pTRUCA1-25018284t130.jpg';
        $name = 'Tekno Robotic Pets - Newborn Puppy - Black';
        $price = 19.99 * $quantity;

        $file12r = fopen("item12.txt", "r");
        $stock = fgets($file12r);
        $stock -= $quantity;
        $_SESSION['stock12'] = $stock;
        fclose($file12r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='12'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='12'";
        mysql_query($sqlupdate, $connection);

        $file12w = fopen("item12.txt", "w");
        fwrite($file12w, $stock);
        fclose($file12w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity13'])) {
        $quantity = $_GET['quantity13'];
        $image = 'http://s7d4.scene7.com/is/image/keurig/k84b_brewer_k50e?scl=1&fmt=png-alpha';
        $name = 'KEURIG Coffee Brewer Machine';
        $price = 59.99 * $quantity;

        $file13r = fopen("item13.txt", "r");
        $stock = fgets($file13r);
        $stock -= $quantity;
        $_SESSION['stock13'] = $stock;
        fclose($file13r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='13'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='13'";
        mysql_query($sqlupdate, $connection);

        $file13w = fopen("item13.txt", "w");
        fwrite($file13w, $stock);
        fclose($file13w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);
        
        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity14'])) {
        $quantity = $_GET['quantity14'];
        $image = 'http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=33001742';
        $name = 'Cookie Maker';
        $price = 29.99 * $quantity;

        $file14r = fopen("item14.txt", "r");
        $stock = fgets($file14r);
        $stock -= $quantity;
        $_SESSION['stock14'] = $stock;
        fclose($file14r);

        $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='14'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stock_tbl SET stock_quantity='$stock' WHERE stock_id='14'";
        mysql_query($sqlupdate, $connection);

        $file14w = fopen("item14.txt", "w");
        fwrite($file14w, $stock);
        fclose($file14w);

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
    
    header('Location: santasleighmember.php');
?>