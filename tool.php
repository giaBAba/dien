<?php
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Dienhacker');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$pink="\033[0;37m";
$pink2="\003[0;37m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$abu2}[{$res}•{$abu2}]{$green2}";


$banner = "\r{$yellow2}                    .';:lloolc;'.....
                  ,lxOKXXNNNNXK00Oxl:.
 vision:01       .dk00KKKXXNNNXKKK0Okdc.
                ,c,...,ldOKKKOd;....,c:.
 hack vietnam   ..,::'. .;dOl. .:dkxl.;'
                ,odllc:'..KX;.;lc:;:c,,'
 viruS Attack   :;,'...;coKNdl:,...,,,:;
                oKXKKXXNXOKNkkXXXKKKK0d;.
                ;xkkOOOOKkKNkk0kkOOkxdc.
                ...';cdd;,;:'';ldc;'..'.
                 .:':kOkd. . .lkkxc..,..
                  .c,,;;,,loc,,;;,.,l..
                   .l;,c::;;;::,,.;c..
                     ;lokOl .kxl:c,..
                      .coOc .Oxl;.
                         '; .:'

{$purple2}==== không Gì Là Khó . Sợ Không Biết Làm===
{$red2}[Bản Quyền] {$abu2} :{$green2} [Diện Hacker]
{$red2}[Channel Youtube]{$green2} :{$green2}[youtube/HongLe] {$green2}";

sleep(8);

function headers(){
  global $user_agent,$cookie;
  $header=array();
  
  //HOST
  
  $header[]="Host:dgbpayu.top";
  
  //ACCEPT
  
  $header[]="accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7";
  
  //USER-AGENT
  
  $header[]="user-agent:Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Mobile Safari/537.36";
  
  //COOKIE
  
  $header[]="cookie:_ym_uid=1690460478158266214;_ym_d=1690460478;dom3ic8zudi28v8lr6fgphwffqoz0j6c=f0457bb7-8dd3-4a16-aa8c-f08e6761b6a6%3A3%3A1;_ym_isad=2;a=43NNNd3arOBECV3u7kCGI0fB3i0R9NTx;_gcl_au=1.1.1388834055.1690461621;sb_main_542dd19a7c7433dc9c8cef7109cac47d=1;ppu_main_748fe673887ab8918cddf812ff36cd91=1;lastOpenAt_=1690468008631;ci_session=ed41af2215d0f9b8295e5dabb7126a64c44e390f;sb_count_542dd19a7c7433dc9c8cef7109cac47d=5;ppu_sub_748fe673887ab8918cddf812ff36cd91=4;token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BQIyAAAAAAAACZUAAgiCUBJaDUHNHBMLcjgKMInAZhoAStAJWII61udAFmUYcM1fFL5Mv12r55sdEjlvAcQi5QXaprL6mJH6HCKx7fl2GLAII8tb1w82Mr55ez19JBnHmKijP5WsqQNP5JceMmT9itEuvricCcsOqgoqWDo2L8TdNuABJCKy4_nXVOIDB1hZwIKTjdpnXu2uhPOqm6wxcS7ExbAQq1CtJQfvKLacuJ-9rzxR4si2g7Q00-8RDLXN70ab85um1S-Z24k-Bdre07TqXxCB50Xd9yQ2BnHBwPSjOrgmIaFvQGWeQkfJObGjoaprtQkz_iY4PPVTT63TE_R5SzoC01D-ZSvYpP19eCdm--pVtT7-0rFJcG9b3cdVIwN90dQf-q0h2Zz6j4vVelOjUIaazVa-UaUSx1VVXmQtERbBWiagXLtaWdJG1jIGzYd1ObCZNo3-RBtrSvN_6s80ndwIzRVb7lOroqrdSp9PeL9VwZ2FHK18FaO9bl7DHHXXCpOSBY4w70Mx9JsQ5_pQjv-pkADmteOVI6dtBT5pjn0cmRrxqU7OYUCnlANWyKXLHfkzyD32ndySnEMU7yfz75Di2tXfHhm6jSI5SrrZc_AuVuME8UftKgzfdaH8icclAodqj3z5Oa4Us81amOpaSJE_DdAlGr35RijOsHVWdseDekO6D8Y2stzpWnL-yBhY_JDj9Q4sEZVsZLd6wHYGBQG8aDGQEdLtoJ6vW-s08qfP_MMroLCyidiI;_popprepop=1;_data_html=36-1-1690476088;_data_cpc=24-1-1690476015_32-1-1690476005_71-1-1690476113_77-1-1690476035_90-1-1690476098_92-1-1690476027_117-1-1690476078;csrf_cookie_name=5b5e899af7d6e6e62bd5378c76308938";
  
return $header;
}


function curl($url=0,$header=0){
$ch=curl_init();
curl_setopt_array($ch,array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_SSL_VERIFYPEER => null,
    CURLOPT_COOKIEJAR => "cookie.txt",
    CURLOPT_COOKIEFILE => "cookie.txt",
));
return curl_exec($ch);
curl_close($ch);
}
system('clear');


function faucet(){
    
//LINKFAUCET

$url="https://dgbpayu.top/faucet/currency/dgb";
return curl($url,headers());
}


$faucet=faucet();
$reward=explode('<b id="minute">1</b>:<b id="second">0</b>',explode('<div class="card-body">',$faucet)[1])[0];

echo"+ ".$reward."faucetpay.io\n";
