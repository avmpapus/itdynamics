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
    <meta name="description" content="Go3 - поисковая сеть, которая понимает ваши интересы" />
	<title>Go3</title>
	

	
	
	<link rel="shortcut icon" href="/public/images/go3_.png" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="/public/assets-front/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/assets-front/css/welcome.css">




<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!---<script src="/assets-front/js/autocomplete.js"></script>--->
<!------------------------------>

	
<!---<script src="/assets-front/js/check_long_string.js"></script>--->
  <!---<script src="assets-front/js/autocomplete.js"></script>-->


  <link rel="stylesheet" href="/public/assets-front/css/1.13.2/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="/public/assets-front/js/jquery-3.6.0.js"></script>
<script src="/public/assets-front/js/jquery-3.6.0.js"></script>
<script src="/public/assets-front/js/1.13.2/jquery-ui.js"></script>

  <script>
  $( function() {
    var src = [
      "наука и около",
      "наука",
      "около",
      "область",
      "человеческий",
      "деятельность",
      "знание",
      "действительность",
      "систематизация",
      "факты",
      "критическое мышление",
      "критический реализм",
      "анализ",
      "доказательство",
      "слово",
      "образование",
      "словарь",
      "разложение",
      "разделение",
      "гипотеза",
      "расчленение",
      "асбук",
      "безумие",
      "ива",
      "вап/wap (песня)",
      "исследование",
      "научное",
      "английский язык",
      "книга",
      "научный",
      "околонаучное",
      "язык",
      "подгруппа",
      "британская империя",
      "система",
      "над",
      "под",
      "в",
      "так",
      "из-за",
      "при",
      "это",
      "припять",
      "сново",
      "опять",
      "должен",
      "для",
      "вот",
    ];
    $( "#tags" ).autocomplete({
      autoFocus: true,	
    maxResults: 10,
    source: function(request, response) {
        var results = $.ui.autocomplete.filter(src, request.term);
        response(results.slice(0, this.options.maxResults));
		

    },
    select: function (e, ui) {
    	$("#tags").val(ui.item.value);
        $("#tags_submit").click();
    }
});
$("#tags").on('keydown',function(ev){
	if(ev.keyCode==13)
		$("#tags_submit").click();
});
});
  </script>




<?php
if (!$mobile_browser > 0) {
	?>
<link rel="stylesheet" href="/public/assets-front/css/auth_modal.css">
<link rel="stylesheet" href="/public/assets-front/css/searchall.css">
<?php
}
?>
<?php
if ($mobile_browser > 0) {
	?>
<link rel="stylesheet" href="/public/assets-front/css/auth_modal_mob.css">
<?php
}
?>


<style>

body{
  background:url('/public/images/1400x936.jpg') no-repeat;
  background-size:100%;
  background-size: cover;
}

  .row {

  flex-wrap: wrap;
  padding: 0 4px;

}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 55%;
  padding: 0 4px;
}



/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 55%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}



a.button8 {
  font-weight: 700;
  color: white;
  text-decoration: none;
  padding: .8em 1em calc(.8em + 3px);
  border-radius: 3px;
  background: gray;
  box-shadow: 0 -3px rgb(53,167,110) inset;
  transition: 0.2s;
} 
a.button8:hover { background: rgb(53, 167, 110); }
a.button8:active {
  background: gray;
  box-shadow: gray;
}


.sidenav a:hover {
    color: #f1f1f1;
}


.main {
    margin-left: 160px; 
    padding: 0px 10px;
}

.sidenav {
  padding-top: 15px;
}
    .sidenav a {
      font-size: 18px;
    }


    button{
      width:50px;
      height:50px;
    }
</style>
 </head>
 <body>
<!-- <div class="menu">
		<a href="/"><font color="white">Главная</font></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		@if (!Auth::id())
		<a href="#openModal"><font color="white">Войти/Добавить сайт</font></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reg"><font color="white">Зарегистрироваться</font></a>
@endif
		</div> -->
		


 
 
  <header>
  <div id="bgr" style="position:fixed;top:0px;left:0px;background-color: #000;width:100%;">
  <label style="position:relative;left:1.1%;top:4px;color:white;z-index:2;"><a href="#">Technics</a></label>
  &nbsp;
  <label style="position:relative;left:1%;top:4px;color:white;z-index:2;"><a href="#">Главная</a></label>
  <label style="position:relative;float:right;left:-1.4%;top:4px;color:white;z-index:2;">
  <a href="#">Войти</a>
</label>
</div>
  
   
  </header>

     </div>

   <br><br><br>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!------Здесь пользователь вводит запрос----->
<center>
<br><br>
<?php if(!$mobile_browser > 0){?>
<a href="/"><div style="position:relative;left:-700px;top:70px;color:black;font-size:30px;z-index:99999;">< Back</div></a>
<?php
        }else{
            ?>
<a href="/"><div style="position:relative;left:-130px;top:-20px;color:black;font-size:30px;z-index:99999;">< Back</div></a>
<?php
    }
    ?>
<div class="row">
  <div class="column">
  <a href="/"><img src="/public/images/portfolio/comp.jpg" style="width:130px;" id="welcomecomp" onclick="welcomecomp(this)"></a>
    <img src="/public/images/portfolio/auto.jpg" style="width:215px;">
    <img src="/public/images/portfolio/house.jpg" style="width:185px;">
    <img src="/public/images/portfolio/G0011.png" style="width:130px;">
    <label for="tags"><img src="/public/images/portfolio/not_found.jpg" style="width:185px;" id="img" onclick="img(this)"></label>
  </div>
  </div>

<br><br>



<br><br>
<h2>Техника</h2>
<br><br>
<?php if(!$mobile_browser > 0){?>
<div class="form-group">
<form name="search" action="">
  &nbsp;&nbsp;
 <input type="text" style="width:500px;height:50px;" 
 onkeyup="this.value=this.value.replace(/^\s/,'')" 
 placeholder="Что ищете?" name="searchString" id="tags" autocomplete="off">
 <button type="submit" id="tags_submit">></button>
</form>
</div>
<?php
    }
    ?>

<?php if($mobile_browser > 0){?>
<form class="example" name="search" action="">
  &nbsp;&nbsp;<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" 
  placeholder="Что ищете?" style="width:300px;z-index:3;" name="searchString" 
  id="tags" size="40" onchange="verifyIt(this); verifySynonyms(this);">
</form>
<?php
    }
    ?>



<style>
#div1, #div2 {
        height: 100px;
        width: 100px;
        margin-top: 10px;
    }
    #div1 {
        background: blue;
    }
    #div2 {
        background: black;
    }
</style>



</center>





 </body>
</html>