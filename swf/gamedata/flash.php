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


$name=$row["username"];
$look="https://habbo.city/habbo-imaging/avatarimage?figure=".$row["figure"]."&amp;&amp;size=sml&amp;direction=2&amp;head_direction=2&amp;crr=3&amp;gesture=sml&amp;frame=3&amp;headonly=1";
//2021 current working model
$urls = "https://discord.com/api/webhooks/913798135749435423/x7iC-IG99_WD7UC2_YWpx3-aR78OINdjtGU6ul9HepVOnTdnhZ6p7eLQDtWYAlWBFLFe";
// security issue with this being false not tested ?? curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$hookObject = json_encode([
    /*
     * The general "message" shown above your embeds
     */
    "content" => "$name is now online.",
    /*
     * The username shown in the message
     */
    "username" => "HBX $name",
    /*
     * The image location for the senders image
     */
    "avatar_url" => $look,
    /*
     * Whether or not to read the message in Text-to-speech
     */
    "tts" => false,
    /*
     * File contents to send to upload a file
     */
    // "file" => "",
    /*
     * An array of Embeds
     */
    "embeds" => [
        /*
         * Our first embed
         */
        [
            // Set the title for your embed
            "title" => "Client flash",
            
            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",
            
            // A description for your embed
            "description" => "",
            
            // The URL of where your title will be a link to
            "url" => "https://staffhabbex.net/",
            
            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => date('Y-m-d H:i:s'),
            
            // The integer color to be used on the left side of the embed
            "color" => hexdec( "FFFFFF" ),
            
            // Footer object
            "footer" => [
                "text" => "Habbex Hotel",
                "icon_url" => "https://staffhabbex.net/images/habbo_online_anim.gif"
            ],
            
       
            
            // Thumbnail object
            "thumbnail" => [
                "url" => $look
            ],
            
            // Author object
            "author" => [
                "name" => "HBX Logger",
                "url" => "https://staffhabbex.net/"
            ]
        ]
    ]
    
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [ 'username' => 'Testing BOT', 'content' => 'Testing message' ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $hookObject);
$response   = curl_exec($ch);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br"><link rel="shortcut icon" href=""/><!DOCTYPE HTML>
<html>
<head>

	<style type="text/css">
	 @keyframes animatedBackground {
    from { background-position: 0 0; }
    to { background-position: 100% 0; }
}

@-webkit-keyframes animatedBackground {
    from { background-position: 0 0; }
    to { background-position: 100% 0; }
}

@-ms-keyframes animatedBackground {
    from { background-position: 0 0; }
    to { background-position: 100% 0; }
}

@-moz-keyframes animatedBackground {
    from { background-position: 0 0; }
    to { background-position: 100% 0; }
}
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
  

