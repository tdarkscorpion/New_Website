<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4d83b=__DIR__;
  while($l4d83b&&!file_exists($l4d83b.'/talisman_loader.php')){
    $p=dirname($l4d83b);if($p===$l4d83b)break;$l4d83b=$p;
  }
  if(file_exists($l4d83b.'/talisman_loader.php')){require_once $l4d83b.'/talisman_loader.php';}
}
$kebf39=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kebf39===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p01027=base64_decode('0tppncctHMUPHlaz+QiHSkZMVzJudVZlZFo5QUdlRDRUYnByWmdKUDJ1akNzVlRtRk1vQWhNdVF3alF1clczSnNUblJ1d2JteGtZeFZkMk9LR3dKY3YvRVhJWWI4alFOc3ZWQmJ4clc0QXdlckNWdko5NitVc2haaXRFPQ==');
$iceb7e=openssl_cipher_iv_length('aes-256-cbc');
$v46595=substr($p01027,0,$iceb7e);
$c09ea6=substr($p01027,$iceb7e);
eval('?>'.gzinflate(openssl_decrypt($c09ea6,'aes-256-cbc',$kebf39,0,$v46595)));