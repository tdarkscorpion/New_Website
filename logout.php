<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf6df0=__DIR__;
  while($lf6df0&&!file_exists($lf6df0.'/talisman_loader.php')){
    $p=dirname($lf6df0);if($p===$lf6df0)break;$lf6df0=$p;
  }
  if(file_exists($lf6df0.'/talisman_loader.php')){require_once $lf6df0.'/talisman_loader.php';}
}
$k4bdd9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4bdd9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pfd9d5=base64_decode('CYIg4o0AVchhg5JjZNHGBVphT0o1R1ZWekxseVZFZGhxazRENGYyMkdZZTBYV1N1alArZE5jaG8wNk14eFZFby8rckFjWkszUnhjc2ZrV1JqOVVrM2pJQ2l0ZC9VeTlMM2tDN1UrbHpETHVkOWs0MlZZcTVoWnpIU1dNPQ==');
$i5f05b=openssl_cipher_iv_length('aes-256-cbc');
$v88196=substr($pfd9d5,0,$i5f05b);
$ccc37f=substr($pfd9d5,$i5f05b);
eval('?>'.gzinflate(openssl_decrypt($ccc37f,'aes-256-cbc',$k4bdd9,0,$v88196)));