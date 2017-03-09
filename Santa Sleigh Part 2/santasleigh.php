<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $stock = '';
    
    copy("item1.txt", "item1_backup.txt");
    copy("item2.txt", "item2_backup.txt");
    copy("item3.txt", "item3_backup.txt");
    copy("item4.txt", "item4_backup.txt");
    copy("item5.txt", "item5_backup.txt");
    copy("item6.txt", "item6_backup.txt");
    copy("item7.txt", "item7_backup.txt");
    copy("item8.txt", "item8_backup.txt");
    copy("item9.txt", "item9_backup.txt");
    copy("item10.txt", "item10_backup.txt");
    copy("item11.txt", "item11_backup.txt");
    copy("item12.txt", "item12_backup.txt");
    
    copy("item1eg.txt", "item1eg_backup.txt");
    copy("item2eg.txt", "item2eg_backup.txt");
    copy("item3eg.txt", "item3eg_backup.txt");
    copy("item4eg.txt", "item4eg_backup.txt");
    copy("item5eg.txt", "item5eg_backup.txt");
    copy("item6eg.txt", "item6eg_backup.txt");
    copy("item7eg.txt", "item7eg_backup.txt");
    copy("item8eg.txt", "item8eg_backup.txt");
    copy("item9eg.txt", "item9eg_backup.txt");
    
    copy("item1gg.txt", "item1gg_backup.txt");
    copy("item2gg.txt", "item2gg_backup.txt");
    copy("item3gg.txt", "item3gg_backup.txt");
    copy("item4gg.txt", "item4gg_backup.txt");
    copy("item5gg.txt", "item5gg_backup.txt");
    copy("item6gg.txt", "item6gg_backup.txt");
    copy("item7gg.txt", "item7gg_backup.txt");
    copy("item8gg.txt", "item8gg_backup.txt");

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

    $sqlrename1 = "CREATE TABLE stock_backup_tbl LIKE stock_tbl";
    $sqlrename2 = "CREATE TABLE stockeg_backup_tbl LIKE stockeg_tbl";
    $sqlrename3 = "CREATE TABLE stockgg_backup_tbl LIKE stockgg_tbl";
    $sqlnewname1 = mysql_query($sqlrename1, $connection);
    $sqlnewname2 = mysql_query($sqlrename2, $connection);
    $sqlnewname2 = mysql_query($sqlrename3, $connection);

    $sqlnewdata1 = "INSERT INTO stock_backup_tbl SELECT * FROM stock_tbl";
    $sqlnewdata2 = "INSERT INTO stockeg_backup_tbl SELECT * FROM stockeg_tbl";
    $sqlnewdata3 = "INSERT INTO stockgg_backup_tbl SELECT * FROM stockgg_tbl";
    $sqlinsert1 = mysql_query($sqlnewdata1, $connection);
    $sqlinsert2 = mysql_query($sqlnewdata2, $connection);
    $sqlinsert3 = mysql_query($sqlnewdata3, $connection);

    mysql_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Santa's Sleigh</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-green.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Image-Slider-LnR.js"></script>
    <link rel="stylesheet" type="text/css" href="Image-Slider-LnR.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        #image_slider img {
            float: left;
            width: 1350px;
            margin-right: 1%;
            display: inline-block;
        }

        #leftside img {
            float: left;
            position: absolute;
            left: 0;
            top: 0;
            width: 25%;
            height: 100%;
            opacity: 0.5;
        }

        #rightside img {
            float: right;
            position: absolute;
            right: 0;
            top: 0;
            width: 25%;
            height: 100%;
            opacity: 0.5;
        }

        #search-button {
            display: inline-block;
            width: 15px;
            height: 15px;
            left: -20px;
            top: 3px;
        }

        .banner {
            width: 100%;
            height: auto;
            padding: 10px;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            border: 1px solid black;
            text-align: center;
            background: red;
        }

        .salebanner {
            width: 100%;
            height: auto;
            padding: 10px;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            border: 1px solid black;
            text-align: center;
            background: green;
        }

        img.center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .topmargin {
            margin-top:25px;
        }

        .topbanmargin {
            margin-top: 85px;
        }

        .container{
            width:100%;
            height:425px;
            padding:15px;
            border:1px solid black;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
            background: #22f722;
            text-align: center;
        }
        .slider_wrapper{
            overflow: hidden;
            position:relative;
            height:350px;
            top:auto;
        }
        #image_slider{

            position: relative;
            height: auto;
            list-style: none;
            overflow: hidden;
            float: left;
            /*Chrom default padding for ul is 40px */
            padding:0px;
            margin:0px;
        }
        #image_slider li{
            position: relative;
            float: left;
        }
        .nvgt{
            position:absolute;
            top: 120px;
            height: 50px;
            width: 30px;
            opacity: 0.6;
        }
        .nvgt:hover{
            opacity: 0.9;
        }
        #prev{
            background: #000 url('https://dl.dropboxusercontent.com/u/65639888/image/prev.png') no-repeat center;
            left: 0px;
        }
        #next{
            background: #000 url('https://dl.dropboxusercontent.com/u/65639888/image/next.png') no-repeat center;
            right: 0px;
        }
        #pager{
            /* firefox has different center method. this doesn't work for fire fox */
            /* not in the center*/
            padding:0px;
            position:relative;
            height:50px;
            margin:auto;
            margin-top:10px;
        }
        #pager li{
            padding: 0px;
            margin:5px;
            width:20px;
            height:20px;
            border:1px solid red;
            color:red;
            list-style: none;
            opacity: 0.6;
            float:left;
            border-radius: 3px;
            cursor: pointer;
        }
        #pager li:hover{
            opacity:0.9;
        }

        #search{
            background: white url(https://d30y9cdsu7xlg0.cloudfront.net/png/6983-200.png) right no-repeat;
            padding-right: 25px;
            background-size: 20px 20px;
            width: 375px;
        }
        
        #button-holder{
            background-color:#f1f1f1;
            border-top:thin solid #e5e5e5;
            box-shadow:1px 1px 1px 1px #e5e5e5;
            cursor:pointer;
            float:left;
            height:27px;
            margin:11px 0 0 0;
            text-align:center;
            width:50px;
        }
        
        #button-holder img{
            margin:4px;
            width:20px; 
        }
    </style>
