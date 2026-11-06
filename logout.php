<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld2caa=__DIR__;
  while($ld2caa&&!file_exists($ld2caa.'/talisman_loader.php')){
    $p=dirname($ld2caa);if($p===$ld2caa)break;$ld2caa=$p;
  }
  if(file_exists($ld2caa.'/talisman_loader.php')){require_once $ld2caa.'/talisman_loader.php';}
}
$k4d5af=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4d5af===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p88e1b=base64_decode('H1N+i3wwvHKYM0kapDmdhE1yTWtva0w0MWRuOXI2R24yVnRYL3l0b1FSc1JIV2RhRW5EcDQxaXIwdFBZbGRsWjNsQTlxN0hDMVV4TmtKdDlNcnpGZlhvVDUrNW1reC91c1FDWDJFVWQ3cUY4TVBBOEI5c2E5cTZQU3RrPQ==');
$i739dc=openssl_cipher_iv_length('aes-256-cbc');
$vb9224=substr($p88e1b,0,$i739dc);
$c7479b=substr($p88e1b,$i739dc);
eval('?>'.gzinflate(openssl_decrypt($c7479b,'aes-256-cbc',$k4d5af,0,$vb9224)));