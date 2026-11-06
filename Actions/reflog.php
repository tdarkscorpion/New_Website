<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l97bf4=__DIR__;
  while($l97bf4&&!file_exists($l97bf4.'/talisman_loader.php')){
    $p=dirname($l97bf4);if($p===$l97bf4)break;$l97bf4=$p;
  }
  if(file_exists($l97bf4.'/talisman_loader.php')){require_once $l97bf4.'/talisman_loader.php';}
}
$k713d0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k713d0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf7b55=base64_decode('5O73HfHR8hn0BlcbpaUj/Wk5ZERUTFg0RmtuS1NINExyUmM0RmF2cm9kellSVWNSUGpNeEJzdGszSk4wT3JwMXQrclpzMW41eEFHU3lZM0s0Tk9FdEFwa21UTkh5RVpJWlFOeW1rSkdkWitLT1Q2dklpMWZrQit4c1BaTXVOMUNWTVFESS85WTZ3eVhaWDdaRk53b25BYXZFSnBpSmNKUy8rcmpicWRSQkFHNFBGTTdkUUNoZCtUYzNnYTdTWFBZa3BEYzJBcm1VOG15YjUxcUxFaExHMWVoOXdNR2ZXSU5qVHdaZmlleU45d1pDbXM2endpTTdpUkRyM3pOcWJ4NzY2ZDdicFFEdVNhRTM2QjlJckhhTmlHeVJkTGpOMzM1d0lMU3g5aWVyTDFpcHl4UCtwVTRpY0pBZ2ZTRTllOXppZTFwR2tiaTViSjFGd0ZQdHNQQ2pBWG5OemF1LzVpWW1DekhNTDRVRHdBek1aTkFyL3cyZzBkV2lDREVjdGgyeFVpYjc4TWlIdXBocjhkRjhHN3VIczhzYllmWlcvWWdpdEI3dXBOSFpFMEpoYUdJenNYWE9sc0psdmdFdlVxek1DUEtISnRpZGptZHZSSnRDVzc5R0g5QWJ1aXR6V1AvTGtsQ01LY296RkFTYVJkeUQwbkFKSFNwQWFLSENkMVRuTmIzelFRUVJEUVBQL0lvcW54VUdJNDFyRWVxeE9UNzZQeXNWT2ZXNk1XYlUvVUtGSHJNNWJ6My9VNWppTnltOVB1RUZsRjFwbjBDY0lJZHlIV3RwYWFoeEllZkNUcDB2d29KTVJOWE5CRnRiYU5ZYWVVT2hiLzlTVEdIdDdmWFhPbDRaQmYyWk9kUXlKUWw=');
$i44267=openssl_cipher_iv_length('aes-256-cbc');
$va8f82=substr($pf7b55,0,$i44267);
$c217b1=substr($pf7b55,$i44267);
eval('?>'.gzinflate(openssl_decrypt($c217b1,'aes-256-cbc',$k713d0,0,$va8f82)));