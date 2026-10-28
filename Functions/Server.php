<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld9e10=__DIR__;
  while($ld9e10&&!file_exists($ld9e10.'/talisman_loader.php')){
    $p=dirname($ld9e10);if($p===$ld9e10)break;$ld9e10=$p;
  }
  if(file_exists($ld9e10.'/talisman_loader.php')){require_once $ld9e10.'/talisman_loader.php';}
}
$kcd654=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcd654===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p54f66=base64_decode('yPyx4lEpG0pcwQ7Spr0dXTFQNjlEQmNHWnh4L1FQMHZ0TjgrQXl2VkY2bnV6dTZDd2t2RE05VnkzdnJLZjI1SUNPZ1hicVA3VzZQdFdrOGVvZmduTTc3cVlqZUNVa2pIeVJLRFBRV3hib2RaV0FKanpBSXowVHJPZitRUTFmbklmeldlRVZiZUVqMHJ4b2dldmtmQTlqR0lKZkJvcTRRU3IvYkg4ZUZBM0dGSDUyZklPODMrT0JXcEZ5dW1Ua0xWbVRYUWphUUl0Rnl4SWxtUjZ5ZGppL1BrekJISE9PVXVVRGZSeVI2UFFlVVVXaHdIS25tcWVwY3lnWUs1T1JEYjFySFRoODBnMVlnV0E5Tzl2SEo5R3IwVm4wNThKWUU1N29GVlhyK2Jya1pTSW10ZnVDZVdUbmdaUjJ3PQ==');
$i9c997=openssl_cipher_iv_length('aes-256-cbc');
$v904aa=substr($p54f66,0,$i9c997);
$c287a5=substr($p54f66,$i9c997);
eval('?>'.gzinflate(openssl_decrypt($c287a5,'aes-256-cbc',$kcd654,0,$v904aa)));