<?php
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
@ob_start ();
@ob_implicit_flush ( 0 );

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}

?>
<html lang="ru" data-global-crop-class="global-crop" data-sidebar-mobile-class="crop-mobile" >
<!----------������ ����������� ����������-------->	
<head> 

 		<!-- Meta -->
        <meta content="text/html; charset=windows-1251" http-equiv=Content-Type>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="robots" content="noodp" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="slurp" content="noydir" /> 
		<meta name="author" content="JumpersLee" />
		<meta name="referrer" content="origin"/>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<meta content="unsafe-url" id="mref" name="referrer" />
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
		<meta property="og:image" content="https://wot.byfor.ru/img/login_bg.png" />
        <meta name="thumbnail" content="https://wot.byfor.ru/img/3d-skin.png" />
        <meta name="twitter:image:src" content="https://wot.byfor.ru/img/donate-banner.jpg" />
        <meta property="og:title" content="ByForMOD - �������� ��� � ���� World Of Tanks"/>
        <meta property="og:description" content="���� ��� ��� ��������� ������������������ � ���� World of Tanks.
        �������� ���� ������ �������� ���� �� ������ ����� ������ � �����������.
        ������������������ ���� ����� ����� �� ��� � ����� ������� 0.9.18!"/>
        <meta property="og:url" content="https://wot.byfor.ru/"/>
        <meta property="og:site_name" content="ByForMOD - �������� ��� � ���� World Of Tanks"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="ByForMOD - �������� ��� � ���� World Of Tanks"/>   
        <meta name="twitter:description" content="���� ��� ��� ��������� ������������������ � ���� World of Tanks.
        �������� ���� ������ �������� ���� �� ������ ����� ������ � �����������.
        ������������������ ���� ����� ����� �� ��� � ����� ������� 0.9.18!"/>
        <meta name="twitter:url" content="https://wot.byfor.ru/"/>
        <meta property="fb:pages" content="720002121403767"/>
        <meta name="copyright" lang="ru" content="��� ByFor ���� �������� ������ ������� ByFor. ��� ������� ����� ������ �� ������, �� �������������� ���������� �� ��� �������� ������� ������� ������." />
		<!-- Meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ByForMOD - �������� ��� � ���� World Of Tanks"</title>
        <meta name="description" content="���� ��� ��� ��������� ������������������ � ���� World of Tanks.
        �������� ���� ������ �������� ���� �� ������ ����� ������ � �����������.
        ������������������ ���� ����� ����� �� ��� � ����� ������� 0.9.18!" />
		
		  <!-- css -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="prev" href="https://wot.byfor.ru/" />
        <link rel="next" href="https://wot.byfor.ru/" />
		<link rel="canonical" href="https://wot.byfor.ru/" />
		<link type="image/x-icon" rel="icon" href="favicon.ico">
		<link type="image/x-icon" rel="shortcut icon" href="favicon.png">
		<link type="image/x-icon" rel="shortcut icon" href="favicon-0.png">
		<link type="image/jpg" rel="apple-touch-icon" href="favicon-1.png">	
		<link type="image/x-icon" rel="shortcut icon" href="favicon-2.png">
		<link type="image/jpg" rel="apple-touch-icon" href="favicon-3.png">	
		<link type="image/x-icon" rel="shortcut icon" href="favicon-4.png">
		<link type="image/jpg" rel="apple-touch-icon" href="favicon_ios.png">	
		<link type="image/x-icon" rel="icon" href="favicon.ico">
        <link rel="canonical" href="http://wot.byfor.ru"/>
        <link rel="canonical" href="https://wot.byfor.ru"/>
        <link rel="canonical" href="http://byfor.ru"/>
        <link rel="canonical" href="https://byfor.ru"/>
		<link rel="sitemap" href="https://wot.byfor.ru/sitemap.xml">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
		<link rel="icon" type="image/png" href="favicon-0.png" sizes="32x32">
		<link rel="icon" type="image/png" href="favicon-2.png" sizes="96x96">
		<link rel="icon" type="image/png" href="favicon-3.png" sizes="192x192">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon-4.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon-4.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_ios">
		<link rel="mask-icon" href="favicon-1.png" color="#474747">
		<link rel="alternate" href="https://wot.byfor.ru/" hreflang="ru-ru" />


		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" />
	
 


