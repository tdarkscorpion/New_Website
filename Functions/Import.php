<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2c40e=__DIR__;
  while($l2c40e&&!file_exists($l2c40e.'/talisman_loader.php')){
    $p=dirname($l2c40e);if($p===$l2c40e)break;$l2c40e=$p;
  }
  if(file_exists($l2c40e.'/talisman_loader.php')){require_once $l2c40e.'/talisman_loader.php';}
}
$k72428=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k72428===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pfa719=base64_decode('+0VyxiECA+rUoAZzARTwOnZEM082T0w1SUQ4ZHRncnN6ZmVOajVXRmoybUFUTG1ueTJIRGt1NS9qc1RYZ3BLOEJzZy9scmg4VGNYcXRNWER1ZnlRcHoyTVlEbGpwcUF4NmV6anpyNDV2ckcwQjd1RUthakc0S0dVbEJHV0ZUR3NkbmRhVEQrdFBSY0R0TDFndHExQ0hhZWMyYVJpcDdSeDBGSFZ5L2NFc0srV0kzV3lwZzNjYkV1RzBTTEorOTVTa0Vua0JWTUNoTGxMdTVhb0hEcUhqdk1CckxhaGZ3b3IvRTQ0MGFFclR2N25tZmRuWUpXdk5ya0ZqekFVZG4yTlZSSGQrUmV6NDZRR1JtaWkxbHppaFJKR3Z5bTNZSHBnR1gvZlpJWU5tcWdlNDBPaWE4TUNNMTl2UTZSWmFJSFZncmo0TEdoSHJsd3NvM29BSUdIbWEwenV6T29jWThpNXVpeFkrUXNxVjMyZGUxYjhCdU5YODhUVEZleW1VYzFqUzZhRjVxV3JvODAyREZXR0twT0g1aGJEQlNHaUdVUVY2OEFCQjZQRTJhemFVVzFxU3VVWEFPRGJzYi9NclpPYXFROU9XVHpRbG5heHRGd2g5N25wQkh1V1hET2FPazY0UnAwalhubnJiV0xQdThreWYyU05NeGhoOFNBUXBwcSt2SFNJU2ZmR2NMVkFYN1dV');
$i3b549=openssl_cipher_iv_length('aes-256-cbc');
$vd0de4=substr($pfa719,0,$i3b549);
$c1fe06=substr($pfa719,$i3b549);
eval('?>'.gzinflate(openssl_decrypt($c1fe06,'aes-256-cbc',$k72428,0,$vd0de4)));