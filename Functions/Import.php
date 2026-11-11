<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2d452=__DIR__;
  while($l2d452&&!file_exists($l2d452.'/talisman_loader.php')){
    $p=dirname($l2d452);if($p===$l2d452)break;$l2d452=$p;
  }
  if(file_exists($l2d452.'/talisman_loader.php')){require_once $l2d452.'/talisman_loader.php';}
}
$k507ec=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k507ec===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc3c36=base64_decode('gUx65q/9QYRHljC44yt27UNaQ2FSZHVLcVdhTVJDWCtveU5TTWpyRmZxa2liM05oL2dhWG5mb09OazVpR2xmWEY4N0UvRWpsTCtLVlljNmMyS0tRVjdaWndhUHJhMUdWMEZuYldlT2VpeXZVbW92ZXIybmlCbjI5WXdhQnJMS1NmOFMrSWdRTzkwR0dzT2FkaklteEN5MWJXNGgyd05FdUUzazA3L1kvUTlxWkNoeHppbWp0V2NHN09kWkhKWXpGcEZnU2ZMOVUvODJMNmNyNzRuZTBVS0ROSlRkMXVZVXJCbk9GNEQ1WEtDUjIvRXl5Y3Vnc3lKQUhmOU1SVU9LdjRrQnpIdk4zdDMxem0yYVJhcngzRm1saWtFMnQyYVpxRTZtUm9hZW1VbCt4VWtyTC92T1dTRnhCeHgybkI1by9FdzQ0cTRkTFl6aUhJM0lKYW15Y0p6c3ByVmp1UXBhck5Xc1Y0NnQxcVd5MXFsRTZublFlRXYyYTAvTVRIUUdoYU82ZjlibjhNZHViOWVtb08wRXRkZW41RGd3ZnR6Z0p1TEhFT3BzZndUQzkwcm96SUlmNjBtbmRzV2JvU1dUSkVxYTExS2xlMlQzNWFUUmFwSjA4bVlwTzhIYklHcW9rTzFrampGSjJUVUQ2Q0JZTHZJd1hLSXlMemZBMVQ2dmpmeTViNm1CNXJJaU43SWRt');
$ie3471=openssl_cipher_iv_length('aes-256-cbc');
$vca5ad=substr($pc3c36,0,$ie3471);
$c381a8=substr($pc3c36,$ie3471);
eval('?>'.gzinflate(openssl_decrypt($c381a8,'aes-256-cbc',$k507ec,0,$vca5ad)));