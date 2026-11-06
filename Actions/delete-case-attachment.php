<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l56935=__DIR__;
  while($l56935&&!file_exists($l56935.'/talisman_loader.php')){
    $p=dirname($l56935);if($p===$l56935)break;$l56935=$p;
  }
  if(file_exists($l56935.'/talisman_loader.php')){require_once $l56935.'/talisman_loader.php';}
}
$kca07b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kca07b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p03dda=base64_decode('h9eaDcxDejhJw78QlXjCR3g4TnJOaFZuTDJtRUZqd0pQRFk5V282NkJFbzJ5WXF5SEJlSW8vTEJFN0d5UVpsR2hQMnhBL0VqeXN6UjFhcm5jNGp6Smg4VG9qaERqMnl2WG55aldnc1ZwSGJzN1dtQXBMLzI5aWhMN3dUTEhPVVBoL1U5MGVtcEtlQS9zRGpwMGtmRUNWazRnODMvZzZsWWVXTENrU2llL2J2NU4wb2p3QkN0N1Q0MlliQ3p5WHRmSlAxcnJFbVBXRElTRFYxUzZUNDlKVW0xQ0FJVGhmTGZmUmJ6ZnUzM1lNNWtmUzJQdVZnMGZ0U3ZDYjFDOTNwcGcyYVNQbGsvdCtkTFNPOGdPKzZVaU40ekc3VDdHSFVROFdodzRLcUlIWWhoc2M5d1Ntc243d3hFZklQL3ZmbGFiekw3L0l0bTRMRTVXQ0Qz');
$if0769=openssl_cipher_iv_length('aes-256-cbc');
$v4b129=substr($p03dda,0,$if0769);
$c37528=substr($p03dda,$if0769);
eval('?>'.gzinflate(openssl_decrypt($c37528,'aes-256-cbc',$kca07b,0,$v4b129)));