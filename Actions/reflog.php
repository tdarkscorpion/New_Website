<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l19d3b=__DIR__;
  while($l19d3b&&!file_exists($l19d3b.'/talisman_loader.php')){
    $p=dirname($l19d3b);if($p===$l19d3b)break;$l19d3b=$p;
  }
  if(file_exists($l19d3b.'/talisman_loader.php')){require_once $l19d3b.'/talisman_loader.php';}
}
$k184fd=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k184fd===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p50203=base64_decode('lDqvHNM4+N6hPqp2dhHmHWhmekNCZ29IbXJjNzlZMnc1V1VkaE51bnlQOUtnRUZtVmNTS0pRVy84RWZ1cGVOZU0zSW1kWGg4VHV4T1ZKdlZKbEo0K2tZZ09NeGNxQVJDZzBISjgvaFlEaXZPNlBMQ2FJTTlLRzEzZ2xQWCtwN0hCZXVSNDk4TllLbkVsMXF3QzMvMTJ4T2EwaTV0OElzZTRFT0lhak56cVdDZDJNSUZIcmt3Z1RvUUpZOHJTK3FUYTF6MUVyOXBBWTcrbFNNOURBQktOVk84WWxSY0VIZ2NpcFc5UGlQZGJlZkZ0VGlRS292QU55TWM2clJDaXdqZ3dhR1NHdTlUaDlFM1JiV0dOVGF0NVhmNkVTRE5uRDhqdzZRcWxlOFdveHkrcStKLzBpYVkvYkFaWkxPMURTQnJST0FBbXJuaWVrMElVZUptVWFidlpBdi9WWHNiQ2swVmthL0FVSjFOK1JNLzJWcVV2aDBoM2pwVU80VG02cVlFaDU5YnVZc1BmRVNOdm1qTERrSU44emE4TUEvMkVlWWwrZGRUWVZxZDBmUWVtVmdCMG43enQ4K0JiUEQ1Q3NDRHVTbWpKMDVDTFRxV3dacWFaWXNDVnNyUUduNFdtQUZxelNUNUVicjdpUmhTWElEZEF6WDdtT2xJcjN6d1BBbXhNMnJWZWlqbHExOTBBVUpaTkxLaW9DUVRvUVFJa01ycWtDVU9Fb2JqTU1VTGRTajNFYU9VV2J6c0M0UVFZQU5mL0R0NGlWSmw5RitweEVxN0NVRVd2M2pQUGt2NkIvRkp5MWhwRWFvRTF2cHhqelo2TktiaU9xMHBuVkVjenYwVm5wTTNHeXdsdjVYU2Y5Nmc=');
$i2fced=openssl_cipher_iv_length('aes-256-cbc');
$vca715=substr($p50203,0,$i2fced);
$cddb37=substr($p50203,$i2fced);
eval('?>'.gzinflate(openssl_decrypt($cddb37,'aes-256-cbc',$k184fd,0,$vca715)));