<?php
/*проверка устройства с которого пользователь зашел на сайт*/
$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
  
 
?>


<!DOCTYPE html>
<html>
<head>
<title>Colossus</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="/public/layout/styles/menu.css" rel="stylesheet" type="text/css" media="all">
<link href="/public/layout/styles/img.css" rel="stylesheet" type="text/css" media="all">
<link href="/public/layout/styles/block.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

  <div class="row">
    <div class="header_box">
      <img src="layout/images/svg/bg.svg" alt="">
    </div>
  <div class="img-wrap">	
    <img src="/public/layout/images/demo/slides/background-image.png" class="img-responsive">
    <a href="/"><div style="position:relative;left:50px;top:-920px;color:black;font-size:30px;z-index:99999;">< Back</div></a>
    <h1>
    <?php if(!$mobile_browser > 0){?>
      <nav id="menu">
          <ul>        
              <li><a href="#logo">Обо мне</a></li>
              <li><a href="#about">Навыки</a></li>
              <li><a href="#portfolio">Услуги</a></li>
              <li><a href="#services">Портфолио</a></li>
              <li><a href="#gallery">Отзывы</a></li>
              <li><a href="#contact">Контакты</a></li>
          </ul>
      </nav>
      <?php
        }else{
            ?>
      <div id="menu" style="position:relative;top:-40px;left:70px;color:black;font-size:20px;">
              <a href="#logo" style="color:black;">Обо мне</a>
              <a href="#about" style="color:black;">Навыки</a>
              <a href="#portfolio" style="color:black;">Услуги</a>
              <a href="#services" style="color:black;">Портфолио</a>
              <a href="#gallery" style="color:black;">Отзывы</a>
              <a href="#contact" style="color:black;">Контакты</a>

</div>
<?php
    }
    ?>


<?php if(!$mobile_browser > 0){?>
      <div id="text">
        <font size="5">Привет, я Иван Иванов</font>
        <br>
          frontend-<br>
          разработчик 
          </div>
          <?php
        }else{
            ?>
    <div id="text" style="position:realative;top:0px;font-size:10px;">
        <font size="5">Привет, я Иван Иванов
        <br>
          frontend-<br>
          разработчик 
          </div></font>
          <?php
    }
    ?>
 </div>
</div>	  		
</div>
    </div>

      <main class="container nospace clear"> <h1>Обо мне</h1>
    <p>Приветствую всех на своём сайте! Меня зовут Иван, я из Киева. Занимаюсь фронтенд-разработкой более года. До разработки занимался нелюбимым делом, ходил на нелюбимую работу, не мог понять за что взяться, чтобы дело приносило удовольствие и деньги, пока не наткнулся на один интересный курс.</p>

    <p>С тех пор прошел огонь, воду и медные трубы. Учёба давалась по-разному: где-то легче, где-то сложнее.  Каждодневная работа над навыками и усердие, с которым я подходил к обучению, уже через несколько месяцев принесли плоды - я взял первый заказ на фрилансе. С отзывами клиентов и примерами работ можно ознакомиться ниже.
    </p>
      </main>
<br><br>
    <div class="wrapper row3">
      <main class="container nospace clear"> <h1>Навыки</h1>
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="group">
          <div class="one_half first paditout">
            <ul class="nospace group">
              <li class="btmspace-30">
                
                <article class="service largeicon">
                  <h6 class="heading">HTML&nbsp;&nbsp;<progress id="file" max="100" value="95" style="position:relative; height: 40px; width: 270px; top:10px;"></progress>
                </article>
              </li>
              <li class="btmspace-30">
                <article class="service largeicon">
                  <h6 class="heading">CSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <progress id="file" max="100" value="90" style="position:relative; height: 40px; width: 270px; top:10px;"></progress>
                </article>
              </li>
              <li>
                <article class="service largeicon">
                  <h6 class="heading">JS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <progress id="file" max="100" value="70" style="position:relative; height: 40px; width: 270px; top:10px;"></progress>
                </article>
              </li>
            </ul>
          </div>
          <div class="one_half"><a href="#"><img src="layout/images/demo/slides/portrait 2.png" alt=""></a></div>
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
      </main>
    </div>
    <div class="wrapper row2">
      <div id="services" class="clear"> 
        <main class="container nospace clear"> <h1>Услуги</h1></main>
        <br>
        <div class="group">
          <div class="one_third first">
            <article class="service"><img src="/public/images/demo/slides/13706.png" alt="" width="5">
              <h2 class="heading">Верстка проектов</h2>
              <p class="btmspace-10">Сделаю качественную вёрстку вашего  проекта по предоставленному макету или примеру</p>
              <p><a href="#">Read More &raquo;</a></p>
            </article>
          </div>
          <div class="one_third">
            <article class="service"><img src="/public/images/demo/slides/tune.png" alt="" width="5">
              <h2 class="heading">Посадка на CMS</h2>
              <p class="btmspace-10">Интегрирую ваш проект в одну из популярных CMS</p>
              <p><a href="#">Read More &raquo;</a></p>
            </article>
          </div>
          <div class="one_third">
            <article class="service"><img src="/public/images/demo/slides/263051.png" alt="" width="5">
              <h2 class="heading">Поддержка сайта</h2>
              <p class="btmspace-10">Гарантирую поддержку вашего сайта на протяжениии 30 дней после сдача проекта</p>
              <p><a href="#">Read More &raquo;</a></p>
            </article>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
