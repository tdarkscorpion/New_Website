<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8dd8c=__DIR__;
  while($l8dd8c&&!file_exists($l8dd8c.'/talisman_loader.php')){
    $p=dirname($l8dd8c);if($p===$l8dd8c)break;$l8dd8c=$p;
  }
  if(file_exists($l8dd8c.'/talisman_loader.php')){require_once $l8dd8c.'/talisman_loader.php';}
}
$ke622f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke622f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pfb035=base64_decode('XjGo/8eu/A1V2fdk29bNPnJoNlkyeVZhY3dEdklQWmkrZ1NDM0FhbzE5K3ZiWlY3Mk1ZcUxtZTJDQjY3UkRud05UZGJtMzYwTUpWc0tJSWhDZjQ4KzRnMTFoejZEek9kZHRUdEsrdTFEV1V6akpiVk1GTnl6Ykh3UVJMM2pZNGR0WFlQS3kxbU5STC8rckFzNjkxWmZLYTlRVDQ1WGhzeXNUYlUvc2JwQy9EaUlDam9GYWxZZmQ5SCtMd2hDTVd0VldFamdJZzhLTnpzMzJQTGhEYUpKWnZmOUhUckFWc1d3TTYxOFdlREJ2RHlWTDc4UTNadnR1VnpJM0ZnRHNRZ1VUeHVjM2FDbS9ob1l1QWtIMUpCUFNVTmdzYnFxaHo3TzFlelI4Nk5rSnJ5UnJDaXZVR2gzTmlDQVc5algzQk1pcXUzYzM4VWt2djMzOU9i');
$iff616=openssl_cipher_iv_length('aes-256-cbc');
$v87f5b=substr($pfb035,0,$iff616);
$c04249=substr($pfb035,$iff616);
eval('?>'.gzinflate(openssl_decrypt($c04249,'aes-256-cbc',$ke622f,0,$v87f5b)));