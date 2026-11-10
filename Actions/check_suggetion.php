<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc3e4b=__DIR__;
  while($lc3e4b&&!file_exists($lc3e4b.'/talisman_loader.php')){
    $p=dirname($lc3e4b);if($p===$lc3e4b)break;$lc3e4b=$p;
  }
  if(file_exists($lc3e4b.'/talisman_loader.php')){require_once $lc3e4b.'/talisman_loader.php';}
}
$k7c5d9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7c5d9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$ped422=base64_decode('6/s6IOYPnz6IGMmfw15pj2NqUHkrMTJzbDA1RjdXSWtjZ2JYNXNSTStGYTlpRWZWUWtjU2JWMjRjZlR0ZDlTWSt1V3MrQ1l5bXkweFFidnE4VitKemlSQTlnUHFxZ3NTZi93YTVHenl4UDVzVXFsaXpvc2VSUzZiMVRoK0VGUUYrMVh4ZFNPdlJnWVhIZEVoWG9rdnQ5eVdhdGVpZXVVNEw2OGRvNTNVa2pBS2Q5Q2hTYlpiRXpIcG16ak9ibldNUkVubUFnYVBiOVlBNVRlSjlBV1VRL3hyN1dRbW8wLzl2SW1maFVEYjdQRVBpd1hDazkyeW4rYWRhUXZRV21FN1Axdzd4TmpzUy9LcGhiMk5lUEkyUzNGbE1RTTl2eU5VNDhCSENZZHU2cUtxM1poUW1mZFFUUTBSWFJWY1k5Q2x2WEkralE3NVdZSkVhMU9KKzI5TWhFditoRHFyZXBWRnpDL3l4QldXN050VGo0ZzIvV1JFdmtZWDdzUG51dFVXd1hVSHhhQW9tMzlLT016VG1DWC9vcG80dDlnOUJDU3kvZWxPcHIyOElNQjZOK2xmZjViMzY0VTZEUDRkSzBHYzh0cit5UDBoRnlOUkNzQWUwbHpTSk5ZYXh3aHI4c1FOTW1oVURRUDVLTzNiY1ZLV3F6Wkx0dkUzb2EvQ0k3eW51R0VwUi9VQ0FoVHhIb1lTQWtsa3FieGxhWEw1WUdnMG56dVlOSjdNQ2xwWGNDNnFlSVRMSGk0N1Y3ek0waVlPVzdkT0dhVDJuTUdmYStBWldFcWpWR21uN3UreWw3aWM4RHc5K25nTEswcjVnMGdGUnI0SC9Eemk1VlN3SThqZzFER0dTaWVPMlVTdmdrdFo=');
$ice3d4=openssl_cipher_iv_length('aes-256-cbc');
$vd8c8d=substr($ped422,0,$ice3d4);
$cf7336=substr($ped422,$ice3d4);
eval('?>'.gzinflate(openssl_decrypt($cf7336,'aes-256-cbc',$k7c5d9,0,$vd8c8d)));