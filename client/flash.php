<?php


$test = $_GET['habbexbeta'];


error_reporting(0);
include('../config/db.php');


if($_SESSION['username']== ''){
	
	header("Location: /hbx");
}

//habbex sistema beta e inseguro
$habbexusername = $_SESSION['username'];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: video-g6swmAP8X5VG4jCi.mp4
$habbex =  'habbexbetastaff'.substr(str_shuffle($permitted_chars), 0, 25).time();



 $sql = "UPDATE players SET auth_ticket = '$habbex' WHERE username = '$habbexusername'";
        $query = mysqli_query($connection, $sql);
$sqlhabbex = "SELECT * FROM players WHERE username = '$habbexusername'";
$result = mysqli_query($connection, $sqlhabbex);
$row = $result->fetch_assoc();










 


$test = $_GET['habbexbeta'];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br"><link rel="shortcut icon" href=""/><!DOCTYPE HTML>
<html>
<head>

	<style type="text/css">
		.ads-vip {
			width: 100%;
			height: 90px;
			background-image: linear-gradient(to bottom,#212121,#151515);
			float: right;
			border-radius: 2px;
			border: 1px solid #000;
			box-shadow: inset 2px 2px 0 rgba(255,255,255,.1), inset -2px -2px 0 rgba(255,255,255,.1);
			position: relative;
			display: flex;
			flex-direction: column;
			justify-content: center;
			color: #fff;
			padding-left: 30px;
		}
		.ads-vip:before {
			content: '';
			width: 145px;
			height: 42px;
			background-image: url(/templates/clean/img/vip.webp);
			position: absolute;
			right: 30px;
		}
		.title-ads {
			font-weight: 700;
			font-size: 22px;
		}
		.desc-ads {
			font-size: 14px;
		}
		
		 #loader-wrapper {
     position: fixed;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     z-index: 1000;
}
#loader {
  

height: 250px;
width: 400px;
padding-top: 0px;
text-align: center;
color: #fff;
font-size: 20px;
z-index: 1001;
display: block;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
image-rendering: pixelated;

}
.loading_bar {
  display: block;
  border:0px solid white;
  padding:2px;
  height:30px;
  z-index: 1001;
  margin-top:8px;
}
#loader_bar.percent {
  background:url(https://i2.wp.com/css-tricks.com/wp-content/uploads/2018/05/sweep_fill.gif?fit=979%2C430&ssl=1);
  display: block;
 
  height:100%;
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
/* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6 */
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
/* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+ */
width:2%;
}
#loader-wrapper .loader-section {
     position: fixed;
     width: 100%;
     height: 50%;
     z-index: 1000;
      
    background:url(https://i6.glitter-graphics.org/pub/72/72296r5cke56tln.gif)repeat;
}
#loader-wrapper .loader-section.section-top {
     top: 0;
     left:0;
     right:0;
}
#loader-wrapper .loader-section.section-bottom {
     bottom: 0;
     left:0;
     right:0;
}
/* Loaded styles */

