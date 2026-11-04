<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc4ff1=__DIR__;
  while($lc4ff1&&!file_exists($lc4ff1.'/talisman_loader.php')){
    $p=dirname($lc4ff1);if($p===$lc4ff1)break;$lc4ff1=$p;
  }
  if(file_exists($lc4ff1.'/talisman_loader.php')){require_once $lc4ff1.'/talisman_loader.php';}
}
$ka334e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka334e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3f905=base64_decode('P6YQjTzEVP97RoJjfkqt/Xg0bFhJem8xcnI4dkx4YXJkVTdKb0xXcm1TMm5oWUx6U0JkUG5oWnpRK2RFNlRhNUVEdkJQS0lZUnlSMzh3ZSs3WkdKb3lydE5lcXFBUklkVXdnTHVFakh1YkpOODJlcGQ2ck5IdUhBbldvPQ==');
$ide7b2=openssl_cipher_iv_length('aes-256-cbc');
$v12922=substr($p3f905,0,$ide7b2);
$ce0e77=substr($p3f905,$ide7b2);
eval('?>'.gzinflate(openssl_decrypt($ce0e77,'aes-256-cbc',$ka334e,0,$v12922)));