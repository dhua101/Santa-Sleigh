<!DOCTYPE html>
<html>
<head>
    <title>Santa's Sleigh</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-green.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Image-Slider-LnR.js"></script>
    <link rel="stylesheet" type="text/css" href="Image-Slider-LnR.css">

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
            width: 400px;
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
            <li><a href="santasleighmember.php" class="w3-white"><img src="http://localhost/Santa%20Sleigh/logo.jpg" style="width:16%" class="fa fa-home w3-margin-right"></a></li>
            <li class="w3-hide-small w3-left"><a href="searching.php" class="w3-hover-red" title="Search">
            <form action="searching.php" method="POST">
                <input type="text" id="search" name="search" placeholder="search item" style="width:425px; margin-top:42px;">
            </form></a></li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="Go back to Homepage">
            </form></li>
            <li class="w3-hide-small w3-right"><a href="contactmember.php" class="w3-hover-red" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
            <li class="w3-hide-small w3-right"><a href="shoppingcartmember.php" class="w3-hover-red" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <div class="w3-dropdown-hover w3-right">
                <button class="w3-btn w3-black">Gift Cards</button>
                <div class="w3-dropdown-content w3-border">
                    <img src="http://localhost/Santa%20Sleigh/merrychristmas.jpg" style="width:25%">
                    <img src="http://localhost/Santa%20Sleigh/happyholiday.jpg" style="width:25%">
                    <p><b>$10, $20, $25, $50, and $100 Gift Cards Available</b></p>
                </div>
            </div>
            <div style="margin-top:50px; margin-right:0px;">
                Welcome
                <?php
                    $filer = fopen("account.txt", "r");
                    $username = fgets($filer);
                    echo "$username";
                    fclose($filer);
                ?> |
                <a href="logout.php" style="width:250px;">Logout</a>
            </div>
        </ul>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
        <ul class="w3-navbar w3-left-align w3-theme">
            <li><a href="#">Search</a></li>
        </ul>
     </div>
    </div>

    <div class="w3-main" style="margin-top:100px;">
        <div class="w3-center">
            <h1>Home for the Holidays</h1>

            <p>If you want to leave, click this button.</p>
            <form action="exitmain.php">
                <input type="submit" name="exit" value="exit the site.">
            </form>
        </div>

        <p>All Laptops and Electronics are on sale starting $10.98.</p>

        <div class="w3-panel">
            <div class="w3-row">
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="https://i5.walmartimages.com/asr/d4635b4a-4c23-4e9f-9afe-5adf825c534a_1.4004f22addec632d0b21f2b9d5bc16d1.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff">

                            <p name="item1">Beats by Dr. Dre Studio Over-Ear Headphones</p>
                            <p>Price: $153.00</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='1'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    
                                    echo '
                            <form action="carteveryone.php"method="get">
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
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://i5.walmartimages.ca/images/Thumbnails/681/1_1/999999-888863126811_1.jpg" style="width:45%">

                            <p name="item2">Acer Aspire 15.6" Notebook with AMD A6-7310 Quad-Core Processor</p>
                            <p>Price: $468</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='2'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://i5.walmartimages.ca/images/Thumbnails/191/321/999999-650590191321.jpg" style="width:15%">

                            <p name="item3">Lexar JumpDrive S70 32B USB Flash</p>
                            <p>Price: $34.88</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='3'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
            </div>

            <div class="w3-row">
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://i5.walmartimages.ca/images/Thumbnails/321/082/1321082.jpg">

                            <p name="item4">Cruzer Glide USB Flash Drive - 16GB</p>
                            <p>Price: $10.98</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='4'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://i5.walmartimages.ca/images/Thumbnails/321/084/1321084.jpg" style="width:50%">

                            <p name="item5">Cruzer Glide USB Flash Drive - 64GB</p>
                            <p>Price: $24.98</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='5'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://i5.walmartimages.ca/images/Thumbnails/191/314/999999-650590191314.jpg" style="width:15%">

                            <p name="item6">Lexar JumpDrive S70 16B USB Flash</p>
                            <p>Price: $14.88</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='6'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
            </div>
            
            <div class="w3-row">
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://globintech.com/wp-content/uploads/2016/04/17.jpg" style="width:50%">

                            <p name="item7">Acer Aspire S7</p>
                            <p>Price: <s>$611.00</s> <font color="red">NOW $511.00 <b>SAVE $100</b></font></p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='7'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://localhost/Santa%20Sleigh/MMY32_AV1_JET_BLACK.jpeg" style="width:35%">

                            <p name="item8">iPhone 7 Jet Black</p>
                            <p>Price: $1029</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='8'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
                <div class="w3-third">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://multimedia.bbycastatic.ca/multimedia/products/150x150/103/10389/10389797.jpg" style="width:30%">

                            <p name="item9">Bose SoundLink II Over-Ear Wireless Headphones with Mic - Black</p>
                            <p>Price: $249.99</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockeg_tbl WHERE stock_id='9'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="carteveryone.php"method="get">
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
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
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
    </script>
</body>
</html>