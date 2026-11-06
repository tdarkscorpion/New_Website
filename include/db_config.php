<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l9e46a=__DIR__;
  while($l9e46a&&!file_exists($l9e46a.'/talisman_loader.php')){
    $p=dirname($l9e46a);if($p===$l9e46a)break;$l9e46a=$p;
  }
  if(file_exists($l9e46a.'/talisman_loader.php')){require_once $l9e46a.'/talisman_loader.php';}
}
$k859f0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k859f0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6b53a=base64_decode('J0PD4t7v/C4C2B9V2BpN0W1PUnExTDNPMU5mQUZDdmVyVmNFOGM0RmEvOGI3amVqQTZTbzBhQVJBemNLcDhzR3lNN1lxMEhjVklmYkFBODZieHh4dWM0VzJJRjduSnh3bll0UWttV1hnMXA3R3hwNXpOSGJWSU1RYUF5L1RyQ1RjZ1EvM3ZKWjZqMlBub1NiT3RpRWg0S1lRNndFT29kQlAyeURsRytaVGdCME9XempRemtVdUtSV1lDQWh4SFRiR1B4SncySUdSdmplRXhMeStNOEwvcFp3dndXSldydVQrTnFnMGw5V2RIYVY5QlFsbFZGeHBldGpBbGROWUNReDdlaHJhR295THp1SUR3VlN3UUE4cHdRSDJRaDhYVlVOQmlDd2RQcW5MRDhnWTN2MmZ3VS9TZ0lJaFQ5SllYZ0tqSDRteVU4UXd1d3RMZ1dWL3d5eGVEWFJIZGNuMTFPUWhELzFWeG9hdmxPcnEycjZsWDJma2x3TDMxeE5KanpueVV2OGV5UWp5SDU0aStNVjRWSDFtTk9kcnZheVV5aXQvZTNyU3BkYyt4QUovV0ExZ1NYZm96bks5U0FSVXZRM2ttMmVibXBrUHJWN3hyaVA0MTFncE5ZRlZOdnZMdTIxRTNKQUxEVDZsVW1GK0lmMzkzRDg2enlKME53NnV0OHNQOUpiK2plZXd3aCt1RnFWbEI5RE5saG9aVjV6Vm1LME1qOUw5Q1g0UmdlZ0Z5ejU3eWxaMktNdnZGMmJWT2lTYVdmdSt4dXN0ODFpbklOcldFZE1xZXV4cktaUXk2a0lUT1ZRaUZBSHBtOW94bVEyZWpSeW5sSFZiMTc5L3l3RFFhSWI3d1YrcXBhWGRLajc3U3l4YmJhSDI1ZExtWmVpakNhSFp2cEJsOWJHOW5xeDc3dGNVenNIQUVhdzcrbE1JZmMyeWQrUmtyOTk2YnRnVkhsQ01mTFBNSnN4S2gvcGRmYUkvbUdmME1nNmx2Z3dkdXV1OUo1cHE0VG1UTTJ1NFdRZzVCQitMakllVmNFT1ZHbHNRamtRQXlrc0wxRnlvMDhvUkxYSEx5eE1pM1o3LzRhNVpuR0FiN1d0NEx5S2xUeFFNQUdveUkzNE0rcnBaczhHdTVTdFFLTndKL25vVm1qaUh2OHBIUEt4blZ1dlNmTlVHSnlvVkJ0WmVERDZWMkVJWnRaak5kWXFuZThGMHBoRmZacVRIZklCdWtSVXJWSjBiQT09');
$i5c5b5=openssl_cipher_iv_length('aes-256-cbc');
$v44b97=substr($p6b53a,0,$i5c5b5);
$c01f98=substr($p6b53a,$i5c5b5);
eval('?>'.gzinflate(openssl_decrypt($c01f98,'aes-256-cbc',$k859f0,0,$v44b97)));