</head>
<body>
    <!-- Side Navigation on click -->
    <nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2" id="mySidenav">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-teal">Close
            <i class="fa fa-remove"></i>
        </a>
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
        <a href="#">Link 5</a>
    </nav>

    <!-- Navbar -->
    <div class="w3-top">
        <ul class="w3-navbar w3-white w3-left-align">
            <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                <a class="w3-hover-red w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            </li>
            <li><a href="#" class="w3-white"><img src="http://localhost/Santa%20Sleigh/logo.jpg" style="width:16%" class="fa fa-home w3-margin-right"></a></li>
            <li class="w3-hide-small w3-left"><a href="searching.php" class="w3-hover-red" title="Search">
            <form action="searching.php" method="POST">
                <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:425px margin-top:42px;">
            </form></a></li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="x">
            </form></li>
            <li class="w3-hide-small w3-right"><a href="contact.php" class="w3-hover-red" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
            <li class="w3-hide-small w3-right"><a href="shoppingcart.php" class="w3-hover-red" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <li class="w3-hide-small w3-right"><a href="accountsignin.php">Sign In</a></li>
            <div class="w3-dropdown-hover w3-right">
                <button class="w3-btn w3-black">Gift Cards</button>
                <div class="w3-dropdown-content w3-border">
                    <img src="http://localhost/Santa%20Sleigh/merrychristmas.jpg" style="width:25%">
                    <img src="http://localhost/Santa%20Sleigh/happyholiday.jpg" style="width:25%">
                    <p><b>$10, $20, $25, $50, and $100 Gift Cards available in stores purchase</b></p>
                </div>
            </div>
        </ul>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
        <ul class="w3-navbar w3-left-align w3-theme">
            <li><a href="#">Search</a></li>
        </ul>
     </div>
    </div>

    <div class="banner topbanmargin">
        <font color="white"><b>GIFT IDEAS FOR FAMILY & FRIENDS</b> | for most items <b> UP TO 50% OFF</b> | Christmas Tree | Wreaths | Decorations | Toys | Electronics </font>
    </div>
    
    <div class="w3-main topmargin" method="POST">
        <div class="container w3-center">
            <div id="sales" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#sales" data-slide-to="0" class="active"></li>
                    <li data-target="#sales" data-slide-to="1"></li>
                    <li data-target="#sales" data-slide-to="2"></li>
                    <li data-target="#sales" data-slide-to="3"></li>
                </ol>
                
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://localhost/Santa%20Sleigh/sale.jpg">
                    </div>
                    <div class="item">
                        <img src="http://localhost/Santa%20Sleigh/sales2.jpg">
                    </div>
                    <div class="item">
                        <img src="http://localhost/Santa%20Sleigh/sale3.jpg">
                    </div>
                    <div class="item">
                        <img src="http://localhost/Santa%20Sleigh/sale4.jpg">
                    </div>
                </div>

                <a class="left carousel-control" href="#sales" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#sales" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="w3-panel">
            <div class="w3-padding-16 w3-container">
                <div class="w3-row">
                    <div class="w3-card-8">
                        <div class="w3-third w3-border w3-center">
                            <img src="http://www.picgifs.com/graphics/c/christmas-decorations/graphics-christmas-decorations-623525.gif" style="width:50%;" class="center">
                        </div>
                        <div class="w3-twothird w3-border w3-center">
                            <h2>Gift-Giving Sale!</h2>
                            <p>All Christmas decorations are on sale for up to 75% off.</p>
                            <a class="w3-btn w3-theme-d3" href="giftgiving.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        
        <div class="w3-panel">
            <div class="w3-padding-16 w3-container">
                <div class="w3-row">
                    <div class="w3-card-8">
                        <div class="w3-third w3-border w3-center">
                            <img src="http://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c04462268.png" style="width:50%;" class="center">
                        </div>
                        <div class="w3-twothird w3-border w3-center">
                            <h2>Home for the Holidays</h2>
                            <p>All Laptops and Electronics starting at $10.98</p>
                            <a class="w3-btn w3-theme-d3" href="everyonegifts.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w3-center">
            <h4>Catalog</h4>
        </div>

        <div class="w3-panel">
            <div class="w3-row">
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="https://us-i5.tb.wal.co/asr/7e952054-bcee-473f-94e5-9e87982ff6a6_1.58fb4ae6dec9b2fd73b5cf79c5d307a9.jpeg?odnWidth=180&odnHeight=180&odnBg=ffffff">

                            <p name="item1">National Tree Pre-Lit 12" Tiffany Fir Hinged Artificial Christmas Tree with 1400</p>
                            <p>Price: $939.99</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='1'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity1" style="width:50px" id="quantity1"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item1">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="https://us-i5.tb.wal.co/asr/568b6900-1cea-4546-96dd-08ce728d6a5d_1.2298c14306e00ac57e6449327758ad8d.jpeg?odnWidth=180&odnHeight=180&odnBg=ffffff">

                            <p name="item2">National Tree Pre-Lit 7-1/2' Feel-Real Downswept Douglas Fir Hinged Artificial</p>
                            <p>Price: $268.52</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='2'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity2" style="width:50px" id="quantity2"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item2">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="https://us-i5.tb.wal.co/asr/649c7c9f-389c-4c41-8d54-aec005398f56_1.9e97bb91e6ebbba6a256a5ad9dfa8dcf.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff">

                            <p name="item3">Holiday Time Pre-Lit 4' Blue Tinsel Artificial Christmas Tree, Clear Lights</p>
                            <p>Price: $25.00</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='3'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity3" style="width:50px" id="quantity3"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item3">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="https://us-i5.tb.wal.co/asr/5fc1416f-1fbb-4876-bb3e-41546f3f829b_1.27fefb99ef2ca749b712fce51b0e63e2.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff">

                            <p name="item4">9' Pre-Lit Slim Red Ashley Spruce Artificial Christmas Tree - Red Lights</p>
                            <p>Price: $803.74</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='4'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity4" style="width:50px" id="quantity4"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item4">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="w3-row">
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://s7d9.scene7.com/is/image//TheBay//400882603045_main?$THUMBLARGE$">

                            <p name="item5">Woodland Sparkle Pre-lit 24 Inch Wreath</p>
                            <p>Price: $67.49</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='5'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity5" style="width:50px" id="quantity5"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item5">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://s7d9.scene7.com/is/image//TheBay//859161026837_main?$THUMBLARGE$">

                            <p name="item6">Caribou Multi Stripe Stocking</p>
                            <p>Price: $28.00</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='6'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity6" style="width:50px" id="quantity6"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item6">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://www.ikea.com/PIAimages/0456377_PE604069_S3.JPG">

                            <p name="item7">FENOMEN: Unscented Block Candle, Set of 5</p>
                            <p>Price: $8.99</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='7'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity7" style="width:50px" id="quantity7"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item7">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://www.ikea.com/PIAimages/0419161_PE576134_S3.JPG">

                            <p name="item8">KRUSIDULLER: Gift Ribbon, 3 Pack</p>
                            <p>Price: $1.99</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='8'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity8" style="width:50px" id="quantity8"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item8">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w3-row">
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://www.ikea.com/PIAimages/0456505_PE604125_S3.JPG" style="width:50%">

                            <p name="item9">VINTER 2016: Scented Candle in Glass</p>
                            <p>Price: $2.99</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='9'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity9" style="width:50px" id="quantity9"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item9">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://www.toysrus.ca/graphics/product_images/pTRUCA1-24204038_alternate1_t130.jpg">

                            <p name="item10">Ever After High - Friends Ever After Dolls 4-Pack</p>
                            <p>Price: $27.97</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='10'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity10" style="width:50px" id="quantity10"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item10">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://www.toysrus.ca/graphics/product_images/pTRUCA1-23588221_alternate1_t130.jpg">

                            <p name="item11">Littlest Pet Shop Slumber Party Fun</p>
                            <p>Price: $34.99</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='11'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity11" style="width:50px" id="quantity11"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item11">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://www.toysrus.ca/graphics/product_images/pTRUCA1-25018284t130.jpg">

                            <p name="item12">Tekno Robotic Pets - Newborn Puppy - Black</p>
                            <p>Price: $19.99</p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='12'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity12" style="width:50px" id="quantity12"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item12">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w3-row">
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://s7d4.scene7.com/is/image/keurig/k84b_brewer_k50e?scl=1&fmt=png-alpha" style="width:50%">

                            <p name="item13">KEURIG Coffee Brewer Machine</p>
                            <p>Price: <s>$79.99</s> <font color="red"><b>SAVE $20</b> $59.99</font></p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='13'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity13" style="width:50px" id="quantity13"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item13">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=33001742" style="width:70%">

                            <p name="item14">Cookie Maker</p>
                            <p>Price: <s>$39.99</s> <font color="red"><b>SAVE $10</b> $29.99</font></p>
                            <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);
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

                                mysql_select_db("santasleigh_db");

                                $sqlstock = "SELECT stock_quantity FROM stock_tbl WHERE stock_id='14'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cart.php"method="get">
                                Quantity: 
                                <input type="text" name="quantity14" style="width:50px" id="quantity14"><br>
                                <input type="submit" name="submit" value="Add to Cart" id="item14">
                            </form>';
                                } else {
                                    echo "<font color='red'><i class='fa fa-close'></i> out of stock</font>";
                                }

                                mysql_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1">
        <div class="w3-left">
            <div class="w3-panel">
                <div class="w3-row">
                    <div class="w3-quarter">
                        <img src="http://localhost/Santa%20Sleigh/shipping.jpg" style="width:50%">
                    </div>
                    <div class="w3-quarter">
                        <img src="http://localhost/Santa%20Sleigh/reserve.jpg" style="width:50%">
                    </div>
                    <div class="w3-quarter">
                        <img src="http://localhost/Santa%20Sleigh/lowestprice.jpg" style="width:50%">
                    </div>
                    <div class="w3-quarter">
                        <img src="http://localhost/Santa%20Sleigh/storelocations.jpg" style="width:50%">
                    </div>
                </div>
            </div>
        </div>

        <div class="w3-center">
            <div class="w3-panel">
                <h4>Follow Us</h4>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
                <a class="w3-btn-floating w3-theme-l3 w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

                <div style="position:relative;bottom:50px;z-index:1;" class="w3-tooltip w3-right">
                    <span class="w3-text w3-padding w3-red w3-hide-small">Go To Top</span>   
                    <a class="w3-btn w3-theme" href="#"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
                </div>

                <br>

                <a href="contact.php">Contact us</a>
            </div>
        </div>
    </footer>

    <!-- Script For Side Navigation -->
    <script>
    function w3_open() {
        var x = document.getElementById("mySidenav");
        x.style.width = "300px";
        x.style.textAlign = "center";
        x.style.fontSize = "40px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidenav").style.display = "none";
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
    }

    var ul;
    var li_items; 
    var li_number;
    var image_number = 0;
    var slider_width = 0;
    var image_width;
    var current = 0;
    function init(){	
        ul = document.getElementById('image_slider');
        li_items = ul.children;
        li_number = li_items.length;
        for (i = 0; i < li_number; i++){
            // nodeType == 1 means the node is an element.
            // in this way it's a cross-browser way.
            //if (li_items[i].nodeType == 1){
                //clietWidth and width???
                image_width = li_items[i].childNodes[0].clientWidth;
                slider_width += image_width;
                image_number++;
        }
        
        ul.style.width = parseInt(slider_width) + 'px';
        slider(ul);
    }

    function slider(){		
            animate({
                delay:25,
                duration: 4000,
                delta:function(p){return Math.max(0, -1 + 2 * p)},
                step:function(delta){
                        ul.style.left = '-' + parseInt(current * image_width + delta * image_width) + 'px';
                    },
                callback:function(){
                    current++;
                    if(current < li_number-1){
                        slider();
                    }
                    else{
                        var left = (li_number - 1) * image_width;					
                        setTimeout(function(){goBack(left)},2000); 				
                        setTimeout(slider, 4000);
                    }
                }
            });
    }
    function goBack(left_limits){
        current = 0;	
        setInterval(function(){
            if(left_limits >= 0){
                ul.style.left = '-' + parseInt(left_limits) + 'px';
                left_limits -= image_width / 10;
            }	
        }, 17);
    }
    function animate(opts){
        var start = new Date;
        var id = setInterval(function(){
            var timePassed = new Date - start;
            var progress = timePassed / opts.duration
            if(progress > 1){
                progress = 1;
            }
            var delta = opts.delta(progress);
            opts.step(delta);
            if (progress == 1){
                clearInterval(id);
                opts.callback();
            }
        }, opts.dalay || 17);
    }
    window.onload = init;
    </script>
</body>
</html>