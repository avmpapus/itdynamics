<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <html lang="en"> -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>OpenCart Development | Itdynamics.com.ua</title>
  <link href="/public/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public/css/animate.min.css" rel="stylesheet"> 
  <link href="/public/css/font-awesome.min.css" rel="stylesheet">
  <link href="/public/css/lightbox.css" rel="stylesheet">
  <link href="/public/css/main.css" rel="stylesheet">
  <link id="css-preset" href="/public/css/presets/preset1.css" rel="stylesheet">
  <link href="/public/css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="/public/images/ico.png">
</head><!--/head-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  /******geolocation*****/
/* $.ajax({
  url: "https://get.geojs.io/v1/ip/geo.js",
  dataType: "jsonp",
  jsonpCallback:"geoip",
  success: function(data) {
    document.getElementById("loc").innerHTML="IP: "+data.ip+"<br>Country: "+data.country+"<br>Country Code: "+data.country_code;
  }
}); */


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbarbrand").style.top = "-10px";
    document.getElementById("navbarbrand").style.display="block";
    document.getElementById("navbarbrand").style.left = "230px";
  } else {
    document.getElementById("navbarbrand").style.top = "10px";
    document.getElementById("navbarbrand").style.display="none";
  }
  prevScrollpos = currentScrollPos;
}
</script>



<style type="text/css">
img {
      margin: auto;
      display: block;
      width: 100%;
    }

.rounded-img{
width:100%;
padding:0.6em;
}



.card{
background-size:100%;
background:#ffffff;
height:370px;
display:block;
overflow: hidden;
}

.card:hover{

   overflow: visible;
   text-overflow: ellipsis;
    }

/**************/



#navbarbrand {
  /*background-color: #333; /* Черный цвет фона */
  position: fixed; /* Сделайте его липким/фиксированным */
  top: 10px; /* Оставайтесь на вершине */
  width: 16%; /* Полная ширина */
  transition: top 0.3s; /* Эффект перехода при скольжении вниз (и вверх) */
  left:450px;
  /*left:695px;*/
}

/* Стиль ссылок навигационной панели */
#navbarbrand a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 15px;
  text-decoration: none;
}

#navbarbrand a:hover {
  background-color: #ddd;
  color: black;
  
}
 </style>



<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url('/public/images/slider/opencart/OpenCart_Screenshot_24.4.2015.png')">
          <div class="caption">

          <div style="position:relative;left:-270px;">
<a href="/">Main</a> > OpenCart
</div>


            <h1 class="animated fadeInLeftBig">Work with <span>OpenCart</span></h1>
            <p class="animated fadeInRightBig">Shop development</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url('/public/images/slider/opencart/hero-image.png')">
          <div class="caption">

          <div style="position:relative;left:-270px;">
<a href="/">Main</a> > OpenCart
</div>

            <h1 class="animated fadeInLeftBig">Development websites <span>Itdynamics</span></h1>
            <p class="animated fadeInRightBig">Finish</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url('/public/images/slider/opencart/opencart.jpg')">
          <div class="caption">


          <div style="position:relative;left:-270px;">
