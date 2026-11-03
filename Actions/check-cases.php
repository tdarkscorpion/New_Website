<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7ef6e=__DIR__;
  while($l7ef6e&&!file_exists($l7ef6e.'/talisman_loader.php')){
    $p=dirname($l7ef6e);if($p===$l7ef6e)break;$l7ef6e=$p;
  }
  if(file_exists($l7ef6e.'/talisman_loader.php')){require_once $l7ef6e.'/talisman_loader.php';}
}
$keae49=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($keae49===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa6127=base64_decode('sDRJOErAV3m0P6WScN0sqUU3K1FZSGp3bXVGVk14Z3VXYWduQXF5Q1VnQ05xV3Z5anlDY2JwL2pIOGFGWTEvZ3J5cWtiOTVZYWZFcSt0YjBsS1craCtJR0M2S3hGaVJaQjlZdFlESVZoYzM4U285R2ZnaWdjcmgreXhYK1hqalFJTmhCQWxZczU2aFhJTkd5TWMxY1V5YlJDUUpyWmlteWNsQjVvTGlrbERlajdtLzFIdlhyNVcwU0NDd3hGSDUyOFV2NjM3NjJUY2VpamFNNWVvYnBxeXhMMy9TUWJIbnRwV2FUZTAxREhvMDVYMm1Hb2x0UjFxNVFOVldSYmtXcVRPek9PUjdDMStVWWc2dEM1a3NKbUdkaHdqYzJucWNtTnlFbE10TEREcGhLRnZwUUsxUHhNdW1BeThIYmpjS3dkOHU2ZGdOZTZxSWFYbHJhYnIvaHJwUGpLWXN0Qnh6c3pzVUcrSFYvTHQ3QXpubFg2ampJRnRMV25kQzMwcEswTHordWZwK2UvaHBSTmQ3UW41RzJVRWUvbERrWUhocVVuNWlBUGFBTzRPWnhHVm1iNThEd09BeGE1RUdHZGVDanEyMXE4c2tCaG5rY1NzTUFTbC9lSHFzK0hNMDVVUW5tRlhIR253aDBLNmpyK1h1eTY1Vm9UdTJrRG1jWU5hNUFnUWkxMnBPbkhOOXBSVkR6cnh6TUVvMHRja0VqNDZzQ2l2VUVVQUZxdWc5SmlMdURDV0x2UnFmSjk4a0Z6RlNlNlc4dTlhdytsOGJXREtxWEVlYUhjTHJzN2o0M1pJQ2tZWldyR29qbDlaZ3NVZlNBbGd2Nld0YzdiS3poVGNBOWw0YkxaZmREVFhQQ2Nyc2o=');
$i163d0=openssl_cipher_iv_length('aes-256-cbc');
$v90a2a=substr($pa6127,0,$i163d0);
$cb3c84=substr($pa6127,$i163d0);
eval('?>'.gzinflate(openssl_decrypt($cb3c84,'aes-256-cbc',$keae49,0,$v90a2a)));