<script type="text/j�vascript" src="/js/download_button.js"></script>

    <body>
	<div class="body">
	  <header>
	          <div class="container">
          <div class="row">
            <div class="col-md-2">
              <img class="logo" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjcgMjUiIHdpZHRoPSIxMjciIGhlaWdodD0iMjUiPjxwYXRoIGQ9Ik02OC42IDMuN2gtNC4xbC0uMSAxNS45aDMuOWMyLjcgMCAzLjktMi40IDMuOC00LjFWNy43Yy4yLTIuMi0xLjYtNC0zLjUtNHpNNS44IDEuOUwyLjIgNS41aDUuMXYxNC42bDEuOCAxLjggMS44LTEuOFY1LjVoNWwtMy42LTMuNkg1Ljh6bS0uMiA1SDIuMXY4LjJsMi42IDIuNiAyLjUtMi40LTEuNi0xLjVWNi45em0xMi4yIDl2LTExTDEzLjIuNEg0LjlMLjIgNXYxMC45TDkgMjQuNWw4LjgtOC42em0tMTYuNy0uM1Y1LjNsNC4yLTQuMWg3LjRsNC4xIDR2MTAuM2wtNy45IDcuNy03LjgtNy42em0xMS4zLTEuOGwtMS41IDEuNSAyLjQgMi40IDIuNi0yLjZWNi45aC0zLjV2Ni45em01Ni45IDJjMCAuNS0uNC44LS44LjhoLTEuMVY2LjhoMS4xYy40IDAgLjguNC44Ljh2OC4yek01OS40IDMuN2gtM3YxNS45aDd2LTMuMWgtMy45bC0uMS0xMi44em0tMTcuNyAwYy0xLjcgMC0yLjUuOS0zLjEgMS42cy0uOCAxLjgtLjggMi41djcuOWMwIDEuNC41IDIuNCAxLjIgMi45IDEgLjggMS41IDEgMi43IDEuMWguMmMxLjEgMCAxLjgtLjMgMi42LTEgLjMtLjMgMS4yLTEuNCAxLjItMi42di04Yy0uMS0yLjYtMS45LTQuNC00LTQuNHptLjkgMTIuMWMwIC41LS40LjktLjkuOXMtLjktLjQtLjktLjlWNy42YzAtLjUuNC0uOS45LS45cy45LjQuOS45djguMnptMTAuNy0zYy41LS41IDEuMy0xLjUgMS4zLTIuNVY3LjRjLS4zLTIuNC0xLjctMy42LTQuMS0zLjdoLTMuOHYxNS45aDIuOXYtNS43aC44bDEuNiA1LjdoMy4ybC0uMi0uNy0xLjctNi4xem0tMS43LTIuOWMwIC41LS40LjktMSAuOWgtMS4xVjYuOWgxLjRjLjQgMCAuNy40LjcuN3YyLjN6bTI2LjkgMS41Yy4xLTEuNS0xLjQtMi41LTIuNi0yLjUtMS42IDAtMi42IDEuMS0yLjYgMi42djUuM2MtLjEgMS41IDEgMi45IDIuNSAyLjlzMi44LTEuMyAyLjctMi43di01LjZ6bS0yLjEgNS40YzAgLjMtLjIuNS0uNS41cy0uNS0uMi0uNS0uNXYtNS40YzAtLjMuMi0uNS41LS41cy41LjIuNS41djUuNHptNDIuMy0xMy4xSDExNWwtMi4yIDQuNVYzLjhoLTNsLS4xIDE1LjloM1YxM2wyLjYgNi43aDMuNGwtMy44LTkuNCAzLjgtNi42ek03OS42IDE5LjZoMi4ydi00LjRoMnYtMS45aC0yLjF2LTIuMWgyLjhWOS4xaC01bC4xIDEwLjV6bTI2LTguNWwtMi40LTcuM2gtMy4zdjE1LjloMy4xdi03LjZsMi41IDcuNmgzLjF2LTE2aC0zdjcuNHpNOTEuMiA2Ljh2LTNoLTcuOHYzaDIuNHYxMi45aDMuMVY2LjhoMi4zem0xLjYtMy4xdi4ybC0yLjcgMTUuN2gzLjJsLjYtMy43aDEuNmwuNSAzLjdoMy4yTDk2LjUgMy43aC0zLjd6bTEuMiA5LjZsLjYtMy4yLjUgMy4ySDk0em0zMC42LTEuN2MtLjUtLjQtLjgtLjctMS4xLTEtLjMtLjItLjUtLjQtLjgtLjctLjQtLjQtMS4xLTEuMy0xLjEtMS45IDAtLjQtLjEtLjcuMy0xLjEuMi0uMi40LS4zLjYtLjNoLjFjLjMuMS42LjQuNy45bC4yLjkgMy0uNGMwLS4yIDAtMS0uMi0xLjUtLjUtMS4zLTEuNi0yLjMtMi45LTIuNi0uMy0uMS0uNi0uMS0uOS0uMS0uNSAwLTEuMS4xLTEuNy4zLTEgLjQtMi40IDEuOC0yLjMgMy42IDAgLjkgMCAxLjcuNyAyLjcuOSAxLjMgMi4yIDIuNCAzLjUgMy42LjYuNSAxLjEgMS41LjcgMi4zLS4yLjQtLjUuNi0uOC42LS4yIDAtLjQtLjEtLjYtLjMtLjYtLjUtLjUtMS40LS42LTEuOWwtMyAuMWMwIDIgLjkgMy42IDEuOSA0LjRzMyAuOCA0LjIuNGMuOC0uMyAyLjItMS44IDIuNC0zLjUtLjEtMi0xLjMtMy43LTIuMy00LjV6bS05MS4yLTFsLS44LTYuOGgtMy4xbC0uOCA2LjgtLjgtNi44aC0zLjJsMi42IDE1LjloMi45bC45LTUuNyAxIDUuN2gyLjhsMi40LTE1LjloLTMuMmwtLjcgNi44eiIgZmlsbD0iI2NlZDBjZSIvPjwvc3ZnPg==" width="225">
            </div>
            <div class="col-md-10">
			




    
	
              <!-- navigation start -->
              <nav class="navbar navbar-default" role="navigation">

                <div class="navbar-header">
                 
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <!-- navigation links -->
				
                    <li rel="canonical" class="active"><a href="http://byfor.ru/">�������</a></li>
						<li rel="canonical" class="active"><a href="http://byfor.ru/news/wotnews/"target="_blank">�������</a></li>
					<li rel="canonical" class="active"><a href="https://wot.byfor.ru/clan/"target="_blank">��� ����</a></li>
						
					
	
                    <!-- end navigation links -->
                  </ul>
                </div><!-- /.navbar-collapse -->
              </nav>
              <!-- navigation end -->
			  
			      </div>
          </div>
        </div> 
			  

        <!-- banner text -->
        <h1>ByForMOD � �������� ���</h1>
        <p>���� ��� ��� ��������� ������������������
