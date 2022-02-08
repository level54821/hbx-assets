<?php

$test = $_GET['habbexbeta'];


error_reporting(0);
include('../config/db.php');


if($_SESSION['username']== ''){
	
	header("Location: /beta.staffv2/ingreso.hbx");
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










 

?>

<html lang="en"><head>
<meta charset="utf-8">
<title>HABBEX BETA</title>

<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, shrink-to-fit=no">
<link rel="shortcut icon" href="https://habbo.es/habbo-imaging/avatarimage?figure=55&headonly=1&size=n&gesture=sml&direction=2&head_direction=3&action=std,crr=667">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<link rel="stylesheet" href="<?php echo $habbex_id; ?>client/styles.level2.css" media="print" onload="this.media='all'">
<noscript>
<link rel="stylesheet" href="<?php echo $habbex_id; ?>client/styles.level2.css"></noscript>

</head>
<body>

<style>
body {
       width: 100%;
    height: 100vh;
    background: url(https://i.imgur.com/NgfcOJn.jpg) top right no-repeat;
    background-size: cover;
    position: relative;
}
.mobil-loader {
    width: 100%;
    height: 100%;
    background-image: linear-gradient(
140deg,#264157,#255276 50%,#225680 75%);
    position: absolute;
    display: none;
}
.modernlogo {
	top: 14px;
    width: 303px;
    height: 90px;
    image-rendering: pixelated;
    background-image: url(https://cdn.discordapp.com/attachments/897195253600243742/899073439619506206/Logo.png);
    background-position: 50%;
    filter: drop-shadow(2px 4px 10px);
    color: #0000006e;
    transform: scale(2);
}
.modern-loader {
    background-image: linear-gradient(red);
}


.loading-box {
opacity: 1;
}
</STYLE>


<div id="app">

</div>
<app-root></app-root>

<script type="text/javascript">
        var NitroConfig = {
		
                  configurationUrls: [ '<?php echo $habbex_id; ?>client/hbx.config.part2.json', '<?php echo $habbex_id; ?>client/hbx.config.json' ],
            sso: ('<?php echo $habbex; ?>' || null)
        };
    </script>
	
	
<script src="<?php echo $habbex_id; ?>client/runtime.level.js" defer type="text/javascript"></script>
<script src="<?php echo $habbex_id; ?>client/polyfills.level.js" defer type="text/javascript"></script>
<script src="<?php echo $habbex_id; ?>client/vendor.level.js" defer type="text/javascript"></script>
<script src="<?php echo $habbex_id; ?>client/main.levelv211.js" defer type="text/javascript"></script>
</body></html>

<style>
				
				ul#navigation {
   
   bottom: 78px;
}

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
	margin-top: 0px;
    margin-left: 0px;
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



			<div>

  <div class="window" id="ventana" draggable="true">
   	
			
</div></div>