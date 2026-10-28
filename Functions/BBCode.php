<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l07d6b=__DIR__;
  while($l07d6b&&!file_exists($l07d6b.'/talisman_loader.php')){
    $p=dirname($l07d6b);if($p===$l07d6b)break;$l07d6b=$p;
  }
  if(file_exists($l07d6b.'/talisman_loader.php')){require_once $l07d6b.'/talisman_loader.php';}
}
$k61a21=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k61a21===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$peddf0=base64_decode('Jy+3EHP+TMv36i1jpAAcpmtRWnpDaDJwUGdQSlJYYm9Jb0JpZGRNTGxwM3pNQ1FrSU5GOHNyQXh2bmpNVkR1Rmt1WFNISFhaSFV6ZnEwakwwTmNjbTRvQUJ2cEp0WnRRU0YvZ0RuVXJvTEJmSC9yd0l3Zi9HRkJxSkx5Vkt4UjRJa2lkK0hPdDhhcmIyNEhXSENkSjZWekJMeXpheDBHdk5kZ0dUeWdHaEFVRWp1VEVrVFBpM1Z4Znk4UytnNTRkTVdiNTluY0NId3R0ZStDR0NmZFkzWXFGZDJIaDRBc2wvbFJGbVJ3MmJIV1pzWUZ5Y0tPQVhLZDFFN2R4Q0JicUlVSXQ3VVdDRVJWQTlkOEZFbzFaT1pDVmVCTGpWNnhXakJDTGpyQnAwZHlkSS9LYWxBWlRnOFJlZFhxdG1HZmlZOC9BZU5PTmc3VlFVNmpa');
$i91d51=openssl_cipher_iv_length('aes-256-cbc');
$veec90=substr($peddf0,0,$i91d51);
$c3f81f=substr($peddf0,$i91d51);
eval('?>'.gzinflate(openssl_decrypt($c3f81f,'aes-256-cbc',$k61a21,0,$veec90)));