<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld139e=__DIR__;
  while($ld139e&&!file_exists($ld139e.'/talisman_loader.php')){
    $p=dirname($ld139e);if($p===$ld139e)break;$ld139e=$p;
  }
  if(file_exists($ld139e.'/talisman_loader.php')){require_once $ld139e.'/talisman_loader.php';}
}
$k32ac9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k32ac9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p573c4=base64_decode('Xth0oyj3haaWS1m/QV4yGzlzTU8zeUpnNkFZMEREaTRXTFQ2czZjRnVudm1HQmVZUXo0TjZTclRtTXVOdHVYSW9ySzFoaTBqY1ZXeW1TSGZFRTRsaS9NaGhNVjZzTEplZEFpbEJIeGcrY2NaQjUzdlQ1RzYxNmVzU0VEK1dIY2Z6bFNhRExQTExYNXM5cnNMVWJJNElUUFZkL1owS2JnbHpQTFlpYVo3L3lHbWNMK0pGOWdHRnBhTDkwbkt5VkU3ejZnWEE4VGVRNElRWG9LUm1PcERrUFB4d0g1c05zamFaY25UWThOSE9QTk1jUDhoaytVNllkdVJxLzI4a21KTGYxNWhMK2pPeHpVS3FXZTg0QURyYzJRVURvdU9YdWJnajlDVjB3cnVuZmJTMlpGOUVydUpDSG9aMWxmZFU3Z1J6TzFYR0V6TmFHK25zVk9XZjdjc1ZZMXp6eHdqUXcrYnlvaW5wZVVNR1dMbmpLWkxXdkN0cTV0alluTVFWNnVuTHg4aHdQOG1RWFdzblVjcm16cnc3U2VrRzVJSU5SUnc5ZkVxMk9QU3NXdERYMHdUK0RjSXgvaUlsSngrenlNbWJublJudjkrSzk0U1ZBdTJQa2hQOE1jbmUwQjhpS0xTWnJtMjRwSjZwTlBZRytBajZUQXpVcEs1clU3L0pLV0NJM0NxSGk1Wk80RUZFSndi');
$i63b55=openssl_cipher_iv_length('aes-256-cbc');
$v1a524=substr($p573c4,0,$i63b55);
$cda7fe=substr($p573c4,$i63b55);
eval('?>'.gzinflate(openssl_decrypt($cda7fe,'aes-256-cbc',$k32ac9,0,$v1a524)));