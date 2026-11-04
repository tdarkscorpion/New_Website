<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l83caf=__DIR__;
  while($l83caf&&!file_exists($l83caf.'/talisman_loader.php')){
    $p=dirname($l83caf);if($p===$l83caf)break;$l83caf=$p;
  }
  if(file_exists($l83caf.'/talisman_loader.php')){require_once $l83caf.'/talisman_loader.php';}
}
$kc7804=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc7804===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p05539=base64_decode('VhBCPaiwuJ22i6/0DPOz1DNkTFdhYWJiTHM3ZGxJQUZRTXhPNnN5eG1jUVFkSFU0RjhuUUV1ZXFHenViVkdaeWZ5dU1YN0ZJSTlBSjcrNW5weUVaMnlRcWpVaDlLMTZxU0F2MVI3VWFDM0k4TVVpY1gwZ3JaWkdlQVRybXdHVWNRNmxRaVYzVVhmN1pwWXRWMXJabi9MSWI0THpBWGVodFRFMmxQU2RrbzhiRzdkRGNVaXdYd3VwTlg0RmQ1cFgwRms3dDZrVWFsV1l5eE1WQ2U1WFFKMFFVYzJvS1RXRkh4eDA1RnpUTVBJbTdNSHRoellFS0VkNzUvRDFrL3VzSlFSWkY2VlVzYTlzMkF4T2ZpQ3Nwc0NnMlJsZGk4WURYeW1CYUlaMDExUy84TmJKb1B2VEx6M0RjUnFDOHFuOXZLS1FnK2l3Ykg4cGlkbkdXTVVBK2RURTFjcUtwaFllSllZYlR6ZnI5N0VhUGVPNmx3bVFObXh3UlpWcEVrT255cW83eS95MHV5WDQycVY5Y2NkLzNCYmVna0Zab1o2aWJhR0hiQWJGS3JmTkVKQVpETDRIVVhDOE1tdE5LSEFkY2ppSVBFMGUrcnpYTjhXbjZSMEFnaEhiNjdNcHJGOEl0WGp6ZC9IZTB0WExodHUvU0tLTGFRMHdkRW9KektNT3pWMEhjWmIwdFY4S1d0S2c5U3dWYjc2ZmVGTm5mYUYycjFGbnE1L05CNm8rVHJrdTZKc051UnBld016VmFSOTdKVjJrdjc2aFZ2SEpLdzBuVmZCbzJhOWl3RVlTditGYWFXT2pZY1ZFcTFodnMvcTU3L09VTFpVVDNFUTk0eG5FZjdwSDFEMXBqcmwyaVEyWituTnVqM09EVjlFRGN0dHIzdTFrS0VuOUZhRTU1ZXVlL3pIMGpWdWFQcVVMbmJYd2gyMFJla2g5NHY2cXRPOGdkSkMrcktBRU5hVk9uYTVnczVlZWFLMFIrbFI3TmF4Ky9lMjJ6cnpwUzRLdz0=');
$ice11d=openssl_cipher_iv_length('aes-256-cbc');
$v26f63=substr($p05539,0,$ice11d);
$c4a124=substr($p05539,$ice11d);
eval('?>'.gzinflate(openssl_decrypt($c4a124,'aes-256-cbc',$kc7804,0,$v26f63)));