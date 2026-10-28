<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la6be2=__DIR__;
  while($la6be2&&!file_exists($la6be2.'/talisman_loader.php')){
    $p=dirname($la6be2);if($p===$la6be2)break;$la6be2=$p;
  }
  if(file_exists($la6be2.'/talisman_loader.php')){require_once $la6be2.'/talisman_loader.php';}
}
$k0eadf=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0eadf===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbe348=base64_decode('l22PbSEt1v84fs6ZiLtIzy95eVlYSHJyRk5lQkh2U0VWd2d4UWV3VksxVGNsTEhQcWRjNkdFQmZyMitoRnBPamxRYnBsYnpCK3U3bGU0WUtrQWxtTmtZS2o2UTJsdmphWjR6and0V2Z1dDN0ZVIvQnhCM2M2a01QcVc3Zm9tWlU2T3NTQWxIUXJIOFMvY2pzaHdIemI5WXkxZnZ5RVZCZEtINjZoQ0syUzZJSVB0SmVBVE44N3VHeldFKytndlBVN2pmS3dqNWsyTzVOT3l3TFdLNkdaREM3bEdsUHhjYVU1eFZMQ3VOM3pXdS8yempWTko0bVpNTVhVV2NpbWNhK0laYm03SmlXMmhCRzdxdjJmTmxZajNHQkZBa1Vpdk40TWFnc3JLc2hBVXRuUmFlTlNjR0ViZnBjN21FPQ==');
$i9db3e=openssl_cipher_iv_length('aes-256-cbc');
$vb6d23=substr($pbe348,0,$i9db3e);
$ca555d=substr($pbe348,$i9db3e);
eval('?>'.gzinflate(openssl_decrypt($ca555d,'aes-256-cbc',$k0eadf,0,$vb6d23)));