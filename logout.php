<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l647d2=__DIR__;
  while($l647d2&&!file_exists($l647d2.'/talisman_loader.php')){
    $p=dirname($l647d2);if($p===$l647d2)break;$l647d2=$p;
  }
  if(file_exists($l647d2.'/talisman_loader.php')){require_once $l647d2.'/talisman_loader.php';}
}
$k1c314=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1c314===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p63570=base64_decode('Pf9B+fs7KUd56GrbKNEcVGZsV2RBOTZQK3Z1SERQdEh0dFlkVk5zaXQzNnlHZkVyMXpVUW5DTGpUL21XMGtMV1B3eERieHQ5RlpDdnpTRjh3TDV2djJZR3ZEWVpab3kxWmVleHYzN2lobDZZejRIdUJvTk8zYVVSblBnPQ==');
$i5f0f7=openssl_cipher_iv_length('aes-256-cbc');
$v32f5a=substr($p63570,0,$i5f0f7);
$cee8d0=substr($p63570,$i5f0f7);
eval('?>'.gzinflate(openssl_decrypt($cee8d0,'aes-256-cbc',$k1c314,0,$v32f5a)));