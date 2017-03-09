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
            margin-top:100px;
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
            <li class="w3-hide-small w3-left" id="search"><a href="searching.php" class="w3-hover-red" title="Search">
            <form action="searching.php" method="POST">
                <input type="text" name="search" placeholder="search item" style="width:425px; margin-top:42px;">
                <i class="fa fa-search" id="search-button"></i>
            </form></a></li>
            <li class="w3-hide-small w3-right">
            <form action="exitmain.php">
                <input type="submit" name="exit" value="exit the site.">
            </form></li>
            <li class="w3-hide-small w3-right"><a href="contact.php" class="w3-hover-red" title="Help"><i class="fa fa-question-circle" id="help"></i> Help</a></li>
            <li class="w3-hide-small w3-right"><a href="shoppingcart.php" class="w3-hover-red" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
            <div class="w3-dropdown-hover">
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
    
    <div class="w3-main topmargin" method="POST">
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
                            <img src="http://blog.babyblooms.co.uk/wp-content/uploads/2013/10/iStock_000017440426XSmall.jpg" style="width:50%;" class="center">
                        </div>
                        <div class="w3-twothird w3-border w3-center">
                            <h2>Gifts for Everyone!</h2>
                            <p>Everyone from children to teens to young adults to adults to elders are all for sale up to 50% off.</p>
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
            <div class="w3-accordion w3-light-grey">
                <button onclick="openItemList('tree')" class="w3-btn-block w3-left-align w3-theme-l1">Christmas Tree</button>
                <div id="tree" class="w3-accordion-content w3-container">
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="https://us-i5.tb.wal.co/asr/7e952054-bcee-473f-94e5-9e87982ff6a6_1.58fb4ae6dec9b2fd73b5cf79c5d307a9.jpeg?odnWidth=180&odnHeight=180&odnBg=ffffff">

                                    <p name="item1">National Tree Pre-Lit 12" Tiffany Fir Hinged Artificial Christmas Tree with 1400</p>
                                    <p>Price: $939.99</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity1" style="width:50px" id="quantity1"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="https://us-i5.tb.wal.co/asr/568b6900-1cea-4546-96dd-08ce728d6a5d_1.2298c14306e00ac57e6449327758ad8d.jpeg?odnWidth=180&odnHeight=180&odnBg=ffffff">

                                    <p name="item2">National Tree Pre-Lit 7-1/2' Feel-Real Downswept Douglas Fir Hinged Artificial</p>
                                    <p>Price: $268.52</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity2" style="width:50px" id="quantity2"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item2">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="https://us-i5.tb.wal.co/asr/649c7c9f-389c-4c41-8d54-aec005398f56_1.9e97bb91e6ebbba6a256a5ad9dfa8dcf.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff">

                                    <p name="item3">Holiday Time Pre-Lit 4' Blue Tinsel Artificial Christmas Tree, Clear Lights</p>
                                    <p>Price: $25.00</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity3" style="width:50px" id="quantity3"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item3">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="https://us-i5.tb.wal.co/asr/5fc1416f-1fbb-4876-bb3e-41546f3f829b_1.27fefb99ef2ca749b712fce51b0e63e2.jpeg?odnHeight=180&odnWidth=180&odnBg=ffffff">

                                    <p name="item4">9' Pre-Lit Slim Red Ashley Spruce Artificial Christmas Tree - Red Lights</p>
                                    <p>Price: $803.74</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity4" style="width:50px" id="quantity4"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item4">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button onclick="openItemList('wreath')" class="w3-btn-block w3-left-align w3-theme-l1">Wreath</button>
                <div id="wreath" class="w3-accordion-content w3-container">
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="http://s7d9.scene7.com/is/image//TheBay//400882603045_main?$THUMBLARGE$">

                                    <p name="item5">Woodland Sparkle Pre-lit 24 Inch Wreath</p>
                                    <p>Price: $67.49</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity5" style="width:50px" id="quantity5"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item5">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button onclick="openItemList('decoration')" class="w3-btn-block w3-left-align w3-theme-l1">Christmas Decorations</button>
                <div id="decoration" class="w3-accordion-content w3-container">
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="http://s7d9.scene7.com/is/image//TheBay//859161026837_main?$THUMBLARGE$">

                                    <p name="item6">Caribou Multi Stripe Stocking</p>
                                    <p>Price: $28.00</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity6" style="width:50px" id="quantity6"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item6">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="http://www.ikea.com/PIAimages/0456377_PE604069_S3.JPG">

                                    <p name="item7">FENOMEN: Unscented Block Candle, Set of 5</p>
                                    <p>Price: $8.99</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity7" style="width:50px" id="quantity7"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item7">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="http://www.ikea.com/PIAimages/0419161_PE576134_S3.JPG">

                                    <p name="item8">KRUSIDULLER: Gift Ribbon, 3 Pack</p>
                                    <p>Price: $1.99</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity8" style="width:50px" id="quantity8"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item8">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="w3-quarter">
                            <div class="w3-card-4">
                                <div class="w3-panel w3-center">
                                    <img src="http://www.ikea.com/PIAimages/0456505_PE604125_S3.JPG">

                                    <p name="item9">VINTER 2016: Scented Candle in Glass</p>
                                    <p>Price: $2.99</p>
                                    <form action="cart.php"method="get">
                                        Quantity: 
                                        <input type="text" name="quantity9" style="width:50px" id="quantity9"><br>
                                        <input type="submit" name="submit" value="Add to Cart" id="item9">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button onclick="openItemList('ornament')" class="w3-btn-block w3-left-align w3-theme-l1">Christmas Ornaments</button>
                <div id="ornament" class="w3-accordion-content w3-container">
                </div>

                <button onclick="openItemList('toy')" class="w3-btn-block w3-left-align w3-theme-l1">Toys</button>
                <div id="toy" class="w3-accordion-content w3-container">
                </div>

                <button onclick="openItemList('phones')" class="w3-btn-block w3-left-align w3-theme-l1">Electronics - Phones</button>
                <div id="phones" class="w3-accordion-content w3-container">
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

    function openItemList(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
</body>
</html>