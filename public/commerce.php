<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as input;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

//use App\User;

use App\UserProfile;

use DB;

use PDO;
?>


<?php
/* $user = User::where('id', Auth::id())->first();
    $user_profile = UserProfile::where('user_id', Auth::id())->first(); */
?>

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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commerce</title>
    <link rel="shortcut icon" href="/public/images/go3_.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/assets-front/css/welcome.css">
<link rel="stylesheet" href="/public/assets-front/css/vertmenu.css">
<!-- <script src="/public/assets-front/js/commerce.js"></script> -->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="/public/js/jquery-3.6.0.js"></script>
<script type="text/javascript">
	$(function() {
        $("#engtop").on("click",function(){
        	document.getElementById('en').innerText='Войти';
            document.getElementById('back').innerText='Назад';
            document.getElementById('nav').innerHTML=`
            <nav>
					<a href="#">Главная</a>
					<a href="#">Подключения</a>
					<a href="#">Продукты</a>
					<a href="#">тарифы</a>
					<a href="#">Разработчикам</a>
<a href="#" id="engtop">En</a>
				</nav>
            `;


            document.getElementById('section-title').innerHTML=`Денежные переводы и онлайн-платежи в гривне, долларе США, евро, биткоине`;


            document.getElementById('section-tagline').innerHTML=`C Commerce вы можете отправлять и получать денежные платежи`;
        })
	})
</script>

</head>
<body>

<header class="clearfix">
    <div class="container">
			<div class="header-left">
			
				<h1><a href="/" id="back" style="color:skyblue;">< Back</a>&nbsp;&nbsp;&nbsp;&nbsp;Commerce</h1>

			</div>
			<div class="header-right">
				<label for="open">
					<span class="hidden-desktop"></span>
				</label>
				<input type="checkbox" name="" id="open">
				<nav id="nav">
					<a href="#">Main</a>
					<a href="#">Connections</a>
					<a href="#">Products</a>
					<a href="#">Rates</a>
					<a href="#">Developers</a>
<a href="#" id="engtop">Ru</a>
				</nav>
			</div>
		</div>
	</header>
<section class="clearfix">
		<div class="container">
			<div class="section-left">
				<h1 class="section-title" id="section-title">Money transfers and online payments in uah, US dollar, euro, bitcoin</h1>
				<h5 class="section-tagline" id="section-tagline">With Commerce you can send and receive cash payments</h5>
			</div>
			<div class="section-right">
				<button class="learn-more" id="en">Login</button>
			</div>
		</div>
	</section>


<script>
    	$(function () {
		$('body').css('background', 'url(\'/public/images/bck_bs.jpg\') no-repeat');
		$('body').css("background-size", "cover");
	})

</script>

  <!-- <div style="position:relative;top:-30px;left:10%;color:black;width:100px;">dfgdfgdfg</div> -->
</body>
</html>