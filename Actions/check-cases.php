<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l992a0=__DIR__;
  while($l992a0&&!file_exists($l992a0.'/talisman_loader.php')){
    $p=dirname($l992a0);if($p===$l992a0)break;$l992a0=$p;
  }
  if(file_exists($l992a0.'/talisman_loader.php')){require_once $l992a0.'/talisman_loader.php';}
}
$k21f1b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k21f1b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1eb1b=base64_decode('x41AB8QcXHgwP1p+QG8idlpTUUdJblk4Mk0waVlCSTFMR0J1QUtPa1k0SE1JZEt0aVZIaXI0a3NxUlkvdGRTR25sRDl1bWcxaURROUhGa016V1I0bHBiSDJ2OWFsK01WTkdUdnR3TTMySTlYUlVVNnloRTlxSCtKZG1TRUc1RTJnODlxTkJhVzJ5N0pndHdRMjFNNEF3Z28ybjdIYnNDRVloSHJ2cVl4aEVDV0RxTXMwRDVhOStKYmtzQWF0b3NoRmtMVkhWOTNuWUtJQVZIQ3JmcHdJNlNjMFB0RER6ZWJ6TUhyMmRHZzNTSVJXZmxPUnprdFZNRnRkSHJPbVZzMDZjTnU3SlVvTkhkQTQ5MWJxblNsTCtFZGpIZ1BKeGM3aCtmeFNGalVESU0zclJ0NlN5V2VnL21xekVVZnpyNTVsWlBybVlzOUEwOGptQXdHMzVpVVBSS29FQVdmdlJHTTNQMmlwQlFWTkNkSTN1dDRrRnc3WitzTys2SnhkZHNXeElFcm9tVDVHUFpTSTJMeXNHbHRmR25jTkJKcDNoRDFMRk1SdVU5SS9LVmk0c0s5dW5ueThNaGROTjNjUnV6NTYwM2lmUVBaYm5KOVZyNWdaR2FES21HQzh4dVZnekRmZWFVdWVyNnU4OWd4bTBKYTc2Q2J1aDlBaWswUDV1WHliL2pXdU1yYmc0VlRJdlIrVUtmaG5UOTVQNzR6T05HemdOUXhCSUhWMG9YTHhJUFhZdFZMb0t4QnNLa3BkeE14VVhkSWd0SWk4UUhsMVliREpQRFdVZGFVMkphSWkyUnp0Y3oxVGlPUFVPbkxqMTBaYVhWb0JFaWY1QkI5TGhKMExoaVZQQ25vSFF2ZHlTMUM=');
$i16796=openssl_cipher_iv_length('aes-256-cbc');
$v550f1=substr($p1eb1b,0,$i16796);
$cb7244=substr($p1eb1b,$i16796);
eval('?>'.gzinflate(openssl_decrypt($cb7244,'aes-256-cbc',$k21f1b,0,$v550f1)));