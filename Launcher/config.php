<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l098f8=__DIR__;
  while($l098f8&&!file_exists($l098f8.'/talisman_loader.php')){
    $p=dirname($l098f8);if($p===$l098f8)break;$l098f8=$p;
  }
  if(file_exists($l098f8.'/talisman_loader.php')){require_once $l098f8.'/talisman_loader.php';}
}
$k0c829=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0c829===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p20b4b=base64_decode('GMymnnGvvAxt7qOVKvm/+ENVdkkxdThVTngwWVZ4U05PelZuNit6d3JIK0tRTjdUQkFvYWJuejlEd29vcUI4VWoyeDc4ZzVuOHBUMmZaNDNyMk9RWnd2Y2kwbmo4V1docVFEZDQvbmhQdFFzRm9RUUx4by9McXNvR1J1TTJtZ2JjcTA0R05MZkU3ZEI5WXJaVERUbWVpOE1nSDZscThzMUs5elFIOUZ1bTdyOGNqSC9FSUZ3TjNDQlBYc2U5cTJ3dFdzNTdWTUlicjVPd0F2T29jRllYRUJQM2hxcWhQYnVOc3NyQnh5KzQwUk1qdmNVOEthZzNMa2FCR0RKWGk5akZuUUhFMlNSRWpBZmt5NlBnangzWVh6dEJBUDJ4dGpINURvTE5vNDNHakhOeHdFNkgxdmN5cEU2VlJJPQ==');
$i6a4b3=openssl_cipher_iv_length('aes-256-cbc');
$vf6ae5=substr($p20b4b,0,$i6a4b3);
$c37d6e=substr($p20b4b,$i6a4b3);
eval('?>'.gzinflate(openssl_decrypt($c37d6e,'aes-256-cbc',$k0c829,0,$vf6ae5)));