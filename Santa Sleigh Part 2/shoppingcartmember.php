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
        .border {
            border-style: solid;
            border-width: 3px;
        }

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
                <input type="text" id="search" name="search" placeholder="search item" id='search-text-input' style="width:425px margin-top:42px;">
            </form></a></li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="Go back to Homepage">
            </form></li>
            <li class="w3-hide-small w3-right"><a href="contactmember.php" class="w3-hover-red" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
            <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-red" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
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
        <div class="w3-panel">
            <div class="w3-center">
                <h1>The Christmas Shopping Cart</h1>
                <p>Where everything you need to buy for a special someone is here.</p>
            </div>
            
            <div class="w3-threequarter border">
            <?php
                error_reporting(0);
                
                $submit = [
                    "submit1",
                    "submit2",
                    "submit3",
                    "submit4",
                    "submit5",
                    "submit6",
                    "submit7",
                    "submit8",
                    "submit9",
                    "submit10",
                    "submit11",
                    "submit12",
                    "submit13",
                    "submit14",
                    "submit15",
                    "submit16",
                    "submit17",
                    "submit18",
                    "submit19",
                    "submit20",
                    "submit21"
                ];

                $quantity = [
                    "quantity1",
                    "quantity2",
                    "quantity3",
                    "quantity4",
                    "quantity5",
                    "quantity6",
                    "quantity7",
                    "quantity8",
                    "quantity9",
                    "quantity10",
                    "quantity11",
                    "quantity12",
                    "quantity13",
                    "quantity14",
                    "quantity15",
                    "quantity16",
                    "quantity17",
                    "quantity18",
                    "quantity19",
                    "quantity20",
                    "quantity21"
                ];

                $x = 0;
                $y = 0;
                $sub = 0.00;
                $choices = array();

                echo "<div class='w3-threequarter'><div class='w3-center'>";
                echo "item";
                echo "</div></div>";
                echo "<div class='w3-quarter'><div class='w3-center'>";
                echo "price";
                echo "</div></div>";

                if (file_exists("cart.txt")) {
                    $file = fopen("cart.txt", "r");

                    while(!feof($file)) {
                        $sourceA = fgets($file);
                        $nameA = fgets($file);
                        $quantityA = fgets($file);
                        $priceA = fgets($file);

                        echo "<div class='w3-threequarter'><div class='w3-left'>";
                        echo "<img id='stuff' src=$sourceA> $nameA($quantityA)";
                        echo "</div></div>";
                        echo "<div class='w3-quarter'><div class='w3-left'>";
                        echo "$priceA";
                        echo "</div></div>";
                    }

                    fclose($file);
                }
                
                $list = file("purchase.txt");

                $sub = array_sum($list);
            ?>
            </div>
            <div class="w3-quarter border">
                <div class="w3-center">
                    <h5>Invoice</h5>
                </div>
                <div class="w3-twothird">
                    <p>Subtotal:</p>
                </div>
                <div class="w3-third">
                    <div class='w3-right'>
                    <p>$
                    <?=
                        $sub;

                        $filemoney = fopen("money.txt", "a");
                        $subtotal = "$" . $sub;
                        fputs($filemoney, $subtotal . PHP_EOL);
                        fclose($filemoney);
                    ?></p>
                    </div>
                </div>
                <div class="w3-twothird">
                    <p>HST:</p>
                </div>
                <div class="w3-third">
                    <div class='w3-right'>
                    <p>$
                    <?=
                        $tax = $sub * 0.13;

                        $filemoney = fopen("money.txt", "a");
                        $taxes = "$" . $tax;
                        fputs($filemoney, $taxes . PHP_EOL);
                        fclose($filemoney);

                        $filetax = fopen("tax.txt", "a");
                        $taxes1 = "$" . $tax;
                        $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
                        fputs($filetax, $taxes1 . PHP_EOL);
                        fputs($filetax, $breaks . PHP_EOL);
                        fclose($filetax);
                    ?></p>
                    </div>
                </div>
                <div class="w3-twothird">
                    <p>Total:</p>
                </div>
                <div class="w3-third">
                    <div class='w3-right'>
                    <p>$
                    <?=
                        $total = $sub + $tax;

                        $filemoney = fopen("money.txt", "a");
                        $totaltotal = "$" . $total;
                        fputs($filemoney, $totaltotal . PHP_EOL);
                        fclose($filemoney);
                    ?></p>
                    </div>
                </div>
            </div>
            <div class="w3-quarter border">
                <div class="w3-center">
                    <h5>Method of payment</h5>
                    <a href="orderformmastercard.php"><img src="https://usshortcodedirectory.com/wp-content/uploads/2016/03/www.mastercard.com_.png" name="mastercard"></a>
                    <a href="orderformvisa.php"><img src="https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Visa-128.png" name="visa"></a>
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
            <span class="w3-text w3-padding w3-theme-l2 w3-hide-small">Go To Top</span>   
            <a class="w3-btn w3-theme" href="shoppingcart.php"><span class="w3-xlarge">
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