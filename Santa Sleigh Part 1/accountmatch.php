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
            margin-top:125px;
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
    
    <div class="w3-main topmargin" method="POST">
        <div class="w3-panel">
            <h1><center>Account Sign Up</center></h1>
        </div>

        <div class="w3-panel">
            <form action="signup.php" method="get">
                username <font color="red">*</font><br>
                <input type="text" name="user" id="user"><br>
                password <font color="red">*</font><br>
                <input type="password" name="pass" id="pass"><br>
                confirm password <font color="red">*</font><br>
                <input type="password" name="confirm" id="confirm"><br>
                <input type="submit" name="submit" id="submit" value="Sign Up">
            </form>

            <font color="red">passwords doesn't match. Try again</font>
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