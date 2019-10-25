<?php
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
@ob_start ();
@ob_implicit_flush ( 0 );
@error_reporting ( E_ALL ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE );
@ini_set ( 'error_reporting', E_ALL ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE );

@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit; 
}

?>
<html lang="ru" data-global-crop-class="global-crop" data-sidebar-mobile-class="crop-mobile" >
<!----------Начало Техническая информация-------->	
<head> 

 		<!-- Meta -->
        <meta content="text/html; charset=windows-utf-8" http-equiv=Content-Type>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="robots" content="noodp" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="slurp" content="noydir" /> 
		<meta name="author" content="JumpersLee" />
		<meta name="referrer" content="origin"/>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<meta content="unsafe-url" id="mref" name="referrer" />
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
		<meta property="og:image" content="http://wotbyfor.github.io/img/login_bg.png" />
        <meta name="thumbnail" content="http://wotbyfor.github.io/img/3d-skin.png" />
        <meta name="twitter:image:src" content="http://wotbyfor.github.io/img/donate-banner.jpg" />
        <meta property="og:title" content="ByForMOD - Повысить фпс в игре World Of Tanks 2019"/>
        <meta property="og:description" content="Этот мод для повышения производительности в игре World of Tanks.
        Довольно таки хорошо показует себя на слабых видео картах и процессорах.
        Производительность игры будет такая же как в патче клиента 0.9.18!"/>
        <meta property="og:url" content="http://wotbyfor.github.io/"/>
        <meta property="og:site_name" content="ByForMOD - Повысить фпс в игре World Of Tanks 2019"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="ByForMOD - Повысить фпс в игре World Of Tanks 2019"/>   
        <meta name="twitter:description" content="Этот мод для повышения производительности в игре World of Tanks.
        Довольно таки хорошо показует себя на слабых видео картах и процессорах.
        Производительность игры будет такая же как в патче клиента 0.9.18!"/>
        <meta name="twitter:url" content="http://wotbyfor.github.io/"/>
        <meta property="fb:pages" content="720002121403767"/>
        <meta name="copyright" lang="ru" content="ООС ByFor сайт являются частью проекта ByFor. Все вопросы можно задать на форуме, но предварительно посмотрите на уже заданные вопросы другими людьми." />
		<!-- Meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ByForMOD - Повысить фпс в игре World Of Tanks 2019"</title>
        <meta name="description" content="Этот мод для повышения производительности в игре World of Tanks.
        Довольно таки хорошо показует себя на слабых видео картах и процессорах.
        Производительность игры будет такая же как в патче клиента 0.9.18!" />
		
		  <!-- css -->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="prev" href="http://wotbyfor.github.io/" />
        <link rel="next" href="http://wotbyfor.github.io/" />
		<link rel="canonical" href="http://wotbyfor.github.io/" />
		<link type="image/x-icon" rel="icon" href="favicon.ico">
		<link type="image/x-icon" rel="shortcut icon" href="favicon.png">
		<link type="image/x-icon" rel="shortcut icon" href="favicon-0.png">
		<link type="image/jpg" rel="apple-touch-icon" href="favicon-1.png">	
		<link type="image/x-icon" rel="shortcut icon" href="favicon-2.png">
		<link type="image/jpg" rel="apple-touch-icon" href="favicon-3.png">	
		<link type="image/x-icon" rel="shortcut icon" href="favicon-4.png">
		<link type="image/jpg" rel="apple-touch-icon" href="favicon_ios.png">	
		<link type="image/x-icon" rel="icon" href="favicon.ico">
        <link rel="canonical" href="http://byfor.zzz.com.ua"/>
        <link rel="canonical" href="http://byfor.zzz.com.ua"/>
        <link rel="canonical" href="http://wotbyfor.github.io"/>
        <link rel="canonical" href="http://wotbyfor.github.io"/>
		<link rel="sitemap" href="http://wotbyfor.github.io/sitemap.xml">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
		<link rel="icon" type="image/png" href="favicon-0.png" sizes="32x32">
		<link rel="icon" type="image/png" href="favicon-2.png" sizes="96x96">
		<link rel="icon" type="image/png" href="favicon-3.png" sizes="192x192">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon-4.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon-4.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_ios">
		<link rel="mask-icon" href="favicon-1.png" color="#474747">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" />
	    <link rel="alternate" href="http://wotbyfor.github.io/eu/fr/" hreflang="fr-be" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/fr/" hreflang="fr-fr" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-be" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-ba" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="bs-ba" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-bg" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="bg-bg" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-hr" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="hr-hr" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-cz" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-fr" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-ge" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="ka-ge" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-de" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-hu" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="hu-hu" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-il" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="he-il" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-it" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-lv" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="lv-lv" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-lt" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="lt-lt" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-nl" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="nl-nl" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-pl" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-ro" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="ro-ro" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="sr-rs" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-rs" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-sk" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="sk-sk" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-es" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-tr" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-gb" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/pl/" hreflang="pl-pl" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/cs/" hreflang="cs-cz" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/de/" hreflang="de-de" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/tr/" hreflang="tr-tr" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/it/" hreflang="it-it" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/es/" hreflang="es-es" />
		<link rel="alternate" href="http://wotbyfor.github.io/" hreflang="ru-by" />
		<link rel="alternate" href="http://wotbyfor.github.io/" hreflang="ru-kz" />
		<link rel="alternate" href="http://wotbyfor.github.io/" hreflang="kk-kz" />
		<link rel="alternate" href="http://wotbyfor.github.io/" hreflang="ru-ru" />
		<link rel="alternate" href="http://wotbyfor.github.io/" hreflang="ru-ua" />
		<link rel="alternate" href="http://wotbyfor.github.io/uk/" hreflang="uk-ua" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/es-ar/" hreflang="es-ar" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-ar" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-br" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/" hreflang="en-us" />
		<link rel="alternate" href="http://wotbyfor.github.io/eu/pt-br/" hreflang="pt-br" />

 


