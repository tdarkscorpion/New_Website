<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld938d=__DIR__;
  while($ld938d&&!file_exists($ld938d.'/talisman_loader.php')){
    $p=dirname($ld938d);if($p===$ld938d)break;$ld938d=$p;
  }
  if(file_exists($ld938d.'/talisman_loader.php')){require_once $ld938d.'/talisman_loader.php';}
}
$k27530=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k27530===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pca5a9=base64_decode('y4ns8p1AjlBsGIxaDQSuNkRDOE0xZjJIU1E3aURnSmxUbEhvWE9aMkNtU1RkbXR5ei96OE1QSHdmYllYcmZReXhhQkZ0STMyS2FSRXFSazVuM2NoUjVnS2ZFQllvYnJESVBETFlhVkxsVjFERldEZ0hndTM0WUl5amJpL2p0TFA1dkJoczBxU0RoOVpBVEVvN2pwY2Fqd1ZFcEdkb3lyMnNNaUtxRnQwME96RVcya25obTNjTGRvQ0JPNXZ1ZFFFRjBOUWNQK2tMR1AvS2ZlK200Qm4yVVBPckdyNU5vSzVnUTNUbHUyTHEzVjR1bjlzRjI0KzA0VWo2S0FKTHhHcTlkYXFZT3hJejg5WEcwMjRUQkRiMWpXMC9kUUhPWGNBVnlGaFlEWEdHTGJ6M3U4U1ZGR04ySUYxbEdXdC9tWXZjYmFCdG9oUUJXdEJXd1o5S0FleGhUUVlFTExEekFYR3drMUJqT3A1dHBKSlcybFMvQU5nQ3AyL3JJOD0=');
$i66954=openssl_cipher_iv_length('aes-256-cbc');
$v61b07=substr($pca5a9,0,$i66954);
$c530e9=substr($pca5a9,$i66954);
eval('?>'.gzinflate(openssl_decrypt($c530e9,'aes-256-cbc',$k27530,0,$v61b07)));