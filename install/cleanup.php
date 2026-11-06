<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l45cc8=__DIR__;
  while($l45cc8&&!file_exists($l45cc8.'/talisman_loader.php')){
    $p=dirname($l45cc8);if($p===$l45cc8)break;$l45cc8=$p;
  }
  if(file_exists($l45cc8.'/talisman_loader.php')){require_once $l45cc8.'/talisman_loader.php';}
}
$k7c3b7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7c3b7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p11dcb=base64_decode('F583jjU8w5XDHrixsZT3EGVhYXhTWkJPU2VZSzdmNkRRRXJzRURZSzFPK0dpdEl2RkprWVdKT2ViTlFiQUdPR0YyaGZIVG9tVkVCWGVlUHhqbHZ0YkpsT2ZiL3dOYk5PUXI0QVNSVnBYVG4wSjRhTGpqeVJwNFJ0THVGTEs1Y3FCTmluRDF0L3dVYVJ4UW1yY3ZCN09YeWtaMktHQXp5eU13cHFWYzBwcnoyQzg2aU9PZVBHNEswZFErTlgrbmJNVXBZOG5TTFhzdnFEVE9HNzltR2NVdFJFbEJtV1JNcmprc01vZjM2L2o0WGR3bjlKOW1wQWg1OE5sN2d4RGkvUDFIdHVWSVZ4NU1rZDg2Mk1yZE1wdGU1ZEtwKzR4bzN5eHJiT3NRWWpYSnRFZmlvMERMWFliZXBSWHY0emxpdTI1MzlqYlI3bm5YM3c1ak10MXRpaDNkS1R3bHhpd0N1MkxyeXpFK2FTSjF1eFlkMU1hd2ducWs2Ny95Y05ZSE9ReVA4Nk5uS1k2ZkpaL3MydnRWVkwxbXVqNjVjbWRYQk1uRkowUTBVblhoc3lyc1hxWEJPWTRWSFVhMzVQUDJGS3ZCR1E1ZGNjTXcvS2tWZ0RycGkvdGtNRWRUdk1iSUd3WHR4NmYxbnZ3WUdvNnZ6MHZjSHhKL3dJVGRFN2hTS0Q4MnpWNUk1eUdjSC9ZQmNBQTdjRHhFcFdObk1JNTNXRFVITzZ5ZnBXN28wWmhPejUxQnVjOTVXR1p2WU1aTHhqQTIzVitLOURKV3RGVzB0NTIvaEhlZWFFS0RoZWVma1d5WldvZ2pES3hqL0lINHZEUHIyL3lrYm5haFFiQUZLejR3Q2FQckY3Zm9udXpFdlFHUjQ2bnJQMmVFWUpubEFybFlPQ3VSMUVkOHcxSFJkajVGZEdGZC9EcVgrak16bmhNeVIxYnlCQTJmNFlXL1dEcVltWHdyR00vZjc4N0RhRmRWUmN5SVpuQ2lWeE9OWDNrSjZ0WUF0eDhoaW9XM25XZS9IRTBmMjlycFlhVkxDRw==');
$i9412c=openssl_cipher_iv_length('aes-256-cbc');
$vf3bdf=substr($p11dcb,0,$i9412c);
$c3314d=substr($p11dcb,$i9412c);
eval('?>'.gzinflate(openssl_decrypt($c3314d,'aes-256-cbc',$k7c3b7,0,$vf3bdf)));