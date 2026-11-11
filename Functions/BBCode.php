<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0c155=__DIR__;
  while($l0c155&&!file_exists($l0c155.'/talisman_loader.php')){
    $p=dirname($l0c155);if($p===$l0c155)break;$l0c155=$p;
  }
  if(file_exists($l0c155.'/talisman_loader.php')){require_once $l0c155.'/talisman_loader.php';}
}
$kad9e7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kad9e7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0f4d9=base64_decode('klBQMYLLuqdV1G0L1rM5N2o3aWlGOWJ2eUkxNm5DbWpKQ3RoZzB5amgzUFNOL1R2MlZpMUVVODFQdXQ0Tk9XLzlVRXBMaWRRRzVYSmF5c1V6dlJnaWl5bXh5cERlMGRidU1WbUhlR1RGdHQ5eHdYem1aTDRpeEtoRWppbmFUbDZQZjNuakpMMFZ5WHdMZXVMcTNLc2ZXZm5wbmFOcVhOOHlVN29uNDhISDlpOENTdU1xK08xM1JvOE1zVS80UmRFa3doSHd4OTVjYkdhRE1MSWM3cTdabU0xWC9JRlpnaFM0Ykl2YzV1WnlKUm5jMTVKcnpsUlpHcnJZeEJTcFBsYTdKQUhEbGRINDhGYURGbjc2MlQ3K0dQRGdJM0ZCQ2s3TUxzM3RBd1hEZUtjOTdWWWxwSlhNZnAwWFY0RThsZDVoa09oL3BLRjJHcUhla1Z0');
$ibc679=openssl_cipher_iv_length('aes-256-cbc');
$v5ccec=substr($p0f4d9,0,$ibc679);
$c51fb6=substr($p0f4d9,$ibc679);
eval('?>'.gzinflate(openssl_decrypt($c51fb6,'aes-256-cbc',$kad9e7,0,$v5ccec)));