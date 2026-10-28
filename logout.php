<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4891a=__DIR__;
  while($l4891a&&!file_exists($l4891a.'/talisman_loader.php')){
    $p=dirname($l4891a);if($p===$l4891a)break;$l4891a=$p;
  }
  if(file_exists($l4891a.'/talisman_loader.php')){require_once $l4891a.'/talisman_loader.php';}
}
$k2b8c2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2b8c2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa243d=base64_decode('iG7Dr7JVfDyeLO7LiR1WNyt1TUhoQjFGN3RFUHZMbnZJMGsxaFVRNXVYQ09JT09HYXphMGVkTk9nK25mV1lhMVBMbnludVlHbVltbzJIZ2tvektOTkNkTnhMRzJjbWdhNGNQS0s0Qk44RjMvTTlRZmZHUnh3VGFhZ2ZRPQ==');
$ib0897=openssl_cipher_iv_length('aes-256-cbc');
$v8e1a5=substr($pa243d,0,$ib0897);
$c2cd40=substr($pa243d,$ib0897);
eval('?>'.gzinflate(openssl_decrypt($c2cd40,'aes-256-cbc',$k2b8c2,0,$v8e1a5)));