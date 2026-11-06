<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l59da8=__DIR__;
  while($l59da8&&!file_exists($l59da8.'/talisman_loader.php')){
    $p=dirname($l59da8);if($p===$l59da8)break;$l59da8=$p;
  }
  if(file_exists($l59da8.'/talisman_loader.php')){require_once $l59da8.'/talisman_loader.php';}
}
$k5c218=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5c218===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p2102f=base64_decode('f+oyLrKc74Qnavqcofq5AzRjY0JudzZJWTBMZGs3T1BTdFk2Q2RyNXJCNWtyc3NTRkUzU3ErQ3Fzd3BIS2pCZzlKOUpBWEYxMVdKdkhodGdrMGk3STk5aEt0eHBWY0JxUkxSM1k4S2Jpc01aUGtNKzI1b3dRdVFrWFFMbDh3UUFPOFQ3RU9yekowbUF1Qk1mRXV4M2IxZXRPMEVQZ2pPRmRpQmtRazNYdTdGc3FuTDNoUGppa200ZjhwcHhRWlloSk4xWEpZOGRFZjUzV3BQVmE1RnBkRk45NllYN29BVzRDRi9WekdxUDhkclFmNUFJTFZuQXc3dUJIVDU1T0ZNbG5QNnBueXBEN05jdW5oU09CMVFTVkFIbVcwOXEydTdVSEFDZHdaaGNhaHpVOGw1ZmFsN2ZTWWc4Y2lsT1QvT3NHM0tCeFEwTnFzZTY3eXYwL0s5REJDUUdEZjJqTzRra3VUNFlVd0ZRYTg2R3ZueGM4S0F0d3VvcTlyM1h6TmhjWVlCK21nZnZ3c1pjVVp5Y2hsLzNvNHUyemx5UWNYM1RaeDFFZmxsemFORjJVcnVxMEJkNHZSSjMyY3NXMzRrK2l4TFd2andnK1R0MVkyb1VLSkV4dlR6SUI3NUdmUUZFdklFTHpTcGt1UDMwWFltZHhCT0sxcThLUm9ONDhmZkxqMEV3UnlyalZUSW5LRHVnc2ZobHpoV21iUFBhYW9GVFlqWTRPZVVKeXQvSXpKSWk3eEVHSUdLS0pXeUpjWFU1aGROc2tWdllpN3d2SHFsU2JjSk9VU3ZzMXJlajZPMFZTRVlKRENYeE4vQTcyNWtyOE81ajlPQitVWi9nZnRZaHJxMkFmYml5U2xNMFJoSk5ueHh0Z3prQlVQNDV5Ui9hK0RtZG9nPT0=');
$i069da=openssl_cipher_iv_length('aes-256-cbc');
$v187be=substr($p2102f,0,$i069da);
$c4a0d8=substr($p2102f,$i069da);
eval('?>'.gzinflate(openssl_decrypt($c4a0d8,'aes-256-cbc',$k5c218,0,$v187be)));