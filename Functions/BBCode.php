<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2947d=__DIR__;
  while($l2947d&&!file_exists($l2947d.'/talisman_loader.php')){
    $p=dirname($l2947d);if($p===$l2947d)break;$l2947d=$p;
  }
  if(file_exists($l2947d.'/talisman_loader.php')){require_once $l2947d.'/talisman_loader.php';}
}
$k5f22f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5f22f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p43dd0=base64_decode('PLkD1yrd3BvJTD17Uoy/uTRvS2p6WGNUdVFOd2MxYTMzMWtNaUFoQzZTY1BRcXlOOGxzTVMzQ0JsWVoya1N5NmhTSTRDcVZtS3greVYwdEZEOEVHbGVibG0vQ1lDUmZVYnY5Vm1PMVBCZ2lCMkNjdEhPTnNyazYydCtkOTVFTGlMdTF5dnRicjVFTU5ueWF2V2pJZWdqUFlFTmJPOW5OcDNsOXRtUEdBQ3NzNE5kdVRhY08zWGVVZG9YVGNNRDRWZDhHSXlyM2dLek5lWHdpa05kZmIzNU8wczZQOHJHS25odktwOUJ1ZnNXUnNQKzRxT1hucjBqWnRaTHc4T1Q5RjMrWUJBdGcvMER5M2FveVdGSHQ2WklmcERCVEVGQlc4OFpBSFYwemI3TWtIR2YxMktOcmZtS2gxczRSR0ZxdW5JckNxVHkrZVMraVQyWXRq');
$i684da=openssl_cipher_iv_length('aes-256-cbc');
$v800d7=substr($p43dd0,0,$i684da);
$cee1bb=substr($p43dd0,$i684da);
eval('?>'.gzinflate(openssl_decrypt($cee1bb,'aes-256-cbc',$k5f22f,0,$v800d7)));