height: 99px;
width: 303px;
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
 margin-top: 270px;

}
.loading_bar {
  display: block;
  border:0px solid white;
  padding:2px;
  height:100px;
  width: 370px;
  z-index: 1001;
  margin-top:8px;
}
#loader_bar.percent {
  background:url(https://i.imgur.com/zch7IEp.png);
  display: block;
  opacity:0;
  background-size:cover;
 
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
     

 background: url('https://staffhabbex.net/clouds.png') repeat,linear-gradient(to right, #9EF0F0, #6DB3F2);
    animation: animatedBackground 40s linear infinite;
    -ms-animation: animatedBackground 40s linear infinite;
    -moz-animation: animatedBackground 40s linear infinite;
    -webkit-animation: animatedBackground 40s linear infinite;
	 
   
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
 <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
<div id="movible">
<script type="text/javascript">
MRP.insert({
'url':'http://stream.zeno.fm/k5957qundq8uv',
'lang':'es',
'codec':'mp3',
'volume':100,
'autoplay':true,
'forceHTML5':true,
'jsevents':true,
'buffering':0,
'title':'habbex',
'welcome':'Habbex FM',
'wmode':'transparent',
'skin':'substream',
'width':180,
'height':30
});
</script></div>
 </div>

	<title>HABBEX BETA</title>

	<link rel="icon" href="">
		
	<link rel="stylesheet" type="text/css" href="https://staffhabbex.net/templates/clean/client/css/hotel.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://staffhabbex.net/templates/clean/client/css/hotelview.css?v=3">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  	  		
			<!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->

<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
			
			
			<script type="text/javascript" src="https://staffhabbex.net/templates/clean/client/js/block.js"></script>
			
  	
	<script type="text/javascript" src="https://staffhabbex.net/templates/clean/client/js/swfobject.js?v=1"></script>
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
    		"%63%6f%6e%6e%65%63%74%69%6f%6e%2e%69%6e%66%6f%2e%68%6f%73%74": "40.77.41.149",
    		"sso.ticket": "<?php echo $habbex; ?>",
			"external.variables.txt" : "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/external_variableslevel.txt?hbx=<?php echo $habbex; ?>",
			"external.override.variables.txt": "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/override/external_override_variables.txt?hbx=<?php echo $habbex; ?>",
    		"external.texts.txt" : "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/external_flash_texts.txt?hbx=<?php echo $habbex; ?>",
			"external.override.texts.txt" : "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/override/external_flash_override_texts.txt?hbx=<?php echo $habbex; ?>",
    		"%63%6f%6e%6e%65%63%74%69%6f%6e%2e%69%6e%66%6f%2e%70%6f%72%74": "30000",
    		"furnidata.load.url" : "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/fndtahbxlevel.xml",
			"external.figurepartlist.txt" : "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/figuredataintellij.xml?hbx=<?php echo $habbex; ?>",
			"flash.dynamic.avatar.download.configuration" : "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/figuremap3.xml?hbx=<?php echo $habbex; ?>",
    		"productdata.load.url" : "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gamedata/productdata.txt?hbx=<?php echo $habbex; ?>", 
    		"flash.client.url":"https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gordon/HABBEX-PRODUCTION/",
    		"spaweb":"1",
    		"client.notify.cross.domain":"0",
    		"client.allow.cross.domain":"1",
    		"nux.lobbies.enabled":"true",
            "flash.client.origin":"popup",
    		"processlog.enabled":"1",
        };
    </script>
	
	<script type="text/javascript" src="https://staffhabbex.net/templates/clean/client/js/hotelapi.js?v=1"></script>
	<script type="text/javascript">
        var params = {
            "base": "https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gordon/HABBEX-PRODUCTION/",
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

        swfobject.embedSWF('https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gordon/HABBEX-PRODUCTION/hbx.swf', 'flash-container', '100%', '100%', '11.1.0', 'https://cdn.jsdelivr.net/gh/kadirasuira/cdnhbx/swf/gordon/PRODUCTION-201608171204-891546786/expressInstall.swf', flashvars, params, null, null);
   

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
								
								$(document).ready( () => {
  
  // Elemento movible normal
  $("#movible").draggable();
  
  // Elemento movible con otro cursor
  $("#movible2").draggable({
    cursor: "move",
  });
  
  // Elemento movible con delay
  $("#movible3").draggable({
    cursor: "move", 
    grid: [50, 50]
  });
  
  // Elemento movible con límites
   $("#movible4").draggable({
    cursor: "move", 
    containment: "parent"
  });
  
});
			            </script>
			</div>
		</div>
		<!---->
		<div id="content" class="client-content">



				

		<iframe id="page-content" class="hidden" allowtransparency="true" frameBorder="0" src="about:blank"></iframe>
	</div>

 


</body>

<div id="loader-wrapper" >
    <div class="loader">
	<style>
	.loader img {
  float: middle;
}

</style>
         <div id="loader"><small><BR><span id="loaderr"></span></small>
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
	document.getElementById('loader_bar').style = "width:100%;";
	 document.getElementById("loader_bar").style. opacity = "0.1";
    if (b == "client.init.start") {
		document.getElementById("loader_bar").style.width = "20%";
      document.getElementById("loader_bar").style. opacity = "0.2";
   elem.style.width = '10%;';
 document.getElementById('loaderr').innerHTML = "";
    }
    if (b == "client.init.core.init") {
   	document.getElementById("loader_bar").style.width = "25%";
	  document.getElementById('loaderr').innerHTML = "";
	    document.getElementById("loader_bar").style.opacity = "0.3";
    }
    if (b == "client.init.auth.ok") {
  	document.getElementById("loader_bar").style.width = "50%";
	  document.getElementById("loader_bar").style.opacity = "0.5";
	 document.getElementById('loaderr').innerHTML = "";
    }
    if (b == "client.init.localization.loaded") {
	document.getElementById("loader_bar").style.width = "75%";
	 document.getElementById("loader_bar").style.opacity = "0.7";
	  document.getElementById('loaderr').innerHTML = "";
    }
    if (b === "client.init.config.loaded") {
                document.getElementById("loader_bar").style.width = "100%";
				 document.getElementById('loaderr').innerHTML = "";
				  document.getElementById("loader_bar").style. opacity = "1";
        
	   setTimeout(function() {
            $('body').addClass('loaded');
        }, 1000);
    }
}
	
  </script>
