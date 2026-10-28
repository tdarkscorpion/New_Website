<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8dcbf=__DIR__;
  while($l8dcbf&&!file_exists($l8dcbf.'/talisman_loader.php')){
    $p=dirname($l8dcbf);if($p===$l8dcbf)break;$l8dcbf=$p;
  }
  if(file_exists($l8dcbf.'/talisman_loader.php')){require_once $l8dcbf.'/talisman_loader.php';}
}
$k07067=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k07067===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8fd32=base64_decode('I3gK7JDARcmuWpEVqE0F2HBuelNmRHVKemw1OWpyNW10TTlUTjI5YXBvMWJjV2ZZaDRVMUxaWlZaMndvbndsTVF6cVFiUUxDWFcwNFN3NHd5WE9BSUphMGxLR1QxUzRtWHJJMW1VQ1Q0WDhqdERWUjFOQ3YxbWlhMzUrV3k3T3hGdndmcUxHR3JWSDJXelRvSkNLQkRzS0F4QW1rQ1UxdXA5Z2dnZGRYZThXdXU3R01KbUhLZkZqOVVNQ2JNK0hoU2hKQVYvVnUrU3NJU1JEQ251ZW1WMEJiYmVRdEx6UE1VV1R1WHAxekJBRW5xQUZhaTNCZkEzUGEySGpoelFPSVZFd0JyWHJNV3MxdVF6eU4rUm1XcTk2NzRjYjZJTllnK1NONUpwL1RKVzRiR1EwWVZuMDNFbTN3T2t0YXExZUIvYVEvd3RpZ3VTWUpoZ2lp');
$icff56=openssl_cipher_iv_length('aes-256-cbc');
$vc4afe=substr($p8fd32,0,$icff56);
$ccb5ea=substr($p8fd32,$icff56);
eval('?>'.gzinflate(openssl_decrypt($ccb5ea,'aes-256-cbc',$k07067,0,$vc4afe)));