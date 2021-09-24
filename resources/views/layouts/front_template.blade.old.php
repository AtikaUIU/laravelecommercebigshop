<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{ asset('/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="{{ asset('/js/jstarbox.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                    starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                    } 
                })
            });
        });
        </script>
<!---//End-rate---->

</head>
<body>
<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

        <div class="container">
            <div class="logo">
                <h1 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
            </div>
            <div class="head-t">
                <ul class="card">
                    <li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                    <li><a href="login.html" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                    <li><a href="register.html" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                    <li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
                    <li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
                    <li><a href="{{ url('lang/en') }}" ><i class="fa fa-ship" aria-hidden="true"></i>EN</a></li>
                    <li><a href="{{ url('lang/bn') }}" ><i class="fa fa-ship" aria-hidden="true"></i>BN</a></li>

                </ul>   
            </div>
            
            <div class="header-ri">
                <ul class="social-top">
                    <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                </ul>   
            </div>
        

                <div class="nav-top">
                    <nav class="navbar navbar-default">
                    
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        

                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav ">
                            <li class=" active"><a href="{{ url('/') }}" class="hyper "><span>Home</span></a></li>  
                            
                            @include('category_menu')
                            
                            <li><a href="codes.html" class="hyper"> <span>Codes</span></a></li>
                            <li><a href="{{ route('pages', 'contact_us') }}" class="hyper"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    </nav>
                     <div class="cart" >
                    
                        <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                    
                </div>          
</div>

@yield('content')


<!--footer-->
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grid">
            <h3>About Us</h3>
            <p>Nam libero tempore, cum soluta nobis est eligendi 
                optio cumque nihil impedit quo minus id quod maxime 
                placeat facere possimus.</p>
        </div>
        <div class="col-md-3 footer-grid ">
            <h3>Menu</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="kitchen.html">Kitchen</a></li>
                <li><a href="care.html">Personal Care</a></li>
                <li><a href="hold.html">Household</a></li>                       
                <li><a href="codes.html">Short Codes</a></li> 
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grid ">
            <h3>Customer Services</h3>
            <ul>
                <li><a href="shipping.html">Shipping</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
                <li><a href="faqs.html">Faqs</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="offer.html">Online Shopping</a></li>                        
                 
            </ul>
        </div>
        <div class="col-md-3 footer-grid">
            <h3>My Account</h3>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
                
            </ul>
        </div>
        <div class="clearfix"></div>
            <div class="footer-bottom">
                <h2 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
                <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                <ul class="social-fo">
                    <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
                <div class=" address">
                    <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>  
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                    
                    </div>
            </div>
        <div class="copy-right">
            <p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer-->

@yield('page_specific_js')

<!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */                              
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
        <script src="{{ asset('/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="{{ asset('/js/jquery.mycart.js') }}"></script>
  <script type="text/javascript">

    $(document).ready(function(){
        $('ul li a').click(function(){
            var menu_title = $(this).find('span').text();
            localStorage.setItem('active_menu', menu_title);
        });
    });

    $(window).on("load", function() {
        var active_menu = localStorage.getItem('active_menu');
        $('ul li').removeClass('active');
        $('ul li a').each(function(index){
            //console.log($(this).find('span').text());
            if($(this).find('span').text() == active_menu){
                $(this).parent().addClass('active');
            }
        })

    });



  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
  
</body>
</html>