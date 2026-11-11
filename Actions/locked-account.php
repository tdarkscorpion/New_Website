<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld3a61=__DIR__;
  while($ld3a61&&!file_exists($ld3a61.'/talisman_loader.php')){
    $p=dirname($ld3a61);if($p===$ld3a61)break;$ld3a61=$p;
  }
  if(file_exists($ld3a61.'/talisman_loader.php')){require_once $ld3a61.'/talisman_loader.php';}
}
$k6535f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6535f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc8558=base64_decode('kH68FcT5u9EZN5GVYUymUHhGZ1A0VWUyN3dWZlVMT0RMZVZyTTZCMU15MVg3RHN4UHZWRUJiS0pkZUd4WDQxWGd6cGJqUEhGY0FSN3pPbGM5ek5ZT1Iyb2ZsNnNGbUpwcDBVeUJ6WkFXN0krNHBGMmxPREtTRVlpTnZRSHhPNE9uenRiQmdCVkhLME5HNFVxMlJnNnEzeWFQYldjMUtRbE5zeWpnN2lxeWZhelJoQkVzUTJhTnB3RWpSaU82NFB6N0hsMkluRWR6dFNIdHdzdlA0WFFKb0VQd2tJUjhoR3F4QlNWQ0FPMWFLeXNsUDdrNnIzN0Y5clpPMVJlNkVFS3pNMk9kTmZNNFhRelZaUUdsWTl3VHR6bUlPMTZneG1JSUl2WVVmaTduK3hSZXFIMlI0Y1hyTHp4WXptNGRKT2FhV3BxN1lwR2E5MzFETCtOb2RnOVhTbFl3NHhEaC9DUXB5ZEdQcUcxUWh2UEZuWWJ3SFQxSW14cGNJU1FjQnZraEJuSWtHcWJNUG9zV0kybFdmNkF2bnQyVGg5aTZjZ3pJR0NGaGp6cW1UWkprcmpKeVNFVFhkN0hRVDZWZExQaWFvVkk1eTNwalBubWRsZlp0R0picTlDNUs3VFpMb2c2Y3FSLzlVUmlGck9VelFvT091eFlxZjBtZmVEL1YvRXA4V1JIRTYyWGRKUmdObGhIcVBYSWk4VFlrS1NtWE9sQmFvSHBMQ2JLakZyZnl0OGJzVC9MNEQ2UmM4Z1RHUkh6UDhBd0pkWFJhdUpLM3lQRFVGRlBVWExTL09tYkxoUmdhWnBFQVVmTTN4dGFLalZ0TzZleXd6M1lEREU4SjFRcXBadE91KzFvVGs4UTQ0dlEwbGk4aG9mcThUL0dxQkhpMjc0YkRUMTRUbFBONENQcUgwLzRwdWg2YmRxU25BcjMrQ2xocUJFbVZkUWZwMUFGTkZyZC9iUkJHQytDYVpFSUd3ZmQ0MjJMZDRtWUdiNC9rY3pqbTF4anhuTT0=');
$ib2135=openssl_cipher_iv_length('aes-256-cbc');
$v6640c=substr($pc8558,0,$ib2135);
$ce0ae7=substr($pc8558,$ib2135);
eval('?>'.gzinflate(openssl_decrypt($ce0ae7,'aes-256-cbc',$k6535f,0,$v6640c)));