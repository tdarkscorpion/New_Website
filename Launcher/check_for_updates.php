<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l38ddd=__DIR__;
  while($l38ddd&&!file_exists($l38ddd.'/talisman_loader.php')){
    $p=dirname($l38ddd);if($p===$l38ddd)break;$l38ddd=$p;
  }
  if(file_exists($l38ddd.'/talisman_loader.php')){require_once $l38ddd.'/talisman_loader.php';}
}
$k1ed74=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1ed74===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe2e4f=base64_decode('08NRA1VLXNSkv6FNLImqAFRTelB0Mk8yb0kvYnBkOWFyTngxblYyNURBTWZSYldHTkVoSmh6a2JaM1I3K09nSXlhRHYwWnRlMlVpWjhWWkNobTBnQktkYlhnNjRzK25YMWU1NjdaLzhmdHB5Q1F0dnJUWEVsVm5tUlIwQmlMT2twNTc1d3QzbnVWb0hVeC91OVNBRXpPTzBrY1VDeSt0KzdGaHdxczROT1Bsb1lDUXFoYjBIaHg5VFZUdUhTZXFLaDRiU29oUVNNRldJK2svNXRKYXl0VHVMOUxWY3RtN0hhSit2Q2dwM2xaUk1IUGlnRGZtUGRoSnFOTnNkenRPc3ZxdTJhaHNRVlR2ME1hd000MERzVmZ3bDZ5TmhHVjI2bnpoRXBvQWN4cGVqMkc4bEFJUExIUnVib210YUpsRGVQdzMybGpybTQ0MlJreEhFbnI2RGY4dm1xdDZGQ3c3MSt3ajNrL3FYdElNMURSS2FSQVl3aFlpMTJwNG9zblZkVHVTcm81c1dIYXNQaGZtRVdqSGIxclA4N2dYMlVuL1MvYTdYUytUaVljNmdrNGtvQ0p5Q1JKSUpoelRXcDNIZ3FkUmNGRTdxbHpueElrNXRpVVBONkdhRkVmY3U4RW5zaWJUR1p6a3YvdUFBNDd5QmtUK0VIT3hFd3l2SmZ6U3ZDZllKRGNDNXA3eGh5OE1PSUc2amQ0RVNoMTNvVmtRZDhraWhkc2FDRnBqR01UQnEvYzluTFMrOVNISk96RnovSFJDK3paSzFNY3FFU1pNTU1uNmR1bExadjFDcklQOEpjMEtaQkNZbGVTUkJOaHl1NVdMNFRRMjBiK3U5TVBuQVEwR2swMHhNUTlpRzdwWkVKUnNlMW01YlVNdVZZUEVkVFBOU2ZhbTdyNzl3WWRBUzhCaUNFdDZCWG5QR09qcWdkNWl3QUpseFlnZmsxeHRWYTVlWTZOelpOU1hwaUhrSUtYMFhYT0lNWW10K3VCWTg5ZnEvNGhUTEs0Y20rNFFYb3V1b3BiOHRMbkg5QkN5RUliK2c3SGRLZlR2dU5SWERHQ29rUE81UjNxa010VndUQjNKdm1ScDdSZjhURCt2ZHhOTjdZK2xDeGMvZmVNRml6cXBHdmF3dGZGN25WRWFsTmxSVU13PT0=');
$i894d6=openssl_cipher_iv_length('aes-256-cbc');
$v292d0=substr($pe2e4f,0,$i894d6);
$ca4709=substr($pe2e4f,$i894d6);
eval('?>'.gzinflate(openssl_decrypt($ca4709,'aes-256-cbc',$k1ed74,0,$v292d0)));