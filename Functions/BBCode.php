<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5f0de=__DIR__;
  while($l5f0de&&!file_exists($l5f0de.'/talisman_loader.php')){
    $p=dirname($l5f0de);if($p===$l5f0de)break;$l5f0de=$p;
  }
  if(file_exists($l5f0de.'/talisman_loader.php')){require_once $l5f0de.'/talisman_loader.php';}
}
$k482c0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k482c0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6c444=base64_decode('y6WfFmhakFo8TJa0oNK6TGQrVWlBVlBoKytKOUJmZExmT1BUQ1gyckdnOXhPY0JZWERkZjN5S1huaGo4bC9GV1JqSmdqUnoraCtWWHVIeEhkdURZcll5TVNDR1dZa0FRRHRPNHM3U2diYUpHYXVRZ2lWWlR6OVQybExOSDVVVzVVQ0RMeVZTT01xTEx0SzJDbmlzRnZHVkxvcGtjczFRcFd6WEFuL1g2UnpaOWtxNDk4SlI1eTJLaE01TWlJU1FRcE5ScnRoQmtQdks2UFA0UWkyNDFCMXZZT2E5eG1BTktPbmpNZGxzMUhvMkJwejBnbFdNMzI4WVljRjJnaXQ3T1E2VlIybk1HWkRKek80K3h5eTVabzA4SWZLVU9VUUdYNmNSSS9XTzBtdHk2dXBIdWRpSFBjdHprVFpJNDl6RzJIdUhQNS9pSXhheXU5SlhG');
$i0542e=openssl_cipher_iv_length('aes-256-cbc');
$v6345a=substr($p6c444,0,$i0542e);
$c4ee31=substr($p6c444,$i0542e);
eval('?>'.gzinflate(openssl_decrypt($c4ee31,'aes-256-cbc',$k482c0,0,$v6345a)));