<script type="text/jаvascript" src="/js/download_button.js"></script>

    <body>
	<div class="body">
	  <header>
	          <div class="container">
          <div class="row">
            <div class="col-md-2">
              <img class="logo" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjcgMjUiIHdpZHRoPSIxMjciIGhlaWdodD0iMjUiPjxwYXRoIGQ9Ik02OC42IDMuN2gtNC4xbC0uMSAxNS45aDMuOWMyLjcgMCAzLjktMi40IDMuOC00LjFWNy43Yy4yLTIuMi0xLjYtNC0zLjUtNHpNNS44IDEuOUwyLjIgNS41aDUuMXYxNC42bDEuOCAxLjggMS44LTEuOFY1LjVoNWwtMy42LTMuNkg1Ljh6bS0uMiA1SDIuMXY4LjJsMi42IDIuNiAyLjUtMi40LTEuNi0xLjVWNi45em0xMi4yIDl2LTExTDEzLjIuNEg0LjlMLjIgNXYxMC45TDkgMjQuNWw4LjgtOC42em0tMTYuNy0uM1Y1LjNsNC4yLTQuMWg3LjRsNC4xIDR2MTAuM2wtNy45IDcuNy03LjgtNy42em0xMS4zLTEuOGwtMS41IDEuNSAyLjQgMi40IDIuNi0yLjZWNi45aC0zLjV2Ni45em01Ni45IDJjMCAuNS0uNC44LS44LjhoLTEuMVY2LjhoMS4xYy40IDAgLjguNC44Ljh2OC4yek01OS40IDMuN2gtM3YxNS45aDd2LTMuMWgtMy45bC0uMS0xMi44em0tMTcuNyAwYy0xLjcgMC0yLjUuOS0zLjEgMS42cy0uOCAxLjgtLjggMi41djcuOWMwIDEuNC41IDIuNCAxLjIgMi45IDEgLjggMS41IDEgMi43IDEuMWguMmMxLjEgMCAxLjgtLjMgMi42LTEgLjMtLjMgMS4yLTEuNCAxLjItMi42di04Yy0uMS0yLjYtMS45LTQuNC00LTQuNHptLjkgMTIuMWMwIC41LS40LjktLjkuOXMtLjktLjQtLjktLjlWNy42YzAtLjUuNC0uOS45LS45cy45LjQuOS45djguMnptMTAuNy0zYy41LS41IDEuMy0xLjUgMS4zLTIuNVY3LjRjLS4zLTIuNC0xLjctMy42LTQuMS0zLjdoLTMuOHYxNS45aDIuOXYtNS43aC44bDEuNiA1LjdoMy4ybC0uMi0uNy0xLjctNi4xem0tMS43LTIuOWMwIC41LS40LjktMSAuOWgtMS4xVjYuOWgxLjRjLjQgMCAuNy40LjcuN3YyLjN6bTI2LjkgMS41Yy4xLTEuNS0xLjQtMi41LTIuNi0yLjUtMS42IDAtMi42IDEuMS0yLjYgMi42djUuM2MtLjEgMS41IDEgMi45IDIuNSAyLjlzMi44LTEuMyAyLjctMi43di01LjZ6bS0yLjEgNS40YzAgLjMtLjIuNS0uNS41cy0uNS0uMi0uNS0uNXYtNS40YzAtLjMuMi0uNS41LS41cy41LjIuNS41djUuNHptNDIuMy0xMy4xSDExNWwtMi4yIDQuNVYzLjhoLTNsLS4xIDE1LjloM1YxM2wyLjYgNi43aDMuNGwtMy44LTkuNCAzLjgtNi42ek03OS42IDE5LjZoMi4ydi00LjRoMnYtMS45aC0yLjF2LTIuMWgyLjhWOS4xaC01bC4xIDEwLjV6bTI2LTguNWwtMi40LTcuM2gtMy4zdjE1LjloMy4xdi03LjZsMi41IDcuNmgzLjF2LTE2aC0zdjcuNHpNOTEuMiA2Ljh2LTNoLTcuOHYzaDIuNHYxMi45aDMuMVY2LjhoMi4zem0xLjYtMy4xdi4ybC0yLjcgMTUuN2gzLjJsLjYtMy43aDEuNmwuNSAzLjdoMy4yTDk2LjUgMy43aC0zLjd6bTEuMiA5LjZsLjYtMy4yLjUgMy4ySDk0em0zMC42LTEuN2MtLjUtLjQtLjgtLjctMS4xLTEtLjMtLjItLjUtLjQtLjgtLjctLjQtLjQtMS4xLTEuMy0xLjEtMS45IDAtLjQtLjEtLjcuMy0xLjEuMi0uMi40LS4zLjYtLjNoLjFjLjMuMS42LjQuNy45bC4yLjkgMy0uNGMwLS4yIDAtMS0uMi0xLjUtLjUtMS4zLTEuNi0yLjMtMi45LTIuNi0uMy0uMS0uNi0uMS0uOS0uMS0uNSAwLTEuMS4xLTEuNy4zLTEgLjQtMi40IDEuOC0yLjMgMy42IDAgLjkgMCAxLjcuNyAyLjcuOSAxLjMgMi4yIDIuNCAzLjUgMy42LjYuNSAxLjEgMS41LjcgMi4zLS4yLjQtLjUuNi0uOC42LS4yIDAtLjQtLjEtLjYtLjMtLjYtLjUtLjUtMS40LS42LTEuOWwtMyAuMWMwIDIgLjkgMy42IDEuOSA0LjRzMyAuOCA0LjIuNGMuOC0uMyAyLjItMS44IDIuNC0zLjUtLjEtMi0xLjMtMy43LTIuMy00LjV6bS05MS4yLTFsLS44LTYuOGgtMy4xbC0uOCA2LjgtLjgtNi44aC0zLjJsMi42IDE1LjloMi45bC45LTUuNyAxIDUuN2gyLjhsMi40LTE1LjloLTMuMmwtLjcgNi44eiIgZmlsbD0iI2NlZDBjZSIvPjwvc3ZnPg==" width="225">
            </div>
            <div class="col-md-10">
			



	 <style>
   body {
background-image: url("http://wotbyfor.github.io/img/bg.jpg");
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
background-size: cover;
  }
  </style>	
    

              <!-- navigation start -->
              <nav class="navbar navbar-default" role="navigation">
	<nav>
                <div class="navbar-header">
                 
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
				  
                    <!-- navigation links -->
				
                    <li rel="canonical" class="active"><a href="http://wotbyfor.github.io/">Главная</a></li>
					<li rel="canonical" class="active"><a href="http://wotbyfor.github.io/clan.html"target="_blank">НАШ КЛАН</a></li>
					<li rel="canonical" class="active"><a href=""><sup><ins>RU</ins></sup></a></li>
					<!--- <li rel="canonical" class="active"><a href="http://wotbyfor.github.io/uk/">UA</a></li>
					  <li rel="canonical" class="active"><a href="http://wotbyfor.github.io/eu/">EU</a></li>--->

					
	
                    <!-- end navigation links -->
                  </ul>
                </div><!-- /.navbar-collapse -->
				
              </nav>
			  
              <!-- navigation end -->
			  
			      </div>
          </div>
        </div> 
			  

        <!-- banner text -->
        <h1>ByForMOD » Повысить фпс</h1>
        <p>Этот мод для повышения производительности
