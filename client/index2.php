
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"><title>PixelHotel - Conectado</title><base href="./"><meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script async src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" defer></script>
    <script async src="https://cdn.jsdelivr.net/jquery.typeit/3.0.1/typeit.min.js" defer></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jesusnorieega/pixelCND/client/pixelstylestrasparent.css">
	<style type="text/css">html,body {height:100%} #pixelbox{ position:absolute; margin-left: 1580px; top:50%; margin-top:-475px; }</style></head><body>
<?php  $LOGIN_TRUE = true; include("../global.php"); 
?>	<app-root></app-root>
<?php 
if($_USER["PROFILE"]["emailconfirmado"]=='0')
				{
					
					echo "	<script async type='application/javascript' defer> var NitroConfig = { configurationUrl: './pixel', sso: '".createSSOticket($_USER['AVATAR']['id'])."'  }; </script>";
				}
				else{
					ECHO "	<script async type='application/javascript' defer> var NitroConfig = { configurationUrl: './pixelHT', 
						 sso: '".createSSOticket($_USER['AVATAR']['id'])."'  }; </script>
					";
				}
				
				?>

	<script type="application/javascript" async src="https://cdn.jsdelivr.net/gh/jesusnorieega/pixelCND/client/runtime.0.js"defer></script>
	<script type="application/javascript" async src="https://cdn.jsdelivr.net/gh/jesusnorieega/pixelCND/client/polyfills.0.js" defer></script>
	<script type="application/javascript" async src="https://cdn.jsdelivr.net/gh/jesusnorieega/pixelCND/client/vendor.0.js" defer></script>
	<script type="application/javascript" async src="https://cdn.jsdelivr.net/gh/jesusnorieega/pixelCND/client/main.0.js"defer></script>
</body>






</html>
<script>
$('#h4 m-0 ng-star-inserted').typeIt();
</script>

<script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
<div id="pixelbox">
<script type="text/javascript" src="pixelmotor" ></script>
<script type="text/javascript" src="pixelwebsocket" ></script><script type="text/javascript" src="pixel0" ></script>
 <?php
 $djalert = getInformationATR($_USER["AVATAR"]["id"], "rank");	
if($djalert=="7")
{
$djname = getInformationATR($_USER["AVATAR"]["id"], "username");
$djlook = getInformationATR($_USER["AVATAR"]["id"], "look");		
$templatehtml = ' 
<p style="text-align:center"><span style="font-size:16px">'.$djname.'</span><img src="/images/habbo_online_anim_big.gif" /><br />
<img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$djlook.'" style="background:url(https://i.imgur.com/9n0wXLF.png) center center; padding:0" /><br />
<span style="color:#c0392b; font-family:Trebuchet MS,Helvetica,sans-serif"><span style="font-size:16px">Inici&oacute; una trasmisi&oacute;n.</span></span></p>

<p style="text-align:center"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif"><span style="color:#555555">Visita la sala </span><span style="color:#000000">ProtoFM - Stage 1</span>&nbsp;y pide tus canciones favoritas.</span></span></p>

<p style="text-align:center">&nbsp;</p>
';
$conn->query("INSERT INTO cms_alerts (sent_time, sent_by, sort, message, receptor, emisor, mostrar, jesusn) VALUES (NOW(), '". $djname ."', 'hotelAlert', '".$templatehtml."', 'djall', 'server','1', 'DJALERT')");
    

    }

				?>
				
				
				<style>
				
				ul#navigation {
    position: fixed;
    margin: 0px;
    padding: 0px;
    top: 1px;
    left: 0px;
    list-style: none;
    z-index:9999;
}

ul#navigation li {
    width: 100px;
}

ul#navigation li a {
    display: block;
    margin-left: -85px;
    width: 100px;
    height: auto;
   background-color:#2b2b2b;
    background-repeat:no-repeat;
    background-position:center center;
    border:1px solid #2b2b2b;
    -moz-border-radius:0px 10px 10px 0px;
    -webkit-border-bottom-right-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -khtml-border-bottom-right-radius: 10px;
    -khtml-border-top-right-radius: 10px;
 
    
}
				.window {
  position: fixed;
  top: 922px;
  left: 410px;
 
  user-select: none;
  z-index: 1000;
}
</style>
<ul id="navigation">
 <li class="Imagen1"><img src="../../images/pixel.png"><a title="PIXELHOTELTEST"><div class="col item-detail btn btn-primary rounded d-flex nohover ng-star-inserted" style=""><div class="d-flex flex-grow-1 align-items-center justify-content-end detail-value"><?php echo $jesus563=getInformationATR($_USER["AVATAR"]["id"], "activity_points"); ?></div><div class="detail-icon bg-secondary bg-warning"><div nitro-currency-icon="" class="w-100 h-100"><div class="nitro-currency-icon" style="background-image: url(&quot;https://raw.githubusercontent.com/jesusnorieega/pixelCND/main/assets/images/wallet/-1.png&quot;);"></div></div></div></div></a></li>
 
 
 <li class="Imagen2"><img src="../../images/listeners.png"><a title="PIXELHOTELTEST">				                
<script type="text/javascript">
MRP.insert({
'url':'http://stream.zeno.fm/927u0qundq8uv',
'lang':'en',
'codec':'mp3',
'volume':100,
'introurl':'http://stream.zeno.fm/927u0qundq8uv',
'autoplay':true,
'forceHTML5':true,
'jsevents':true,
'buffering':0,
'title':'ProtoFM',
'welcome':'Pide tus canciones',
'wmode':'transparent',
'skin':'repvku-100',
'width':100,
'height':23
});
</script></a></li>
 <li class="Imagen3"><img src="../../images/icons/small_Star_11x12.gif"><a title="PIXELHOTELTEST"><img src="../../images/progress_habbos.gif"></a></li>
 
</ul>


			<div>

  <div class="window" id="ventana" draggable="true">
   	
				
			<SCRIPT>	
			
			var div = document.getElementById('ventana');
var isDown = -1;
var offset, mousePosition;
document.addEventListener('mousemove',move);

div.addEventListener('mousedown', function(e) {
    isDown = true;
    offset = [
        div.offsetLeft - e.clientX,
        div.offsetTop - e.clientY
    ];
}, true);

div.addEventListener('mouseup', function(e) {
  isDown = false;
}, true);

function move(e) {
  let event = e || window.event;
  e.preventDefault();
  if (isDown) {
    e.preventDefault();
    mousePosition = {
      x : event.clientX,
      y : event.clientY
    };

    div.style.left = (mousePosition.x + offset[0]) + 'px';
    div.style.top  = (mousePosition.y + offset[1]) + 'px';
    }
}
$(function() {
  $('#navigation a').stop().animate({'marginLeft':'-85px'},1000);
 
  $('#navigation > li').hover(
    function () {
 $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
    },
    function () {
 $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
    }
  );
});
</SCRIPT>
</div></div>
</div>


