<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as input;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User;

use App\UserProfile;

use DB;

use PDO;
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
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <meta name="description" content="Asbook - научная и околонаучная библиотека" />
  <title id="ttl"></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/assets-front/css/welcome.css')}}">
</head>

<style>
/* Стиль окна поиска */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Стиль меню навигации */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* Стиль навигационных ссылок */
#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}
</style>
<header>
 
<div id="bgr" style="position:fixed;top:0px;left:0px;background-color: #000;width:100%;">
  <label style="position:relative;left:1.1%;top:4px;color:white;z-index:2;"><a href="">ieCMS</a></label>
  &nbsp;
  <label style="position:relative;left:1%;top:4px;color:white;z-index:2;"><a href="">Главная</a></label>
  <label style="position:relative;float:right;left:-1.4%;top:4px;color:white;z-index:2;">
  <a href="">Войти</a>
</label>
</div>

</header>

     </div>

</head>
<body>
<a href="/"><div style="position:relative;left:0px;top:50px;color:black;font-size:30px;z-index:99999;">< Back</div></a>

<br><br><br><br>
    <div class="row">
        <div class="col-md-8 offset-md-2">
			<form name="search" action="">
			<input type="search" onmouseleave="hint(this)" onkeyup="myFunction(); hint(this)" class="form-control typeahead" id="hint" name="searchString" autocomplete="off" placeholder="Введите текст и нажмите на Ентер">
        </form>



        <div id="blockhint" style="background:white; padding:10px;">
        


</div>
        </div>
    </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  

<script>

$(function(){
    $('body').css('background','url(\'images/bck_asb.jpg\')');
	 $("body").css("background-size", "cover");
});

</script>
<!------											    
<script>
   $(document).ready(function(){
      $( "#result" ).load( "employ" );
   });
</script>
----->
<div>
<!------Проверка доступа в интернет
<script>
function checkOnlineState(){
  if (navigator.onLine){
	document.write('доступ есть');
  } else {
    alert('нет доступа к сети'); 
  }
}
window.addEventListener('online',  checkOnlineState);

checkOnlineState();
</script>
----->



<div id="result"></div>
   </div>




   <script src="assets-front/js/welcome.js"></script>
   <script src="/assets-front/js/user_definition_device.js"></script>
   <div id="teg3"></div>
<div id="helo" onclick="func()"><center>Добро пожаловать в Asbook</center></div>
<!---<div id="wel" onclick="func2()">првиеь</div>--->
   


<script>
$(function(){
$("#hint").on("keyup",function(){
    document.getElementById("blockhint").style.display="block";
  //$("#blockhint").show();
  if(hint.value==''){
    document.getElementById("blockhint").style.display="none";
  }
})

/* $("#hint").on("mouseleave",function(){
  if(hint.value==''){
    document.getElementById("blockhint").style.display="none";
  }
}) */


    document.getElementById("blockhint").style.display="none";
})
$(document).mouseup( function(e){
		var div = $( "#blockhint" );
		if ( !div.is(e.target)
		    && div.has(e.target).length === 0 ) {
			//div.hide();
            document.getElementById("blockhint").style.display="none";
		}
	});
</script>

<script>
function myFunction() {
  // Объявить переменные
  var input, filter, ul, li, a, i;
  input = document.getElementById("hint");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Перебирайте все элементы списка и скрывайте те, которые не соответствуют поисковому запросу
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>




   <center>
				 <div id='pic_cntr'></div>
				 </center>
				 <br><br><br><br>
				 
 </body>
</html>