<!------------------>

<div class="wrapper row2">
  <div id="services" class="clear"> 
    <main class="container nospace clear"><center><h1>Мои работы</h1></center> </main>
    <br>
    <div class="group">
      <div class="one_third first">
        <article class="service"><img src="/public/layout/images/demo/slides/images6.jpg" alt="" style="width:100%;">
          <br><br>
        </article>
      </div>
      <div class="one_third">
        <article class="service"><img src="/public/layout/images/demo/slides/images_.jfif" alt="" style="width:100%;">
          <br><br>
        </article>
      </div>
      <div class="one_third">
        <article class="service"><img src="/public/layout/images/demo/slides/12.jpg" alt="" style="width:100%;">
          <br><br>
        </article>


      </div>

<div class="group">
  <div class="one_third first">
    <article class="service"><img src="/public/layout/images/demo/slides/images6.jpg" alt="" style="width:100%;">
    </article>
  </div>
  <div class="one_third">
    <article class="service"><img src="/public/layout/images/demo/slides/images_.jfif" alt="" style="width:100%;">
    </article>
  </div>
  <div class="one_third">
    <article class="service"><img src="/public/layout/images/demo/slides/12.jpg" alt="" style="width:100%;">
    </article>
  </div>
</div>
<br><br>
<center>
  <button type = "button" name = "button3" style = "width: 150px; height:50px; background-color: rgb(100, 100, 245);">
    <font color="white">Загрузить еще</font>
  </button>
  
</center>

    </div>
    <div class="clear"></div>
    
  </div>

</div>


<div class="wrapper row3">
  <main class="container nospace clear"> <h1>Отзывы клиентов</h1>
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_half first paditout">
        <center>
            

              <img src="/public/layout/images/250px-Mark_Zuckerberg_F8_2019_Keynote_(32830578717)_(cropped) 1.png" alt="" width="50" style="border-radius: 100px;">

        <br><br>
           <font color="blue">Марк Цукерберг</font> 
          <br><br>
          
            <article style="width: 300px;">
              Фантастика! Я всецело доволен 
работой этого специалиста. 
Быстро и качественно. Рекомендую!
            </article>
         </center>
      </div>
      <div class="one_half"><a href="#"><img src="/public/images/demo/slides/portrait 2.png" alt=""></a></div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row2">
  <div id="services" class="clear"> 
    <div class="group">
      <div class="one_third first">
        <article class="service"><center><img src="/public/layout/images/demo/slides/522561.png" alt="" style="width: 48px;">
          <h2 class="heading">Верстка проектов</h2>
          <p class="btmspace-10">56</p>
          </center>
        </article>
      </div>
      <div class="one_third">
        <article class="service"><center><img src="/public/layout/images/demo/slides/pngtree-happy-client-vector-customer-person-shaking-hands-partnership-important-client-business-png-image_1841598.jpg" alt="" style="width: 50px;">
          <h2 class="heading">Посадка на CMS</h2>
          <p class="btmspace-10">23</p>
        </center>
        </article>
      </div>
      <div class="one_third">
        <article class="service"><center><img src="/public/layout/images/demo/slides/cofe.jfif" alt="" style="width: 72px;">
          <h2 class="heading">Поддержка сайта</h2>
          <p class="btmspace-10">477</p>
        </center>
        </article>
      </div>
    </div>
  </div>
</div>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Сведения о компании</h6>
      <address class="btmspace-15">
      Компания GTech<br>
      Ул. Космонавтов &amp; 105<br>
      г. Чернигов,<br>
      12345
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
        <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Быстрые ссылки</h6>
      <ul class="nospace linklist">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Блог</a></li>
        <li><a href="#">Галерея</a></li>
        <li><a href="#">Портфолио</a></li>
        <li><a href="#">Наши контакты</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Из блога</h6>
      <article>
        <h2 class="nospace"><a href="#">Подтверждение регистрации ...</a></h2>
        <time class="smallfont" datetime="2045-04-06">Пятница, 6 апреля 2022</time>
        <p>Фреймворк Laravel «из коробки» позволяет создать базовую ...</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Оставайся на связи</h6>
      <form class="btmspace-30" method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a class="faicon-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2010-2022 - Все права защищены - <a href="#">GTech</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS -->
<!-- <script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script> -->
</body>
</html>
</body>
</html>
</head>