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
                <input type="text" name="search" id="search" placeholder="search item" style="width:425px; margin-top:42px;">
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
            <h1>The Gift Giving Sale!</h1>
        </div>

        <p>This is the gift giving sale. All Christmas Decorations are on sale for up 75% off in all Christmas essentials.</p>

        <div class="w3-panel">
            <div class="w3-row">
                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <div class="w3-panel w3-center">
                            <img src="http://i5.walmartimages.ca/images/Thumbnails/111/439/999999-628915111439.jpg">

                            <p name="item1">Holiday Time Tinsel Gift Box Wreath Blue</p>
                            <p>Price: <s>$12</s> <b><font color="red">50% off</font></b> <font color="red">$6.00</font></p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='1'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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
                            <img src="http://i5.walmartimages.ca/images/Thumbnails/111/453/999999-628915111453.jpg">

                            <p name="item2">Holiday Time Tinsel Gift Box Wreath Red</p>
                            <p>Price: <s>$12</s> <b><font color="red">14% off</font></b> <font color="red">$10.32</font></p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='2'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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
                            <img src="http://scene7.targetimg1.com/is/image/Target/51192351?wid=360&hei=360&qlt=80&fmt=pjpeg" style="width:65%;">

                            <p name="item3">Traditional Santa Gnome Christmas Ornament (Assorted Styles) - Wondershop</p>
                            <p>Price: $4.22</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='3'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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
                            <img src="http://scene7.targetimg1.com/is/image/Target/50945286?wid=360&hei=360&qlt=80&fmt=pjpeg" style="width:65%;">

                            <p name="item4">50ct 70mm Blue Silver Copper Shatterproof Christmas Ornament Set - Wondershop</p>
                            <p>Price: $21.10</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='4'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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
                            <img src="http://www.homedepot.com/catalog/productImages/400_compressed/da/da6f37e5-b193-4927-beda-f586819d8c1c_400_compressed.jpg" style="width:50%">

                            <p name="item5">Home Accents Holiday 150-Light LED Multi-Color Mini Light Set</p>
                            <p>Price:$5.88</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='5'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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
                            <img src="http://www.homedepot.com/catalog/productImages/400_compressed/cd/cd20b47f-ff08-415c-af88-2ec799315c8e_400_compressed.jpg" style="width:50%">

                            <p name="item6">300-Light Multi-Color String-to-String Lights</p>
                            <p>Price: $8.48</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='6'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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
                            <img src="http://www.homedepot.com/catalog/productImages/400_compressed/ce/cef6afb6-a7a1-4c36-a9ad-3bdfce0af35f_400_compressed.jpg" style="width:50%">

                            <p name="item7">Home Accents Holiday 150-Light Multi-Color 72 in. x 48 in. Net Lights</p>
                            <p>Price: $8.98</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='7'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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
                            <img src="http://www.homedepot.com/catalog/productImages/400_compressed/c8/c866e0d7-037a-493d-b808-cf0ff8a76b7f_400_compressed.jpg" style="width:50%">

                            <p name="item8">LightShow 12-Light LED Multi-Color Color-Changing Icicle Light Set</p>
                            <p>Price: $21.98</p>
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

                                $sqlstock = "SELECT stock_quantity FROM stockgg_tbl WHERE stock_id='8'";
                                $sqlquery = mysql_query($sqlstock, $connection);
                                $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                                if($stock['stock_quantity'] != 0) {
                                    echo "<font color='green'><i class='fa fa-check'></i> In stock online</font>";
                                    echo '
                            <form action="cartgift.php"method="get">
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