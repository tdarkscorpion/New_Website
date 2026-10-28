<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfe51e=__DIR__;
  while($lfe51e&&!file_exists($lfe51e.'/talisman_loader.php')){
    $p=dirname($lfe51e);if($p===$lfe51e)break;$lfe51e=$p;
  }
  if(file_exists($lfe51e.'/talisman_loader.php')){require_once $lfe51e.'/talisman_loader.php';}
}
$k4a1dc=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4a1dc===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6c46c=base64_decode('cvVzdzWixpX2ieGvdksWFDcxOVh6TVJsSGhVMlo1ektTVDdkV0xDQnBlZ0FwUUI3czNsMDNySVcrK0g5Yi9IS3NielFKcG9RV1pQZkN0Y2c3SGNwOGdiQ2pRc3U1Z3pqaHROMUt4NzExSWQrVWpYVTFDVzIxZDRoVWpwQ01jZGxuc2Voc3FhVkxTeFZ2ZEo3SVRoTHRTczRFcElSRWNDeU9KZ09NcG9tUThobEh0OGhySjNqL042b09rWlV2N2VUNXpnQWE2YVFCM3dieHJTSDNMeFAzL01NOVYrREtQTWdiSWxIdDVteHdjREFPTVJYcEFFQ25xR2FQTldpZVFobmpZeHRRejNaczhCdnJ5N25PQ051NzlkcVNEbEsvditWYld5WkNmVVRmbUZSaFNVNEFTYWJ5WEhveGNUMzk1em9pcEZ3Rk00c3lmdWZPWER6MEh0ay9FanpLTFpFenRIM25XdEtoQlQzMTNRT0tuaWZCT2h3Q3p1TWswbHRTT010UFVUeUNkWVZ0cDhMbWlnb2pNVXZZYlVONWttTzdZNjFVK2JTTngvWDNlMlVRZ05EdVIvSlRaS3c5Rmw5S0kxeUNUYkVVV2VSUk9xc2FqNjRnZ0ZxRkFsbTEyTzN5dENNTFZZZmFjN0ZFTExRUU9PUjBwdkd5WUsyWG5nUlBLSk1Wem5uZU4vQkNaVEhqem1oaXN4UFR3VzNGT3lKMlIvbDdwVEp3ZHFlc1BTa2lDRnNQOXdGdjVJdXovd1U4bkhxNlVSVDgwNmhDdjdjc1hJMWMvRUV1cUNicFRKZGtTTkFBaVpGckl4Q0lPak5DWWhKd2pZenBFd0NWMUVPUTdOMmFNQ3VZTFNDc3AwWFNka0U=');
$i1559b=openssl_cipher_iv_length('aes-256-cbc');
$v59872=substr($p6c46c,0,$i1559b);
$ce0f2d=substr($p6c46c,$i1559b);
eval('?>'.gzinflate(openssl_decrypt($ce0f2d,'aes-256-cbc',$k4a1dc,0,$v59872)));