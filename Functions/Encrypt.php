<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5c4c9=__DIR__;
  while($l5c4c9&&!file_exists($l5c4c9.'/talisman_loader.php')){
    $p=dirname($l5c4c9);if($p===$l5c4c9)break;$l5c4c9=$p;
  }
  if(file_exists($l5c4c9.'/talisman_loader.php')){require_once $l5c4c9.'/talisman_loader.php';}
}
$k0fc20=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0fc20===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcced5=base64_decode('TpgQF/YnF327eV5Er2cmlEk2S0dzVHEvRW01VG5LTXkzM1ZGS0thQyt3ZnNLenJqbUIxdXpYTm1qQlpnaG14Z2pYdEk1ckNaQ3Frc1ZPc0VIWHdzajRkYm52amxJUW9sTVZVMmZVanI5bWpEN3A0NDFPRkoyZ1RGOHNLU3Z2eTZGbzRPMmU4b3oraEJ0Ulc0TjVibncvZFBmYzJncjdJNHY0K3EzK0dnUTZad3N0MlFzQnNpc29ib3VBb3p1bVN3TGV4UyttTytDRkdIUlp2MklYWE00bEswc0I4UXNsTHcwWVp4OXB6aHA3QnZ1RTRJMi9jMUQ2Q3JaUm00ZkV3UHBKK29OdmdRMzFGWjM2UkJRZVpGOUpEZis2ZFBGd1JMVEt6aGN2L3pxL3lHcnRndWhOeFRPSXRNQWlyY2VBS0lMMWgycnNJRHoxRmxRbURsQWJ4UjdDUE5aRXhINkZnM04rYWxrNTQvb3p4WStCQ2FzaVJZSHk1bEFQS3FOM24zdlk0U3gwdGhjQVBBQnZhTitKVWl2N0VMVnpPQjdsbXFFZU5wdThRYS9JZWpLUmpPTG41Ym9vcFdOT1dHS3ZuUWYxR2dDeGZ6MnZKRjkyMjM=');
$i7b709=openssl_cipher_iv_length('aes-256-cbc');
$v93654=substr($pcced5,0,$i7b709);
$cf7906=substr($pcced5,$i7b709);
eval('?>'.gzinflate(openssl_decrypt($cf7906,'aes-256-cbc',$k0fc20,0,$v93654)));