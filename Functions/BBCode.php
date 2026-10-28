<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l45626=__DIR__;
  while($l45626&&!file_exists($l45626.'/talisman_loader.php')){
    $p=dirname($l45626);if($p===$l45626)break;$l45626=$p;
  }
  if(file_exists($l45626.'/talisman_loader.php')){require_once $l45626.'/talisman_loader.php';}
}
$k438ec=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k438ec===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe144a=base64_decode('wlaUTb24b/9X2vNF7dschmRjOUw3bVNMRVVhOGcwQXdoaytIQ2gzOERNTmh4R0E0bjhUZUNzZk5aZmhZOUZOZ3dRU0t2Q20rK0dkbGVOUEk2dVl4aEtwMStJWDZ0Z0xqSzJQcmRwRERnTGdOczlnWEQ2b3JIY0wybmduN081R0ovSHYrdW9WaUxqcVl5WXZJQTNnSTFZL0VjNjdwVkNOUXMxZFRxUnRwdTc5VEM5L21UdkJsSmh4NHJPa1hsaHlsY3JoUzIxR3l6UjMrbU96SlFUTVNQWmlFV0twT0ptVk0xTU9maDYybzdZTiswcXpnQi9vMzV3d0RuOTJPNEt2RTA0UGRVQ0c3MGpsMUJyOEZydzV4eUlvYjl0cndYbHhvR0lwODRoM2RQbFJyaEtoTjE3NmFacG5ydHVndXYxdXMyZkJjYzdIOXNmdjVXTmFB');
$i25543=openssl_cipher_iv_length('aes-256-cbc');
$v0beca=substr($pe144a,0,$i25543);
$ca4166=substr($pe144a,$i25543);
eval('?>'.gzinflate(openssl_decrypt($ca4166,'aes-256-cbc',$k438ec,0,$v0beca)));