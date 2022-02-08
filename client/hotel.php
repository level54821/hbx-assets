<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>ProtoHT - Nitro Client</title>
    <base href="./">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="preload" href="styles.9.css">
    <link rel="stylesheet" href="styles.9.css">
	<style type="text/css">
	html,body {height:100%}
#coDntenedor{
    position:absolute;
  
	 margin-left: 1580px;
    top:50%;
    margin-top:-460px; /*el negativo de la mitad de la altura del div*/
    }
</style>
</head>
<body>

		
    <app-root></app-root>
    <script>
        var NitroConfig = {
            configurationUrl: './configuration.json',
            sso: (new URLSearchParams(window.location.search).get('sso') || null)
        };
    </script>
<script async src="runtime.9.js" defer></script><script async src="polyfills.9.js" defer></script><script async src="styles.js" defer></script><script async src="vendor.9.js" defer></script><script async src="main.9.js" defer></script></body>
</html>
<div id="contenedor">
<!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
<div id="coDntenedor">
<script type="text/javascript" src="http://104.215.95.167/js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="http://104.215.95.167/js/sweetalert2.all.js" ></script><script type="text/javascript" src="http://104.215.95.167/js/alertasw.js" ></script>
 <?php
  
	
//ENLACES DE PROTOHT.NET CODED BY JN.
// ONLY USE WITH MORNINGSTAR COMPILED BY JN EDITION.
// ES-EN LENGUAGE CONFIG FILE 4 + INFORMATION.
  include("../global.php");
$djalert = getInformationATR($_USER["AVATAR"]["id"], "rank");	
if($djalert=="3")
	
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
				
				<div class="col item-detail btn btn-primary rounded d-flex nohover ng-star-inserted" style=""><div class="d-flex flex-grow-1 align-items-center justify-content-end detail-value"> 
				
				
				
				
				                
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
</script></div><div class="detail-icon bg-secondary"><div nitro-currency-icon="" class="w-100 h-100"><div class="nitro-currency-icon"></div></div></div></div>
						
 
			  
			




</div>
<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
</div>

