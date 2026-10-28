<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l96303=__DIR__;
  while($l96303&&!file_exists($l96303.'/talisman_loader.php')){
    $p=dirname($l96303);if($p===$l96303)break;$l96303=$p;
  }
  if(file_exists($l96303.'/talisman_loader.php')){require_once $l96303.'/talisman_loader.php';}
}
$k93bfc=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k93bfc===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p73892=base64_decode('+HqR2gbAJ1EW3q1B7IKMUWtWNUQwSkhSMWxWdzdFSDFaQld3ZEhqTlRzL0MyU0RQd0p4MnUydXl6N2s2ak4zVU9uL1hVeC93dXA0ZGNVNjI0WFZQd2U4cmFndDU0K1AwODkxSExHa3VTeGtESVgwUFJlbW4rOUQyd0RZPQ==');
$i9e1fd=openssl_cipher_iv_length('aes-256-cbc');
$v7271e=substr($p73892,0,$i9e1fd);
$c34811=substr($p73892,$i9e1fd);
eval('?>'.gzinflate(openssl_decrypt($c34811,'aes-256-cbc',$k93bfc,0,$v7271e)));