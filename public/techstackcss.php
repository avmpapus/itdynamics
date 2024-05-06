<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <html lang="en"> -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CSS | Itdynamics.com.ua</title>
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/css/animate.min.css" rel="stylesheet"> 
  <link href="public/css/font-awesome.min.css" rel="stylesheet">
  <link href="public/css/lightbox.css" rel="stylesheet">
  <link href="public/css/main.css" rel="stylesheet">
  <link id="css-preset" href="public/css/presets/preset1.css" rel="stylesheet">
  <link href="public/css/responsive.css" rel="stylesheet">
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
        <div class="item active" style="background-image: url('/public/images/slider/css/css.jpg')">
          <div class="caption">

          <div style="position:relative;left:-270px;">
<a href="/">Main</a> > CSS
</div>


            <h1 class="animated fadeInLeftBig">Base of our the projects</h1>
            <p class="animated fadeInRightBig">Shop development</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url('/public/images/slider/css/original.webp')">
          <div class="caption">

          <div style="position:relative;left:-270px;">
<a href="/">Main</a> > CSS
</div>

            <h1 class="animated fadeInLeftBig">Development websites <span>Itdynamics</span></h1>
            <p class="animated fadeInRightBig">Finish</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url('/public/images/slider/css/html-css-html5-css3-website-development-2018-735x380.webp')">
          <div class="caption">


          <div style="position:relative;left:-270px;">
<a href="/">Main</a> > CSS
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
            <h2><font color="black">CSS</font></h2>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-info">
            Technology CSS/CSS3 is base visual all our the projects on JS, PHP. 
            CSS is the language for describing the presentation of Web pages, including colors, layout, and fonts. 
            It is showing the beauty and position of the elements on page.
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
      

  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
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
      <!--<div class="footer-logo">
       <a class="navbar-brand" id="navbarbrand" href="#">
              <img class="img-responsive" src="/public/images/ico.png" width="50" id="itdlogo" alt="logo">
          </a>
          </div> -->
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