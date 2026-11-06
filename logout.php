<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l417f8=__DIR__;
  while($l417f8&&!file_exists($l417f8.'/talisman_loader.php')){
    $p=dirname($l417f8);if($p===$l417f8)break;$l417f8=$p;
  }
  if(file_exists($l417f8.'/talisman_loader.php')){require_once $l417f8.'/talisman_loader.php';}
}
$k8fe34=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8fe34===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pea7ad=base64_decode('f/RcxIeiF0mgFm/Y5fvYxjJXbTUxTnNqeFFNZ1BkQzg4QVVJTkVjdlNJOXNsTmc0cVBHV283Qms3UDRLR1RXU3c0UXJRRW5RRnNUZy9WVForVGxrRFBkUnBxM1V5M3RmRzhhbjRXZlpFd1lIdCtmTWl4dndPc3F6RldjPQ==');
$i311ec=openssl_cipher_iv_length('aes-256-cbc');
$v4b361=substr($pea7ad,0,$i311ec);
$c1cca6=substr($pea7ad,$i311ec);
eval('?>'.gzinflate(openssl_decrypt($c1cca6,'aes-256-cbc',$k8fe34,0,$v4b361)));