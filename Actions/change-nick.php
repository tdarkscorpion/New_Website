<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lad888=__DIR__;
  while($lad888&&!file_exists($lad888.'/talisman_loader.php')){
    $p=dirname($lad888);if($p===$lad888)break;$lad888=$p;
  }
  if(file_exists($lad888.'/talisman_loader.php')){require_once $lad888.'/talisman_loader.php';}
}
$k2e84f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2e84f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcad15=base64_decode('oeDc0wI1NvfpSyQCpAFD6UMwSE1zazdNTWVJczNxQW4zRDVhWEpteXlWeXF3d0FDc0hkeEVCSkVTQ3lybTUwekIwWlVSMTFrTTd5N0gvcW1PUkJ4K2xMNldJcFVESW5XQTc3eHRtcGRpamFtTnNsNU0vM2Rmc3ArOFlvQk5ad3N0Q1hoL0lLckIrY3JDSytGZDdkdllQQkd4VjJSNzY1RXJjcURya3BwS1ZDcnY2b2hoRmxCNkhTdnF1Q21sMGxQM0diSTlKblNXblNGMUZmcGNNTnpPaW1uN3FoaWsySEk0blNibnVqV3RCZlZXRlV4WGZjcDlseGZySjJ6REZqdVZ5VC9Ndkt5bHcvazdaeWtydkliU1NYMGkrZHJJVzh0VTIzb2s4aDNENlRCQUM4TTZEYmJ1YXNLdFJZcjZiU1Z6T2RHNjZxLzZZRzlXejJheXBUUVZUTDFKSXExZ2JkV1QxZExmUnNXMDhuYVVmbjF5Qms2WGdOMG1XUFhiSnNKZTkxYUdSRTVrazFYVVFtNmRuZWRBNGNmcEpxMFdwV1BPV1h1UVM0RGRHa3VHaHVMWTd2VGhQM0JETjFDLzNFQ2FNb2M4ckVPQ0J5aFFYcmhVQkxwQkFpQ0RWMmtPSlNNWk1Rd1UwMXI1SmhjejEreVpwN2VqbUp4Tms3UDdPMlJSa0NrY0lrS1pJWG13VkFkdGFIbHZzNi9ocGxlRjZSMURJUDgrTU1SY3dqWkxGMTZLdS92bE9mVUVUQ1Vyb2huQ1owMGc4ekl3bG8xYW03UnBpajRtWDBHOXpWNmJhRGM5bjFzZUFMZTk4RzJRbTFhV2lmZ2NOQXFPR0FEOWpneGh1V2tFekxucVBsVmtodlpVbjM3SjNBUjI3aklxODFKeElYZUtJZlVtcWN2SVkxV2lXYXZoSW92eEZMWDNvOFBrUUpjZEY2dmFCZldYVDVhL1pzekZ5NklXMDk2NDBGaWpLMVBNWWJEbGFYUTlNa2NkU1FXL01BUWZlcz0=');
$icb266=openssl_cipher_iv_length('aes-256-cbc');
$vb32d5=substr($pcad15,0,$icb266);
$c94f61=substr($pcad15,$icb266);
eval('?>'.gzinflate(openssl_decrypt($c94f61,'aes-256-cbc',$k2e84f,0,$vb32d5)));