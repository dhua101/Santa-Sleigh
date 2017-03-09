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
            margin-right: 1%;
            display: inline-block;
        }

        #leftside img {
            float: left;
            position: absolute;
            left: 0;
            top: 0;
            width: 25%;
            height: 105%;
            opacity: 0.5;
        }

        #rightside img {
            float: right;
            position: absolute;
            right: 0;
            top: 0;
            width: 25%;
            height: 105%;
            opacity: 0.5;
        }

        img.center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .topmargin {
            margin-top:50px;
        }

        .container{
            width:50%;
            height:425px;
            padding:15px;
            border:1px solid black;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
            background: #22f722;
            text-align: center;
            margin: 0 auto;
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
        <ul class="w3-navbar w3-theme w3-left-align">
            <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                <a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            </li>
            <li><a href="santasleigh.php" class="w3-red"><i class="fa fa-home w3-margin-right"></i>Santa's Sleigh</a></li>
            <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-black" title="Search"><i class="fa fa-search"></i></a></li>
            <li class="w3-hide-small w3-right"><a href="shoppingcart.php" class="w3-hover-black" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
        <ul class="w3-navbar w3-left-align w3-theme">
            <li><a href="#">Search</a></li>
        </ul>
     </div>
    </div>
    
    <div class="w3-main topmargin" method="POST">
        <div class="w3-center">
            <p>Looking for something? Type in the item that you are looking for and click on the search icon to search for stuff.</p>
            <br><br>
            <form action="searching.php" method="POST">
                <input type="text" name="search" placeholder="search item" style="width:500px">
                <input type="image" name="findthings" src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-128.png">
            </form>
        </div>
        <br><br>
        <div class="w3-center">
        </div>
    </div>

    <br><br>

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