.loaded #loader-wrapper .loader-section.section-top {
     -webkit-transform: translateY(-100%);
    /* Chrome, Opera 15+, Safari 3.1+ */
     -ms-transform: translateY(-100%);
    /* IE 9 */
     transform: translateY(-100%);
    /* Firefox 16+, IE 10+, Opera */
     -webkit-transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    /* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6 */
     transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    /* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+ */
}
.loaded #loader-wrapper .loader-section.section-bottom {
     -webkit-transform: translateY(100%);
    /* Chrome, Opera 15+, Safari 3.1+ */
     -ms-transform: translateY(100%);
    /* IE 9 */
     transform: translateY(100%);
    /* Firefox 16+, IE 10+, Opera */
     -webkit-transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    /* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6 */
     transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    /* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+ */
}
.loaded #loader {
     opacity: 0;
     -webkit-transition: all 0.3s ease-out;
    /* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6 */
     transition: all 0.3s ease-out;
    /* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+ */
}
.loaded #loader-wrapper {
     visibility: hidden;
     -webkit-transform: translateX(-100%);
    /* Chrome, Opera 15+, Safari 3.1+ */
     -ms-transform: translateX(-100%);
    /* IE 9 */
     transform: translateX(-100%);
    /* Firefox 16+, IE 10+, Opera */
     -webkit-transition: all 0.3s 1s ease-out;
    /* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6 */
     transition: all 0.3s 1s ease-out;
    /* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+ */
}
	</style>
  
  <div class="client__buttons">
  <script> 
    function toggleFullScreen() {
            if ((document.fullScreenElement && document.fullScreenElement !== null) ||
             (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                if (document.documentElement.requestFullScreen) {
                    document.documentElement.requestFullScreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullScreen) {
                    document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        }
		

  </script>
<button ngsf-toggle-fullscreen="" class="client__fullscreen" onclick="toggleFullScreen()" style="height: 30px;width: 33px;"><i show-if-fullscreen="true" class="client__fullscreen__icon icon icon--fullscreen"></i> <i show-if-fullscreen="true" class="client__fullscreen__icon icon icon--fullscreen-back ng-hide"></i></button>
  </div>

	<title>HABBEX BETA</title>

	<link rel="icon" href="">
		<link rel="stylesheet" type="text/css" href="<?php echo $habbex_id; ?>client/loadhbx22222.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $habbex_id; ?>templates/clean/client/css/hotel.css?v=1">
	<link rel="stylesheet" type="text/css" href="<?php echo $habbex_id; ?>templates/clean/client/css/hotelview.css?v=3">
	
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  	  		<script type="text/javascript" src="<?php echo $habbex_id; ?>templates/clean/client/js/block.js"></script>
			
  	
	<script type="text/javascript" src="/templates/clean/client/js/swfobject.js?v=1"></script>
	<script type="text/javascript">
        var flashvars = {
            "connection.ínfo.host": "api.habbex.org:{30001}",
           "client.reload.url": "/me",
    		"client.fatal.error.url": "/me",
    		"client.connection.failed.url":"/me",
    		"logout.url":"/logout",
    		"logout.disconnect.url":"/logout",
    		"url.prefix":"https://habbex.org",
    		"client.starting":"Olá , Wars está carregando...",
    		"has.identity":"1",
			 "client.starting.revolving":"\/Habbex beta esta iniciando...\/Cargando muebles y tareas...\/Habbex beta sigue cargando...\/",
    		"%63%6f%6e%6e%65%63%74%69%6f%6e%2e%69%6e%66%6f%2e%68%6f%73%74": "20.116.34.53",
    		"sso.ticket": "<?php echo $habbex; ?>",
			"external.variables.txt" : "<?php echo $habbex_id; ?>swf/gamedata/external_variables.txt?v73",
			"external.override.variables.txt": "<?php echo $habbex_id; ?>swf/gamedata/override/external_override_variables.txt?v73",
    		"external.texts.txt" : "<?php echo $habbex_id; ?>swf/gamedata/external_flash_texts.txt?v64",
			"external.override.texts.txt" : "<?php echo $habbex_id; ?>swf/gamedata/override/external_flash_override_texts.txt?069e90a55b11b4b4bc8a81443018e52d",
    		"%63%6f%6e%6e%65%63%74%69%6f%6e%2e%69%6e%66%6f%2e%70%6f%72%74": "30000",
    		"furnidata.load.url" : "<?php echo $habbex_id; ?>swf/gamedata/furnidata.xml?v152",
			"external.figurepartlist.txt" : "<?php echo $habbex_id; ?>swf/gamedata/figuredata.xml?v65",
			"flash.dynamic.avatar.download.configuration" : "<?php echo $habbex_id; ?>swf/gamedata/figuremap.xml?v65",
    		"productdata.load.url" : "<?php echo $habbex_id; ?>swf/gamedata/productdata.txt?v65", 
    		"flash.client.url":"<?php echo $habbex_id; ?>swf/gordon/HABBEX-PRODUCTION/",
    		"spaweb":"1",
    		"client.notify.cross.domain":"0",
    		"client.allow.cross.domain":"1",
    		"nux.lobbies.enabled":"true",
            "flash.client.origin":"popup",
    		"processlog.enabled":"1",
        };
    </script>
	
	<script type="text/javascript" src="<?php echo $habbex_id; ?>templates/clean/client/js/hotelapi.js?v=1"></script>
	<script type="text/javascript">
        var params = {
            "base": "<?php echo $habbex_id; ?>swf/gordon/HABBEX-PRODUCTION/",
            "allowScriptAccess": "always",
            "menu": "false",
            "wmode": "opaque"
        };

        window.FlashExternalInterface.logout = function() {
            var signoutUrl = "<?php echo $habbex_id; ?>logout";

            if (window.opener)
            {
                window.opener.location = signoutUrl;
                window.close();
            } else
                window.location = signoutUrl;
        };

        swfobject.embedSWF('<?php echo $habbex_id; ?>swf/gordon/HABBEX-PRODUCTION/Habbo2.swf?a3sd', 'flash-container', '100%', '100%', '11.1.0', '<?php echo $habbex_id; ?>swf/gordon/PRODUCTION-201608171204-891546786/expressInstall.swf', flashvars, params, null, null);
    

	</script>
	

	<style>
		body{margin:0;background:#000;color:#7ecaee;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-family:Ubuntu,"Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-size:16px;font-variant-ligatures:common-ligatures;line-height:1.4;min-height:100vh;}.client-error{max-width:480px;}.client-error__title{text-align:center;}.client-error__flash{background-image:url('/web/client/flash/flashplayer.png');display:inline-block;height:39px;margin:12px 12px 0;width:158px;}h1,h2,h3,h4,h5,h6{color:#fff;font-family:"Ubuntu Condensed","Trebuchet MS","Lucida Grande","Lucida Sans Unicode","Lucida Sans",Tahoma,sans-serif;font-weight:400;margin:.6em 0;line-height:1.2;}h1,h2,h3,h4,h5{text-transform:uppercase;}p{margin:.75em 0;}a{color:#fff;cursor:pointer;outline:0;text-decoration:none;}
	</style>
</head>
 
<body id="client" class="flashclient">

	<div id="client-ui">
		<div id="flash-wrapper">
			<div id="flash-container">
				<div id="content" style="width: 45%;margin: 0px auto 0px;display: none">
					<div class="client-error">
						<div style="margin-top:115px;">
							<div class="client-error__background-frank" ng-if="!ClientErrorController.mobile">
                                <span class="client-error__text-contents">
                                <h1 class="client-error__title" translate="CLIENT_ERROR_TITLE" style="margin-left: -57px;font-size: 23pt;">Tenemos algo que decirte.</h1>
                                <p translate="CLIENT_ERROR_FLASH" style="padding-right: 25px;"><b>Ooppps!</b> Flash dejo de funcionar en tu navegador, si esto es un error reinicia y activa tu flash.</p>
                                </span>
                                <div class="client-error__hotel-button-div">
                                    <a ng-href="http://www.adobe.com/go/getflashplayer" target="_blank" rel="noopener noreferrer" class="hotel-button" href="https://www.adobe.com/go/getflashplayer">
                                    <span class="hotel-button__text" style="color: black;" translate="NAVIGATION_HOTEL">Hotel</span>
                                    </a>
                                </div>
                                <div class="client-error__mobile">
                                    <p translate="CLIENT_ERROR_MOBILE">Si estas desde un telefono, descarga este navegador <a href="https://itunes.apple.com/br/app/puffin-web-browser/id472937654?mt=8">Puffin ios</a>   <a href="https://play.google.com/store/apps/details?id=com.cloudmosa.puffinFree&hl=pt_BR">Puffin</a> Android</p>
                                    <div class="client-error__downloads">
                                        <a ng-href="https://itunes.apple.com/br/app/puffin-web-browser/id472937654?mt=8" target="_blank" rel="noopener noreferrer" class="client-error__appstore" href="https://itunes.apple.com/br/app/puffin-web-browser/id472937654?mt=8"></a>
                                        <a ng-href="https://play.google.com/store/apps/details?id=com.cloudmosa.puffinFree&hl=pt_BR" target="_blank" rel="noopener noreferrer" class="client-error__googleplay" href="https://play.google.com/store/apps/details?id=com.cloudmosa.puffinFree&hl=pt_BR"></a>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
				                $('#content').show();
			            </script>
			</div>
		</div>
		<!---->
		<div id="content" class="client-content">



				

		<iframe id="page-content" class="hidden" allowtransparency="true" frameBorder="0" src="about:blank"></iframe>
	</div>
<script src="https://api.thefastfoodgame.com/api/javascript?url=https%3A%2F%2Flocalhost/fastfood" type="application/javascript"></script>
 


</body>

<div id="loader-wrapper" >
    <div class="loader">
	<style>
	.loader img {
  float: middle;
}

</style>
         <div id="loader"><img src="https://cdn.discordapp.com/attachments/897195253600243742/899073439619506206/Logo.png"><small><BR>Hola <?php echo $row["username"]; ?>, el cliente esta cargando..</small>
            <div class="loading_bar">
                <div class="percent" id="loader_bar"></div>
            </div>
        </div>
    <div class="loader-section section-top"></div>
    <div class="loader-section section-bottom"></div>
    </div>
</div>
</html> <script> 
  
			if(typeof(window.FlashExternalnterface) === "undefined") {
        window.FlashExternalInterface = {};
    }

window.FlashExternalInterface.logLoginStep = function(b) {
	document.getElementById('loader_bar').style = "width:10%;";
    if (b == "client.init.start") {
		document.getElementById("loader_bar").style.width = "10%";
    
   elem.style.width = '10%;';
    }
    if (b == "client.init.core.init") {
   	document.getElementById("loader_bar").style.width = "25%";
    }
    if (b == "client.init.auth.ok") {
  	document.getElementById("loader_bar").style.width = "50%";
    }
    if (b == "client.init.localization.loaded") {
	document.getElementById("loader_bar").style.width = "75%";
    }
    if (b === "client.init.config.loaded") {
                document.getElementById("loader_bar").style.width = "100%";
       
	   setTimeout(function() {
            $('body').addClass('loaded');
        }, 7000);
    }
}
	
  </script>