<a href="/">Main</a> > OpenCart
</div>

            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Error correction</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="responsive">
          <a class="navbar-brand" id="navbarbrand" href="#">
              <img class="img-responsive" src="/public/images/ico.png" id="itdlogo" alt="logo">
          </a>     
          
        </div>                  
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->

    


  </header><!--/#home-->
  <section id="services">
    <div class="container">
        
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <!-- geolocation
              <div id="loc"></div>  
            -->
            <br>
           
            <h2><font color="black">OpenCart Development</font></h2>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-info">
              <p>If client a need to finish a project, we can help, we the neen just full information about.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-info">
              <p>If client a need to develop a project, we can help. We can develop detail the plane, what and how we will be do.
              The cost of the project depends on the amount of work and timing.
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-info">
              <p>We are garant technical and informaticaly support for year after finish the project.</p>
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </section><!--/#services-->
  





  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Garant support</h2>
          <p>After finish the project we are garanting support, it is error correct, development the project. 
            Cost will be addiction from complexity of work.</p>
        </div>
      </div>
      <!-- <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <a href="techstackopencart">
              <div class="single-table wow flipInY" style="background: url('/public/images/opencart.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="300ms">
            <br><br><br><br><br><br>
            <h3>OpenCart</h3>
            </div>
          </a>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" style="background: url('/public/images/node.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="500ms">
            <br><br><br><br><br><br>
            <h3>Node.JS</h3>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" style="background: url('/public/images/WordPress.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="800ms">
            <br><br><br><br><br><br>
            <h3>WordPress</h3>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" style="background: url('/public/images/Laravel.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="1100ms">
            <br><br><br><br><br><br>
            <h3>Laravel</h3>
            </div>
          </div>
        </div>

<br>

        <div class="col-sm-3">
            <div class="single-table wow flipInY" style="background: url('/public/images/php2.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="300ms">
            <br><br><br><br><br><br>
            <h3>PHP</h3>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" style="background: url('/public/images/js.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="500ms">
            <br><br><br><br><br><br>
            <h3>JS</h3>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" style="background: url('/public/images/html2.jpg') no-repeat;" data-wow-duration="1000ms" data-wow-delay="800ms">
            <br><br><br><br><br><br>
            <h3>HTML</h3>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" style="background: url('/public/images/css32.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="1100ms">
            <br><br><br><br><br><br>
            <h3>CSS</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  


  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>Case studies</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>5 Things to include in your psychologist or therapist website design<a href="#">
                    <img src="/public/images/psycology.webp">
                    <span></span></a></p>
                </div>
                <div class="item">
                  <p>Odoo, App CRM Español Open Source<a href="#">
                    <img src="/public/images/odoo-crm-ventas-openinnova.png">
                    <span></span></a></p>
                </div>
                <div class="item">                                
                <p>Commerce platform PayPal<a href="#">
                    <img src="/public/images/paypal.jpeg">
                    <span></span></a></p>
                </div>
                <div class="item">                                
                <p>Wallet system<a href="#">
                    <img src="/public/images/wallet.jpg">
                    <span></span></a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a> 
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Building Apps in 2023: Technologies, Costs, Tips</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Development</strong></span>
            </div>
            <div class="entry-content">
              <p>Discover the basics of IoT app development and how to launch your custom IoT solution with maximum efficiency by reading a guide by Itdynamic</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="images/blog/2.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
                  </div>
                </div>                               
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>                            
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-picture-o"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Wearable Trends: Personal and Business Use in 2023</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Development</strong></span>
            </div>
            <div class="entry-content">
              <p>Wearable IoT Trends: Personal and Business Use in 2022 Wearable devices remain one of the most popular trends of IoT, which in turn is also…</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-video-camera"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Ecommerce Website Development: What You Need to Know</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Development</strong></span>
            </div>
            <div class="entry-content">
              <p>With an estimated 12 million to 24 million active ecommerce sites around the world, it’s easy for an online store to get lost in the crowd...</p>
            </div>
          </div>                    
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>                
      </div>
    </div>
  </section>
  -->

  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Kosmonavtov street 18, fl. 105, 14034<br>Chernihiv, Ukraine </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +38 (095) 280 28 28  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:almp@i.ua"> almp@i.ua</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="/">www.itdynamics.com.ua</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
      <div class="footer-logo">
          <a href="/"><img class="img-responsive" src="/public/images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2023 Itdynamics.</p>
          </div>
          <div class="col-sm-6">
          <p class="pull-right" style="position:relative;left:-30px;">Designed by <a href="/">Itdynamics</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="/public/js/jquery.js"></script>
  <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="/public/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="/public/js/wow.min.js"></script>
  <script type="text/javascript" src="/public/js/mousescroll.js"></script>
  <script type="text/javascript" src="/public/js/smoothscroll.js"></script>
  <script type="text/javascript" src="/public/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="/public/js/lightbox.min.js"></script>
  <script type="text/javascript" src="/public/js/main.js"></script>

</body>
</html>