в игре World of Tanks.<br>Довольно таки хорошо показует себя на слабых видео картах и процессорах.<br>
Производительность игры будет такая же как в патче клиента 0.9.18!</p>
        
         <div id="install">
          <div class="links">
            <a href="#install" class="btn btn-transparent">Выбери для себя файл запуска<i class="fa fa-play-circle-o"></i></a>
            <a href="http://wotbyfor.github.io/ByForMOD(OLD FPS).7z" class="btn btn-danger dlButton">Скачать (v28)<i class="fa fa-chevron-right"></i></a>
          </div>
		

	
        <!-- end banner text -->

		
        </header>
	<div style="margin: 10px auto; width: 250px;">
       
        </div><!-- /features -->
        </div>






      <!-- about section -->
        <div class="row">
            <div id="about">
              <h1>
                Выбери для себя файл запуска
              </h1>
              <p>
                » Запуск игры в режиме DirectX10 через данный файл WorldOfTanks(startgame).bat<br>
               <br>
                » Запуск игры в режиме DirectX9 через данный файл WorldOfTanks(startgame_DX9).bat .<br>
				<br>
              </p>
              <a href="http://wotbyfor.github.io/WorldOfTanks(startgame).zip"target="_blank" class="btn btn-transparent">DX11 + ВЫСОКИЙ ПРИОРИТЕТ<i class="fa fa-play-circle-o"></i></a>
              <a href="http://wotbyfor.github.io/WorldOfTanks(startgame_dx9).zip"target="_blank" class="btn btn-black">DX9 + ВЫСОКИЙ ПРИОРИТЕТ<i class="fa fa-chevron-right"></i></a>
          </div>
        </div>

    
          
            </div>

          </div>
        </div>
		  <div class="row">
    
              <h1>
			  <iframe width="100%" height="600" src="http://www.youtube.com/embed/dDDMUOBsdnE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>
        </div>
		




       

		
	
        <!-- donator section -->
        <div class="row">
          <div id="donate">
            <div class="container">
              <div class="col-md-8">
              <h1>Моды от maksroker</h1>
			  <p>>Поместить содержимое архива в папку</h4>
                <p>>WorldOfTanks>mods>1.5.1.2 </p>
				<p></h4>
                <p>- Поместить данный файл в корень папки с игрой.</p>
              <p>Мы публикуем наш мод только на официальном сайте мода,группе вконтакте и wgmods.net</p>
              <a href="http://wgmods.net/search/?owner=237580" class="btn btn-danger">Смотреть <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="col-md-4">
              <img class="visible-lg" src="img/3d-skin.png">
            </div>
            </div>
          </div>
        </div>
		
        <!-- footer -->
        <div class="row">
          <div class="container">
            <footer>
            <div class="col-md-4">
             <img class="logo" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjcgMjUiIHdpZHRoPSIxMjciIGhlaWdodD0iMjUiPjxwYXRoIGQ9Ik02OC42IDMuN2gtNC4xbC0uMSAxNS45aDMuOWMyLjcgMCAzLjktMi40IDMuOC00LjFWNy43Yy4yLTIuMi0xLjYtNC0zLjUtNHpNNS44IDEuOUwyLjIgNS41aDUuMXYxNC42bDEuOCAxLjggMS44LTEuOFY1LjVoNWwtMy42LTMuNkg1Ljh6bS0uMiA1SDIuMXY4LjJsMi42IDIuNiAyLjUtMi40LTEuNi0xLjVWNi45em0xMi4yIDl2LTExTDEzLjIuNEg0LjlMLjIgNXYxMC45TDkgMjQuNWw4LjgtOC42em0tMTYuNy0uM1Y1LjNsNC4yLTQuMWg3LjRsNC4xIDR2MTAuM2wtNy45IDcuNy03LjgtNy42em0xMS4zLTEuOGwtMS41IDEuNSAyLjQgMi40IDIuNi0yLjZWNi45aC0zLjV2Ni45em01Ni45IDJjMCAuNS0uNC44LS44LjhoLTEuMVY2LjhoMS4xYy40IDAgLjguNC44Ljh2OC4yek01OS40IDMuN2gtM3YxNS45aDd2LTMuMWgtMy45bC0uMS0xMi44em0tMTcuNyAwYy0xLjcgMC0yLjUuOS0zLjEgMS42cy0uOCAxLjgtLjggMi41djcuOWMwIDEuNC41IDIuNCAxLjIgMi45IDEgLjggMS41IDEgMi43IDEuMWguMmMxLjEgMCAxLjgtLjMgMi42LTEgLjMtLjMgMS4yLTEuNCAxLjItMi42di04Yy0uMS0yLjYtMS45LTQuNC00LTQuNHptLjkgMTIuMWMwIC41LS40LjktLjkuOXMtLjktLjQtLjktLjlWNy42YzAtLjUuNC0uOS45LS45cy45LjQuOS45djguMnptMTAuNy0zYy41LS41IDEuMy0xLjUgMS4zLTIuNVY3LjRjLS4zLTIuNC0xLjctMy42LTQuMS0zLjdoLTMuOHYxNS45aDIuOXYtNS43aC44bDEuNiA1LjdoMy4ybC0uMi0uNy0xLjctNi4xem0tMS43LTIuOWMwIC41LS40LjktMSAuOWgtMS4xVjYuOWgxLjRjLjQgMCAuNy40LjcuN3YyLjN6bTI2LjkgMS41Yy4xLTEuNS0xLjQtMi41LTIuNi0yLjUtMS42IDAtMi42IDEuMS0yLjYgMi42djUuM2MtLjEgMS41IDEgMi45IDIuNSAyLjlzMi44LTEuMyAyLjctMi43di01LjZ6bS0yLjEgNS40YzAgLjMtLjIuNS0uNS41cy0uNS0uMi0uNS0uNXYtNS40YzAtLjMuMi0uNS41LS41cy41LjIuNS41djUuNHptNDIuMy0xMy4xSDExNWwtMi4yIDQuNVYzLjhoLTNsLS4xIDE1LjloM1YxM2wyLjYgNi43aDMuNGwtMy44LTkuNCAzLjgtNi42ek03OS42IDE5LjZoMi4ydi00LjRoMnYtMS45aC0yLjF2LTIuMWgyLjhWOS4xaC01bC4xIDEwLjV6bTI2LTguNWwtMi40LTcuM2gtMy4zdjE1LjloMy4xdi03LjZsMi41IDcuNmgzLjF2LTE2aC0zdjcuNHpNOTEuMiA2Ljh2LTNoLTcuOHYzaDIuNHYxMi45aDMuMVY2LjhoMi4zem0xLjYtMy4xdi4ybC0yLjcgMTUuN2gzLjJsLjYtMy43aDEuNmwuNSAzLjdoMy4yTDk2LjUgMy43aC0zLjd6bTEuMiA5LjZsLjYtMy4yLjUgMy4ySDk0em0zMC42LTEuN2MtLjUtLjQtLjgtLjctMS4xLTEtLjMtLjItLjUtLjQtLjgtLjctLjQtLjQtMS4xLTEuMy0xLjEtMS45IDAtLjQtLjEtLjcuMy0xLjEuMi0uMi40LS4zLjYtLjNoLjFjLjMuMS42LjQuNy45bC4yLjkgMy0uNGMwLS4yIDAtMS0uMi0xLjUtLjUtMS4zLTEuNi0yLjMtMi45LTIuNi0uMy0uMS0uNi0uMS0uOS0uMS0uNSAwLTEuMS4xLTEuNy4zLTEgLjQtMi40IDEuOC0yLjMgMy42IDAgLjkgMCAxLjcuNyAyLjcuOSAxLjMgMi4yIDIuNCAzLjUgMy42LjYuNSAxLjEgMS41LjcgMi4zLS4yLjQtLjUuNi0uOC42LS4yIDAtLjQtLjEtLjYtLjMtLjYtLjUtLjUtMS40LS42LTEuOWwtMyAuMWMwIDIgLjkgMy42IDEuOSA0LjRzMyAuOCA0LjIuNGMuOC0uMyAyLjItMS44IDIuNC0zLjUtLjEtMi0xLjMtMy43LTIuMy00LjV6bS05MS4yLTFsLS44LTYuOGgtMy4xbC0uOCA2LjgtLjgtNi44aC0zLjJsMi42IDE1LjloMi45bC45LTUuNyAxIDUuN2gyLjhsMi40LTE1LjloLTMuMmwtLjcgNi44eiIgZmlsbD0iI2NlZDBjZSIvPjwvc3ZnPg==" width="300">
            </div>
            <div class="col-md-8">
              <div class="row">
                <h2>©2017-2019 ByForMOD 12+ Наш мод официально подтвержден компанией <span> <a href="http://ru.wargaming.net/"target="_blank" style="color:#ff6c36;">Wargaming.net </a></span> Все права защищены.</h2>
              <div class="social-links">
                <a href="http://www.youtube.com/watch?v=UAAp9LQS1dg"target="_blank"><i class="fa fa-youtube"></i></a>

              </div>
              </div>
              <div class="row">
                <div class="spacer"></div>
                <div class="links">

                               <a href="http://wotbyfor.github.io/">Главная</a>
					<a href="http://wotbyfor.github.io/clan/"target="_blank">НАШ КЛАН</a>
					<a href=""><sup><ins>RU</ins></sup></a>
				<!---	<a href="http://wotbyfor.github.io/uk/">UA</a>
					<a href="http://wotbyfor.github.io/eu/">EU</a>-->



                </div>
              </div>
            </div>
          </footer>
		  
		  
		      </head>
		  
		  




















