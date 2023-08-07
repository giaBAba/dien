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
  
  $header[]="cookie:_ym_uid=1690460478158266214;_ym_d=1690460478;dom3ic8zudi28v8lr6fgphwffqoz0j6c=f0457bb7-8dd3-4a16-aa8c-f08e6761b6a6%3A3%3A1;_ym_isad=2;a=43NNNd3arOBECV3u7kCGI0fB3i0R9NTx;_gcl_au=1.1.1388834055.1690461621;ci_session=5ef755b4646d42b6e0abd7a507fd3058c182e944;sb_main_542dd19a7c7433dc9c8cef7109cac47d=1;ppu_main_748fe673887ab8918cddf812ff36cd91=1;_popfired_expires=Invalid%20Date;ppu_sub_748fe673887ab8918cddf812ff36cd91=3;_popfired=76;lastOpenAt_=1690488411227;sb_count_542dd19a7c7433dc9c8cef7109cac47d=4;token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BQJSAAAAAAAACZUAAuYEJ0y3msPeto6SJfg1sQ2HcPEjHudMZSWu6RYDe_dbo7fkwLuu-k5bHCt0blaZXIMyptafR6OuejgZ3ZXIkCGqNfvybumGtrEwnopU6QvnvN_eR8_bh_9cGj7vXhtFhtNlFfLchOd_swiZuddGXiwxu0oOJvJXhj7Ehyhk-T0nNsSHhlkzQo-oJQ1rx8osdez27Pj7wOwuHOMFwuERVuNOgRHpmdROpbARypW7SlDlCPdpMwW0_Na5vZEDfAzF9Ev4cfy1khtLaJtPbIY0p5bmqpg6z6CnOtw0CnlJB2ez93eu1dv6uxY7bBDaHU6uvkEcrurFCd1x16L1Fsdh8UVM6TtMtbM-vLJ5GEmpbVKREeIF4RgDSm1yNU0kSzbdIjNdqYMNm9-doe1B3Cv4pkm4Wtk2LicrsG-MBf27T9mp60ZZkhDXEvysWwR5XU_hCEWL-ODntoTzlTG0HzjG-MWyTbGzb7t3491F27PLjM6cI-1FtEosi0o0bLf4XQrv9x8Ju_eXM7K4fioedOvhcttmtgD6FarsRTlIFjdztUququowV7-bnKjpERIlKlpt--BMAVByqsxtuDQtZjbEEuoe-fU4UiDQvCrtHtX8RzjF6A1Bh4aOAL8oqoO1QRLH3TlTK9sihEQk2cs6CStSF6z79HmCwY-y3xGWZEcWBm_tYtxACkW2a9zQitcggCGu05iDQ_MBP4M2DhrLUgID3bSFf3CWOloz-WRBUeZAidxHD50A9gczL6lxX2LRiQU_aqM7u5NAsE3ZG8unwC8QdFE;_data_cpc=83-1-1690492011_90-1-1690492009_93-2-1690491997_117-1-1690491988;csrf_cookie_name=62c88e95405d77c987728f9378457ab3";
  
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

echo $banner;
echo "\n\n\n$titik Memulai Claiming....!\n";
function faucet(){
    
//LINKFAUCET

$url="https://dgbpayu.top/faucet/currency/dgb";
return curl($url,headers());
}
//whire

while(true):
    

$faucet=faucet();

$reward=explode('</div>',explode('<b id="minute">1</b>:<b id="second">2</b>',$faucet)[1])[0];

$timer=explode(";",explode("let timer = ",$faucet)[1])[0];

echo"+ ".$reward."faucetpay.io\n";
for($time=$timer;$time>-1;$time--){

echo "\r                   \r";
echo "\rLoading ".$time." Seconds\r";
sleep(60);
}
endwhile;