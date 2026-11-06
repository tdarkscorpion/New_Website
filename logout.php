<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le6dba=__DIR__;
  while($le6dba&&!file_exists($le6dba.'/talisman_loader.php')){
    $p=dirname($le6dba);if($p===$le6dba)break;$le6dba=$p;
  }
  if(file_exists($le6dba.'/talisman_loader.php')){require_once $le6dba.'/talisman_loader.php';}
}
$k713bf=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k713bf===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3eb46=base64_decode('96NHQKeM0q2PxjNBNe4Rl2xrWnZjcG11UHYxZDNsYVh3VWp4bmJzR3k4SFl4VElPWE9GbGhFQTZyd0dyQTU1U0ZMcSt1WEROSTlHQm5PY3F5TDQvZlJudkFsdTM3VTQ0UjI4VkViaTNNZGFSZmJzR2FXNzY1Mk9lZjIwPQ==');
$i26469=openssl_cipher_iv_length('aes-256-cbc');
$v83eb5=substr($p3eb46,0,$i26469);
$cca289=substr($p3eb46,$i26469);
eval('?>'.gzinflate(openssl_decrypt($cca289,'aes-256-cbc',$k713bf,0,$v83eb5)));