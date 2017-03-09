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
        $image = 'http://i5.walmartimages.ca/images/Thumbnails/111/439/999999-628915111439.jpg';
        $name = 'Holiday Time Tinsel Gift Box Wreath Blue';
        $price = 6.00 * $quantity;

        $file1r = fopen("item1gg.txt", "r");
        $stock = fgets($file1r);
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("item1gg.txt", "w");
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
        $image = 'http://i5.walmartimages.ca/images/Thumbnails/111/453/999999-628915111453.jpg';
        $name = 'Holiday Time Tinsel Gift Box Wreath Red';
        $price = 10.32 * $quantity;

        $file2r = fopen("item2gg.txt", "r");
        $stock = fgets($file2r);
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("item2gg.txt", "w");
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
        $image = 'http://scene7.targetimg1.com/is/image/Target/51192351?wid=360&hei=360&qlt=80&fmt=pjpgg';
        $name = 'Traditional Santa Gnome Christmas Ornament (Assorted Styles) - Wondershop';
        $price = 4.22 * $quantity;

        $file3r = fopen("item3gg.txt", "r");
        $stock = fgets($file3r);
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file3w = fopen("item3gg.txt", "w");
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
        $image = 'http://scene7.targetimg1.com/is/image/Target/50945286?wid=360&hei=360&qlt=80&fmt=pjpg';
        $name = '50ct 70mm Blue Silver Copper Shatterproof Christmas Ornament Set - Wondershop';
        $price = 21.10 * $quantity;

        $file4r = fopen("item4gg.txt", "r");
        $stock = fgets($file4r);
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("item4gg.txt", "w");
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
        $image = 'http://www.homedepot.com/catalog/productImages/400_compressed/da/da6f37e5-b193-4927-beda-f586819d8c1c_400_compressed.jpg';
        $name = 'Home Accents Holiday 150-Light LED Multi-Color Mini Light Set';
        $price = 5.88 * $quantity;

        $file5r = fopen("item5gg.txt", "r");
        $stock = fgets($file5r);
        $stock -= $quantity;
        $_SESSION['stock5'] = $stock;
        fclose($file5r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='5'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='5'";
        mysql_query($sqlupdate, $connection);

        $file5w = fopen("item5gg.txt", "w");
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
        $image = 'http://www.homedepot.com/catalog/productImages/400_compressed/cd/cd20b47f-ff08-415c-af88-2ec799315c8e_400_compressed.jpg';
        $name = '300-Light Multi-Color String-to-String Lights';
        $price = 8.48 * $quantity;

        $file6r = fopen("item6gg.txt", "r");
        $stock = fgets($file6r);
        $stock -= $quantity;
        $_SESSION['stock6'] = $stock;
        fclose($file6r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='6'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='6'";
        mysql_query($sqlupdate, $connection);

        $file6w = fopen("item6gg.txt", "w");
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
        $image = 'http://www.homedepot.com/catalog/productImages/400_compressed/ce/cef6afb6-a7a1-4c36-a9ad-3bdfce0af35f_400_compressed.jpg';
        $name = 'Home Accents Holiday 150-Light Multi-Color 72 in. x 48 in. Net Lights';
        $price = 8.98 * $quantity;

        $file7r = fopen("item7gg.txt", "r");
        $stock = fgets($file7r);
        $stock -= $quantity;
        $_SESSION['stock7'] = $stock;
        fclose($file7r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='7'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='7'";
        mysql_query($sqlupdate, $connection);

        $file7w = fopen("item7gg.txt", "w");
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
        $image = 'http://www.homedepot.com/catalog/productImages/400_compressed/c8/c866e0d7-037a-493d-b808-cf0ff8a76b7f_400_compressed.jpg';
        $name = 'LightShow 12-Light LED Multi-Color Color-Changing Icicle Light Set';
        $price = 21.98 * $quantity;

        $file8r = fopen("item8gg.txt", "r");
        $stock = fgets($file8r);
        $stock -= $quantity;
        $_SESSION['stock8'] = $stock;
        fclose($file8r);

        $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='8'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE stockgg_tbl SET stock_quantity='$stock' WHERE stock_id='8'";
        mysql_query($sqlupdate, $connection);

        $file8w = fopen("item8gg.txt", "w");
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
    }

    fclose($file);
    fclose($purchase);
    fclose($stuff);
    mysql_close($connection);
    
    header('Location: giftgivingmember.php');
?>