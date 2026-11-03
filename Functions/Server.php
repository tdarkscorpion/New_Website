<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1cdb5=__DIR__;
  while($l1cdb5&&!file_exists($l1cdb5.'/talisman_loader.php')){
    $p=dirname($l1cdb5);if($p===$l1cdb5)break;$l1cdb5=$p;
  }
  if(file_exists($l1cdb5.'/talisman_loader.php')){require_once $l1cdb5.'/talisman_loader.php';}
}
$kcba12=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcba12===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0ad37=base64_decode('2c2x6kvcKOr5TjPr+lwHRWExUFZQUjAvVHM2RHlYSDV6c0RqZXF2NlJvYkVBdGxNRXFyQTdzQjlrNlhTVlJFUVRyNXNKN1kwdXIyTXNtUUhSYzluSTQ3dnFuV0V0dm5KbXhCSUJFM1NucUlORG1kWkJTWkhMbWhnSzhLZTRsNjBCd1c2d29oeFNFaWRrMXo5YjVZZHlNYjFSOU9nS1VrUkROR3k4ZWFjcTBkMHBDTDZpQmRLcjR3cW9XaVp3R1pJSWg3QzgxWndpQzFiZTA1UGVjUmFhWEV3ZzdJSnM3b29SWS9WSG1oekYvZk1Kcm5wQzZhemJvN2tWYU5iOTRPejVnS3lKRGwvbzZJOHk4SW9yT1dYZWVINm14ckNNaFpQVm5ONXczdXRlMDdPME52d3BYSEZ3bnVQWDJZPQ==');
$i17cf8=openssl_cipher_iv_length('aes-256-cbc');
$v1aafb=substr($p0ad37,0,$i17cf8);
$c7b2be=substr($p0ad37,$i17cf8);
eval('?>'.gzinflate(openssl_decrypt($c7b2be,'aes-256-cbc',$kcba12,0,$v1aafb)));