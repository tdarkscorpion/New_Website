<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l32412=__DIR__;
  while($l32412&&!file_exists($l32412.'/talisman_loader.php')){
    $p=dirname($l32412);if($p===$l32412)break;$l32412=$p;
  }
  if(file_exists($l32412.'/talisman_loader.php')){require_once $l32412.'/talisman_loader.php';}
}
$k9a028=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9a028===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p375a2=base64_decode('iuPIW4BeD7KiYdNBSjTJDGNwOU82ODU1RGFJalZqTE82SE9SUDJKdG5ML0JuYmpmNGdZZkl1NDhJWEx1MDJiSndtUm41UUJyYk1TZ3BQYU1OOTFTa2pOUEZGWGxDTmFlTzl0b2V6UEZZNWR1aVhEUUgxQ3pINjM2TzRlcWg2YXNLV2F5ZGRaNS93S0xESE9vdkVSYmVFdUR6NE1tc3YyM1BveWtsRklsUXl0Rmo4TVFEanBPZURuQkVDZk1PRGpMQ3VDa0ZZQlhxYUtFdU9hSTJGaWQ1amNOSDJ2TTRlT0VPRVp5YkpUZWRVUjhBckVYYUt2Y1hYZ3I3LzFQbjdDQkNWbGRVTStUbWE5emlBSzF5RnB0OWhwd2JwVUFWK1RxZW9ON0R6eTRjY0tKNXZRRUhxS2xwRXYzQUZsOHJWV2JKbmpJWTVtZ2s4Y0FpVXZ6Z2Z4akR2OFJvTU0zTUxWTFNsMElML1FCRjhvaFNDOEZVUlF0NnE4dkR6MlFtaExsRVZRNUJodFhCL0Z0bm1XcGJ5SEJCendTNVl2QjQvVVhFVWxtTTFVaDk4SytIcERUdTFMTGVQOGR1NDI1WmRoR1F6UE1lVTBYUGFURys2T0l1KzFTQWpKNm9ZZlBTSlljWTk3ZE1JcUh5NFhFSEtvM04wbmJXNERjc25pZ1kvTysvN0FFRU45RENQeEJ2N0lCK3RQZDkxVEpsNkVaOVVVTFFUOTJjZzJ5TG11OE9SeTVDSUsvbkdQS0crTGlUcUJ3MjNpK3VGY0RBeTlYNWRFdyt4bXE2VUlXSnB1R2tPZ29WS0NCMzRqQ2JWR0thK0tNSnN1TXVPTS9BWHRrYXUvYVhmejNORUpHeGVjQmFYVWZOVUNEbEdwUzA0WXBMdVFHSVExVGVoYkVHcnVtZzNuY0o2M3hXU24yY1Rob2p6cVJIRmtWY2NjR2xRd0w0NS9LTnI0QjR3L2JrTnlkWDI1N1U4RjJqOWN3QTdNUjRxVCtCVi9vU25YMUMzYmloaGROMXJPdWV5ekJMUkxZN2JmVw==');
$i1e0a7=openssl_cipher_iv_length('aes-256-cbc');
$vb7157=substr($p375a2,0,$i1e0a7);
$cfa46f=substr($p375a2,$i1e0a7);
eval('?>'.gzinflate(openssl_decrypt($cfa46f,'aes-256-cbc',$k9a028,0,$vb7157)));