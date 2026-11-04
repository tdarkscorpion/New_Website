<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l88400=__DIR__;
  while($l88400&&!file_exists($l88400.'/talisman_loader.php')){
    $p=dirname($l88400);if($p===$l88400)break;$l88400=$p;
  }
  if(file_exists($l88400.'/talisman_loader.php')){require_once $l88400.'/talisman_loader.php';}
}
$kbe84e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbe84e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p88c22=base64_decode('hQRXGLufcySIGNRub6OpTnRHWmd0WDN6ejFQaytPdzlKOUdueUx0djRTM2ZuNGwrZFg3VEduZUlHdEVrQS9NL3NmVFVnOFlXd3l2TkRnWkRIdTVnMGFhU3Mxb0dRTWROclVMVWhrKzNzcFBzL3JjY3V0bEtwMGcvNWtzdlVlNVQxK2tjSEVObldqNWZTbDY4N2IxRFlGUTVIdHpFVmxqdHR6Ni9vaWdiR0VQLzdyakpoR3RWQkpMRTBEMjkxRGFjZk5LQnAxVm90MHRraTQrTCtYVzBXZ1JsczBRSGtsc3NsaWJiczNqSFVxelk3UXJTY3UyOVFoUDN6S0VoVlNUa3QwRzJ6cVdudlZhMmJVV3RFdFFOR2Z2WTFMdkRrcjJqdlJ0bkNWLzJZeEZIdEg4MDJaVGZyUWxIRE1BPQ==');
$i9f589=openssl_cipher_iv_length('aes-256-cbc');
$vc7284=substr($p88c22,0,$i9f589);
$c5ac45=substr($p88c22,$i9f589);
eval('?>'.gzinflate(openssl_decrypt($c5ac45,'aes-256-cbc',$kbe84e,0,$vc7284)));