� ���� World of Tanks.<br>�������� ���� ������ �������� ���� �� ������ ����� ������ � �����������.<br>
������������������ ���� ����� ����� �� ��� � ����� ������� 0.9.18!</p>
        
         <div id="install">
          <div class="links">
            <a href="#install" class="btn btn-transparent">������ ��� ���� ���� �������<i class="fa fa-play-circle-o"></i></a>
            <a href="http://download.byfor.ru/" class="btn btn-danger dlButton">������� (v27.8)<i class="fa fa-chevron-right"></i></a>
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
                ������ ��� ���� ���� �������
              </h1>
              <p>
                � ������ ���� � ������ DirectX10 ����� ������ ���� WorldOfTanks(startgame).bat<br>
               <br>
                � ������ ���� � ������ DirectX9 ����� ������ ���� WorldOfTanks(startgame_DX9).bat .<br>
				<br>
              </p>
              <a href="https://wot.byfor.ru/WorldOfTanks(startgame).zip"target="_blank" class="btn btn-transparent">DX11 + ������� ���������<i class="fa fa-play-circle-o"></i></a>
              <a href="https://wot.byfor.ru/WorldOfTanks(startgame_dx9).zip"target="_blank" class="btn btn-black">DX9 + ������� ���������<i class="fa fa-chevron-right"></i></a>
          </div>
        </div>

    
          
            </div>

          </div>
        </div>
		  <div class="row">
    
              <h1>
			  <iframe width="100%" height="600" src="https://www.youtube.com/embed/dDDMUOBsdnE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>
        </div>
		




       

		
	
        <!-- donator section -->
        <div class="row">
          <div id="donate">
            <div class="container">
              <div class="col-md-8">
              <h1>���� �� maksroker</h1>
			  <p>>��������� ���������� ������ � �����</h4>
                <p>>WorldOfTanks>mods>1.5.1.1 </p>
				<p></h4>
                <p>- ��������� ������ ���� � ������ ����� � �����.</p>
              <p>�� ��������� ��� ��� ������ �� ����������� ����� ����,������ ��������� � wgmods.net</p>
              <a href="https://wgmods.net/search/?owner=237580" class="btn btn-danger">�������� <i class="fa fa-chevron-right"></i></a>
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
                <h2>�2017-2019 ByForMOD 12+ ��� ��� ���������� ����������� ��������� <span> <a href="https://ru.wargaming.net/"target="_blank" style="color:#ff6c36;">Wargaming.net </a></span> ��� ����� ��������.</h2>
              <div class="social-links">
                <a href="https://www.youtube.com/watch?v=UAAp9LQS1dg"target="_blank"><i class="fa fa-youtube"></i></a>

              </div>
              </div>
              <div class="row">
                <div class="spacer"></div>
                <div class="links">

                  <a href="forum.php"target="_blank">����� ����</a>
				  <a href="https://vk.com/byfor_mod" target="_blank"">������ ��</a>



                </div>
              </div>
            </div>
          </footer>
		  
		  
		      </head>
		  
		  

		  <!--������
		  
		  
		  		  	<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3081834", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="https://top-fwz1.mail.ru/counter?id=3081834;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->

