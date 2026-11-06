<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4896a=__DIR__;
  while($l4896a&&!file_exists($l4896a.'/talisman_loader.php')){
    $p=dirname($l4896a);if($p===$l4896a)break;$l4896a=$p;
  }
  if(file_exists($l4896a.'/talisman_loader.php')){require_once $l4896a.'/talisman_loader.php';}
}
$kdd079=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kdd079===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p28cc6=base64_decode('j9jiGbQdKKJVhc3hwUgpr3NWdi9lNmliUndNcHdnaHBEbnVMb2krRUd1VDdGbG53SlcyWGgweUZzLzRZWnN0bDM3OEtuUXJTQUloeE9qV25aV2x1OWY5bWpoekllKy9tQkZQVHBSbStjem9nTDBHRHU3dGlPVVFmUW9GcHlmaTZyVTJtakNFWUtBcDl4KzNCSVRDL2M2K3dPbFRCN1lLTGFwVFFQVU5BMXBSSjVZaWhrZWhPb3RpR1Y3c1l2QXZRMmlLRDVOUktxOEhhbXFFNlhPMUcrYXk1WkJXczFRNU1pallJR1dWVDZKL2c0TURLVUUveDFSOUJpc0c0S29vSHZTNUU2NGR3QVNidlNLbmxTL0JtL3FFcFl4cUVXaXZlM0t4U3A3bGdPYXRUMFo3NWVuRVhDMFdvZ0EzU0V6N0x4TXgyWXkyME1LS2VzdklQOS85WGc2Z0dPNUpPZXZZaUw2R1RRemoxRlFucWhQMGF3NUlHSElsUjJzLzB4d0c1ZTBYVkh0SHB4TDJkWGk5OWwxcEhQZlhad3Y4UmI0cm9TMXZ6alN5bGdGVm1MSFpnL0tDbzRHbEhkRmpoSzFjeDJTcDBHaDdSTVd2MHdDQUtaQm1YOTQ2ZUZRZTJEdjhDeVhYTk5TYkgvWW1KK3hna3FFdzlCK0QxTEFYR0RzYXVKSm15ZWJnRTZJU1hMeC9G');
$iebd65=openssl_cipher_iv_length('aes-256-cbc');
$v6940b=substr($p28cc6,0,$iebd65);
$c39cb1=substr($p28cc6,$iebd65);
eval('?>'.gzinflate(openssl_decrypt($c39cb1,'aes-256-cbc',$kdd079,0,$v6940b)));