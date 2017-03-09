<?php
    session_start();
    $stock = '';
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
            <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-red" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
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
            <p>Thank you for shopping here at Santa Sleigh. Here is your recipt. Please save a copy for your reference.</p>
            
            <div class="w3-panel">
                <?php
                    error_reporting(E_ALL ^ E_DEPRECATED);

                    $filer = fopen("things.txt", "r");
                    $sale = fopen("sale.txt", "a");
                    $buyer = fopen('buyer.txt', 'a');
                    $datebuy = date("M d, Y H:i:sa");
                    $dateday = date ("M d, Y");
                    $items_num = 0;
                    
                    $quantity = '';
                    $file = fopen('cart.txt', 'a');
                    $purchase = fopen('purchase.txt', 'a');
                    $stuff = fopen("things.txt", "a");
                    $stock = '';
                    $sold_quantity = 0;

                    fwrite($buyer, $datebuy . PHP_EOL);
                    fwrite($sale, $datebuy . PHP_EOL);

                    while(!feof($filer)) {
                        $name = fgets($filer);
                        $quantity = fgets($filer);
                        $price = fgets($filer);

                        echo "<div class='w3-threequarter'><div class='w3-left'>";
                        echo "$name($quantity)";
                        echo "</div></div>";
                        echo "<div class='w3-quarter'><div class='w3-right'>";
                        echo "$price";
                        echo "</div></div>";

                        fwrite($buyer, $name . PHP_EOL);
                        fwrite($buyer, $quantity . PHP_EOL);
                        fwrite($buyer, $price . PHP_EOL);

                        fwrite($sale, $name . PHP_EOL);
                        fwrite($sale, $quantity . PHP_EOL);
                        fwrite($sale, $price . PHP_EOL);

                        $items_num += $quantity;
                    }
                        
                    $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
                    fwrite($sale, $breaks . PHP_EOL);
                    fwrite($buyer, $breaks . PHP_EOL);

                    fclose($filer);
                    fclose($sale);
                    fclose($buyer);
                    
                ?>
            </div>

            <div class="w3-panel">
                <div class="w3-container w3-right">
                    <?=
                        error_reporting(E_ALL ^ E_DEPRECATED);
                        $filemoney = fopen("money.txt", "r");

                        $submoney = fgets($filemoney);
                        $taxmoney = fgets($filemoney);
                        $totalmoney = fgets($filemoney);

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

                        echo "Subtotal: $submoney <br>";
                        echo "HST: $taxmoney <br>";
                        echo "Total: $totalmoney <br>";

                        $sqlinsert = "INSERT INTO sales_tbl(total_items, total_price, total_tax, date_purchase) VALUES('$items_num','$totalmoney', '$taxmoney', '$datebuy')";

                        if(!mysql_query($sqlinsert, $connection)) {
                            die("New Record Creation Failed");
                        }

                        fclose($filemoney);
                        mysql_close($connection);
                    ?>
                </div>
            </div>

            <div class="w3-panel">
                <p>We'll email you the comfirmation right away. We'll also email you when it's available to pick up at your email (
                <?php
                    $fileemail = fopen("emails.txt", "r");
                    $email = fgets($fileemail);

                    echo "$email";

                    fclose($fileemail);
                ?>
                )</p>
            </div>

            <p>Done? Click the button to go back to the homepage.</p>
            <form action="close.php">
                <input type="submit" name="submit" value="Close">
            </form>
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