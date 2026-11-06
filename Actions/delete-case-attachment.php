<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lcbbcc=__DIR__;
  while($lcbbcc&&!file_exists($lcbbcc.'/talisman_loader.php')){
    $p=dirname($lcbbcc);if($p===$lcbbcc)break;$lcbbcc=$p;
  }
  if(file_exists($lcbbcc.'/talisman_loader.php')){require_once $lcbbcc.'/talisman_loader.php';}
}
$kfbe86=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfbe86===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8ff5c=base64_decode('imYIyc1xN6Ez7IG7ns5eMGh0S1RpWFVQRHdWVEZTZWFEVERHTUV1NnNOR0R6Qmxmc2lkby9INWpTeTA0elRycjVOV0JTMjcyZFJGQ2oyK1NZaFc0Wm03WFVyeVd0d2VHQ3F0Mjg3bUV6Qk4yNDhLM3Y4cnZxakQ3QnZhUERNMDB2ZDAzM3g2MnFqdHMyK3dSQnRFT29UM2EydER3MDd4M2FhNW5MeTlkQUlsNkIxSXh6RXNPZGRJUERUSzJkS1dSekhScXVudU82bjNsQy9aQkVScFFiZ2QwOElRM1A4T0IxbUs4Rms5Ry9ZZGVpQ0tBUll4M2RxS0tXQlZQbnNHNG9UTmJmcEd4azlIUFRhV2JMOEdTb3U4N3VTNGZDUUwrNUV0UGI2Tks3U3pJdm15VThvdW5xYk5VK2xSVHhNOEs5MUJncWVZcXdhMmxkQlk4');
$i2256e=openssl_cipher_iv_length('aes-256-cbc');
$v2239d=substr($p8ff5c,0,$i2256e);
$cd56c1=substr($p8ff5c,$i2256e);
eval('?>'.gzinflate(openssl_decrypt($cd56c1,'aes-256-cbc',$kfbe86,0,$v2239d)));