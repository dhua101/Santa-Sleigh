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

        img {
            width: 50%;
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
            <li><a href="santasleigh.php" class="w3-white"><img src="http://localhost/Santa%20Sleigh/logo.jpg" style="width:16%" class="fa fa-home w3-margin-right"></a></li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="Go back to Homepage">
            </form></li>
            <li class="w3-hide-small w3-right"><a href="contact.php" class="w3-hover-red" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
            <li class="w3-hide-small w3-right"><a href="shoppingcart.php" class="w3-hover-red" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <div class="w3-dropdown-hover w3-right">
                <button class="w3-btn w3-black">Gift Cards</button>
                <div class="w3-dropdown-content w3-border">
                    <img src="http://localhost/Santa%20Sleigh/merrychristmas.jpg" style="width:25%">
                    <img src="http://localhost/Santa%20Sleigh/happyholiday.jpg" style="width:25%">
                    <p><b>$10, $20, $25, $50, and $100 Gift Cards Available</b></p>
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

    <div class="w3-main" style="margin-top:100px;">
        <?php
            error_reporting(0);

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

            $searchitem = $_POST['search'];

            $sql = "SELECT * FROM items_tbl WHERE item_name LIKE '%{$searchitem}%'";
            $query = mysql_query($sql, $connection);

            $sqlnumber = "SELECT COUNT(*) FROM items_tbl WHERE item_name LIKE '%{$searchitem}%'";

            
            echo "<table align='center' style='border:1px solid black'>";
            echo "<tr><th style='border:1px solid black'>Item ID</th><th style='border:1px solid black'>Item Image</th><th style='border:1px solid black'>Item Name</th><th style='border:1px solid black'>Item Price</th></tr>";

            while($row1 = mysql_fetch_assoc($query, MYSQL_ASSOC)) {
                echo "<tr><td style='border:1px solid black'>" . $row1['item_id'] . "</td><td style='border:1px solid black'><img src=" . $row1['image'] ."></td><td style='border:1px solid black'>" . $row1['item_name'] . "</td><td style='border:1px solid black'>" . $row1['item_price'] . "</td></tr>";
            }

            echo "</table>";

            mysql_close($connection);
        ?>
    </div>

    <br>

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

    //1. set ul width 
    //2. image when click prev/next button
    var ul;
    var liItems;
    var imageNumber;
    var imageWidth;
    var prev, next;
    var currentPostion = 0;
    var currentImage = 0;


    function init(){
        ul = document.getElementById('image_slider');
        liItems = ul.children;
        imageNumber = liItems.length;
        imageWidth = liItems[0].children[0].clientWidth;
        ul.style.width = parseInt(imageWidth * imageNumber) + 'px';
        prev = document.getElementById("prev");
        next = document.getElementById("next");
        generatePager(imageNumber);
        //.onclike = slide(-1) will be fired when onload;
        /*
        prev.onclick = function(){slide(-1);};
        next.onclick = function(){slide(1);};*/
        prev.onclick = function(){ onClickPrev();};
        next.onclick = function(){ onClickNext();};
    }

    function animate(opts){
        var start = new Date;
        var id = setInterval(function(){
            var timePassed = new Date - start;
            var progress = timePassed / opts.duration;
            if (progress > 1){
                progress = 1;
            }
            var delta = opts.delta(progress);
            opts.step(delta);
            if (progress == 1){
                clearInterval(id);
                opts.callback();
            }
        }, opts.delay || 17);
        //return id;
    }

    function slideTo(imageToGo){
        var direction;
        var numOfImageToGo = Math.abs(imageToGo - currentImage);
        // slide toward left

        direction = currentImage > imageToGo ? 1 : -1;
        currentPostion = -1 * currentImage * imageWidth;
        var opts = {
            duration:1000,
            delta:function(p){return p;},
            step:function(delta){
                ul.style.left = parseInt(currentPostion + direction * delta * imageWidth * numOfImageToGo) + 'px';
            },
            callback:function(){currentImage = imageToGo;}	
        };
        animate(opts);
    }

    function onClickPrev(){
        if (currentImage == 0){
            slideTo(imageNumber - 1);
        } 		
        else{
            slideTo(currentImage - 1);
        }		
    }

    function onClickNext(){
        if (currentImage == imageNumber - 1){
            slideTo(0);
        }		
        else{
            slideTo(currentImage + 1);
        }		
    }

    function generatePager(imageNumber){	
        var pageNumber;
        var pagerDiv = document.getElementById('pager');
        for (i = 0; i < imageNumber; i++){
            var li = document.createElement('li');
            pageNumber = document.createTextNode(parseInt(i + 1));
            li.appendChild(pageNumber);
            pagerDiv.appendChild(li);
            // add event inside a loop, closure issue.
            li.onclick = function(i){
                return function(){
                    slideTo(i);
                }
            }(i);
        }	
        var computedStyle = document.defaultView.getComputedStyle(li, null);
        //border width 1px; offsetWidth = 22
        var liWidth = parseInt(li.offsetWidth);
        var liMargin = parseInt(computedStyle.margin.replace('px',""));
        pagerDiv.style.width = parseInt((liWidth + liMargin * 2) * imageNumber) + 'px';
    }
    window.onload = init;
    </script>
</body>
</html>