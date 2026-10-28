<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $leb1b5=__DIR__;
  while($leb1b5&&!file_exists($leb1b5.'/talisman_loader.php')){
    $p=dirname($leb1b5);if($p===$leb1b5)break;$leb1b5=$p;
  }
  if(file_exists($leb1b5.'/talisman_loader.php')){require_once $leb1b5.'/talisman_loader.php';}
}
$kc517f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc517f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9eec5=base64_decode('rhHnA+q9u96odGEKowvg9kFTNjQxeVBPTnNBTEdZY212cU5uNUxveDdKL08yYm1GYUkwQTlwY3h0b1ZlRGpYWnBySTZsQ0xSaFpUMW05OWV0bUYvQXR0QVU1aHJxNVVabGJKa1JuM0d4QkhPeFBrK3Z1MGpnUVFwN3ZHdjZ3ZkR6WEJtZzAxQ2xHVXBlTXJ3Z0tPY3B4c0pRZEtZNkFZUWNNbVNpM3kvQWtoK3NLRlFoNFJFTWp2M1VQdDBEY29YZ3p2ekxuVkIwbjVzMXFBd2NESzM2Qk00YUNYTlA5SEkzdEpQS2sxaHFUY3pzRlE5bkFLbk1VcS9sZTc0WGRYSlNFc2QwSUdvMTh3OC9TYjdJeDJHRVJTSGpHSncwQ0VmT3phWVZZN0RsK0xUVkJ6Y0VzS2hFaEl6QTJVPQ==');
$i89bea=openssl_cipher_iv_length('aes-256-cbc');
$v92b5b=substr($p9eec5,0,$i89bea);
$c96ba6=substr($p9eec5,$i89bea);
eval('?>'.gzinflate(openssl_decrypt($c96ba6,'aes-256-cbc',$kc517f,0,$v92b5b)));