<!-- Rating@Mail.ru logo -->
<a href="https://top.mail.ru/jump?from=3081834">
<img src="https://top-fwz1.mail.ru/counter?id=3081834;t=410;l=1" style="border:0;" height="31" width="88" alt="Top.Mail.Ru" /></a>
<!-- //Rating@Mail.ru logo -->

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ua/stat/?id=52173193&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://metrika-informer.com/informer/52173193/3_0_FFFFFFFF_FFFFFFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="������.�������" title="������.�������: ������ �� ������� (���������, ������ � ���������� ����������)" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

   ym(52173193, "init", {
        id:52173193,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52173193" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

		  	<!--bigmir)net TOP 100-->
<span id='obHP'></span>
<script type="text/javascript" language="javascript">
bmN=navigator,bmD=document,bmD.cookie='b=b',i=0,bs=[],bm={v:16955041,s:16955041,t:4,c:bmD.cookie?1:0,n:Math.round((Math.random()* 1000000)),w:0};
try{obHP.style.behavior="url('#default#homePage')";obHP.addBehavior('#default#homePage');if(obHP.isHomePage(window.location.href))bm.h=1;}catch(e){;}
for(var f=self;f!=f.parent;f=f.parent)bm.w++;
try{if(bmN.plugins&&bmN.mimeTypes.length&&(x=bmN.plugins['Shockwave Flash']))bm.m=parseInt(x.description.replace(/([a-zA-Z]|\s)+/,''));
else for(var f=3;f<20;f++)if(eval('new ActiveXObject("ShockwaveFlash.ShockwaveFlash.'+f+'")'))bm.m=f}catch(e){;}
try{bm.y=bmN.javaEnabled()?1:0}catch(e){;}
try{bmS=screen;bm.v^=bm.d=bmS.colorDepth||bmS.pixelDepth;bm.v^=bm.r=bmS.width}catch(e){;}
r=bmD.referrer.replace(/^w+:\/\//,'');if(r&&r.split('/')[0]!=window.location.host){bm.f=escape(r).slice(0,400);bm.v^=r.length}
bm.v^=window.location.href.length;for(var x in bm) if(/^[hvstcnwmydrf]$/.test(x)) bs[i++]=x+bm[x];
bmD.write('<a href="http://www.bigmir.net/" target="_blank" onClick="img=new Image();img.src="//www.bigmir.net/?cl=16955041";"><img src="//c.bigmir.net/?'+bs.join('&')+'"  width="88" height="31" border="0" alt="bigmir)net TOP 100" title="bigmir)net TOP 100"></a>');
</script>
<noscript>
<a href="http://www.bigmir.net/" target="_blank"><img src="//c.bigmir.net/?v16955041&s16955041&t4" width="88" height="31" alt="bigmir)net TOP 100" title="bigmir)net TOP 100" border="0" /></a>
</noscript>
<!--bigmir)net TOP 100-->	
          </div>
        </div>

        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/nav.js"></script>
        <script type="text/javascript">

        $(document).ready(function() {
          $('.nav').onePageNav({
            begin: function() {
              $('body').append('<div id="device-dummy" style="height: 1px;"></div>');
            },
            end: function() {
              $('#device-dummy').remove();
            }
          });
        });

        </script>
		  
		  
		  
		  
		  
		  
		  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(52173193, "init", {
        id:52173193,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52173193" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->	
		  
		  
		  		<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 164047579, {expandTimeout: "1502300",tooltipButtonText: "���� ������?"});
</script>
      </body>
      </html>

















<?
echo ", ".$Fname." ".$Lname."";
?>

